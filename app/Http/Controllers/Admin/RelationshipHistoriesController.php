<?php

namespace App\Http\Controllers\Admin;

use App\RelationshipHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRelationshipHistoriesRequest;
use App\Http\Requests\Admin\UpdateRelationshipHistoriesRequest;
use Yajra\DataTables\DataTables;

class RelationshipHistoriesController extends Controller
{
    /**
     * Display a listing of RelationshipHistory.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('relationship_history_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = RelationshipHistory::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('relationship_history_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'relationship_histories.id',
                'relationship_histories.year',
                'relationship_histories.caption1',
                'relationship_histories.text1',
                'relationship_histories.caption2',
                'relationship_histories.text2',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'relationship_history_';
                $routeKey = 'admin.relationship_histories';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('year', function ($row) {
                return $row->year ? $row->year : '';
            });
            $table->editColumn('caption1', function ($row) {
                return $row->caption1 ? $row->caption1 : '';
            });
            $table->editColumn('text1', function ($row) {
                return $row->text1 ? $row->text1 : '';
            });
            $table->editColumn('caption2', function ($row) {
                return $row->caption2 ? $row->caption2 : '';
            });
            $table->editColumn('text2', function ($row) {
                return $row->text2 ? $row->text2 : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.relationship_histories.index');
    }

    /**
     * Show the form for creating new RelationshipHistory.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('relationship_history_create')) {
            return abort(401);
        }
        return view('admin.relationship_histories.create');
    }

    /**
     * Store a newly created RelationshipHistory in storage.
     *
     * @param  \App\Http\Requests\StoreRelationshipHistoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRelationshipHistoriesRequest $request)
    {
        if (! Gate::allows('relationship_history_create')) {
            return abort(401);
        }
        $relationship_history = RelationshipHistory::create($request->all());



        return redirect()->route('admin.relationship_histories.index');
    }


    /**
     * Show the form for editing RelationshipHistory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('relationship_history_edit')) {
            return abort(401);
        }
        $relationship_history = RelationshipHistory::findOrFail($id);

        return view('admin.relationship_histories.edit', compact('relationship_history'));
    }

    /**
     * Update RelationshipHistory in storage.
     *
     * @param  \App\Http\Requests\UpdateRelationshipHistoriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRelationshipHistoriesRequest $request, $id)
    {
        if (! Gate::allows('relationship_history_edit')) {
            return abort(401);
        }
        $relationship_history = RelationshipHistory::findOrFail($id);
        $relationship_history->update($request->all());



        return redirect()->route('admin.relationship_histories.index');
    }


    /**
     * Display RelationshipHistory.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('relationship_history_view')) {
            return abort(401);
        }
        $relationship_history = RelationshipHistory::findOrFail($id);

        return view('admin.relationship_histories.show', compact('relationship_history'));
    }


    /**
     * Remove RelationshipHistory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('relationship_history_delete')) {
            return abort(401);
        }
        $relationship_history = RelationshipHistory::findOrFail($id);
        $relationship_history->delete();

        return redirect()->route('admin.relationship_histories.index');
    }

    /**
     * Delete all selected RelationshipHistory at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('relationship_history_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = RelationshipHistory::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore RelationshipHistory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('relationship_history_delete')) {
            return abort(401);
        }
        $relationship_history = RelationshipHistory::onlyTrashed()->findOrFail($id);
        $relationship_history->restore();

        return redirect()->route('admin.relationship_histories.index');
    }

    /**
     * Permanently delete RelationshipHistory from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('relationship_history_delete')) {
            return abort(401);
        }
        $relationship_history = RelationshipHistory::onlyTrashed()->findOrFail($id);
        $relationship_history->forceDelete();

        return redirect()->route('admin.relationship_histories.index');
    }
}
