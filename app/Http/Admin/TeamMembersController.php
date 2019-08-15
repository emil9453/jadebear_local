<?php

namespace App\Http\Controllers\Admin;

use App\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTeamMembersRequest;
use App\Http\Requests\Admin\UpdateTeamMembersRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class TeamMembersController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of TeamMember.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('team_member_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = TeamMember::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('team_member_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'team_members.id',
                'team_members.position',
                'team_members.name',
                'team_members.surname',
                'team_members.about',
                'team_members.photo',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'team_member_';
                $routeKey = 'admin.team_members';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('position', function ($row) {
                return $row->position ? $row->position : '';
            });
            $table->editColumn('surname', function ($row) {
                return $row->surname ? $row->surname : '';
            });
            $table->editColumn('about', function ($row) {
                return $row->about ? $row->about : '';
            });
            $table->editColumn('photo', function ($row) {
                if($row->photo) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo) .'"/>'; };
            });

            $table->rawColumns(['actions','massDelete','photo']);

            return $table->make(true);
        }

        return view('admin.team_members.index');
    }

    /**
     * Show the form for creating new TeamMember.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('team_member_create')) {
            return abort(401);
        }
        return view('admin.team_members.create');
    }

    /**
     * Store a newly created TeamMember in storage.
     *
     * @param  \App\Http\Requests\StoreTeamMembersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamMembersRequest $request)
    {
        if (! Gate::allows('team_member_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $team_member = TeamMember::create($request->all());



        return redirect()->route('admin.team_members.index');
    }


    /**
     * Show the form for editing TeamMember.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('team_member_edit')) {
            return abort(401);
        }
        $team_member = TeamMember::findOrFail($id);

        return view('admin.team_members.edit', compact('team_member'));
    }

    /**
     * Update TeamMember in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamMembersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamMembersRequest $request, $id)
    {
        if (! Gate::allows('team_member_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $team_member = TeamMember::findOrFail($id);
        $team_member->update($request->all());



        return redirect()->route('admin.team_members.index');
    }


    /**
     * Display TeamMember.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('team_member_view')) {
            return abort(401);
        }
        $team_member = TeamMember::findOrFail($id);

        return view('admin.team_members.show', compact('team_member'));
    }


    /**
     * Remove TeamMember from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('team_member_delete')) {
            return abort(401);
        }
        $team_member = TeamMember::findOrFail($id);
        $team_member->delete();

        return redirect()->route('admin.team_members.index');
    }

    /**
     * Delete all selected TeamMember at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('team_member_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = TeamMember::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore TeamMember from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('team_member_delete')) {
            return abort(401);
        }
        $team_member = TeamMember::onlyTrashed()->findOrFail($id);
        $team_member->restore();

        return redirect()->route('admin.team_members.index');
    }

    /**
     * Permanently delete TeamMember from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('team_member_delete')) {
            return abort(401);
        }
        $team_member = TeamMember::onlyTrashed()->findOrFail($id);
        $team_member->forceDelete();

        return redirect()->route('admin.team_members.index');
    }
}
