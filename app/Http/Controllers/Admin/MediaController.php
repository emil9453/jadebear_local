<?php

namespace App\Http\Controllers\Admin;

use App\Medium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMediaRequest;
use App\Http\Requests\Admin\UpdateMediaRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class MediaController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Medium.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('medium_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Medium::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('medium_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'media.id',
                'media.photo',
                'media.caption',
                'media.text',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'medium_';
                $routeKey = 'admin.media';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('photo', function ($row) {
                if($row->photo) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo) .'"/>'; };
            });
            $table->editColumn('caption', function ($row) {
                return $row->caption ? $row->caption : '';
            });
            $table->editColumn('text', function ($row) {
                return $row->text ? $row->text : '';
            });

            $table->rawColumns(['actions','massDelete','photo']);

            return $table->make(true);
        }

        return view('admin.media.index');
    }

    /**
     * Show the form for creating new Medium.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('medium_create')) {
            return abort(401);
        }
        return view('admin.media.create');
    }

    /**
     * Store a newly created Medium in storage.
     *
     * @param  \App\Http\Requests\StoreMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaRequest $request)
    {
        if (! Gate::allows('medium_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $medium = Medium::create($request->all());



        return redirect()->route('admin.media.index');
    }


    /**
     * Show the form for editing Medium.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('medium_edit')) {
            return abort(401);
        }
        $medium = Medium::findOrFail($id);

        return view('admin.media.edit', compact('medium'));
    }

    /**
     * Update Medium in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaRequest $request, $id)
    {
        if (! Gate::allows('medium_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $medium = Medium::findOrFail($id);
        $medium->update($request->all());



        return redirect()->route('admin.media.index');
    }


    /**
     * Display Medium.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('medium_view')) {
            return abort(401);
        }
        $medium = Medium::findOrFail($id);

        return view('admin.media.show', compact('medium'));
    }


    /**
     * Remove Medium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('medium_delete')) {
            return abort(401);
        }
        $medium = Medium::findOrFail($id);
        $medium->delete();

        return redirect()->route('admin.media.index');
    }

    /**
     * Delete all selected Medium at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('medium_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Medium::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Medium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('medium_delete')) {
            return abort(401);
        }
        $medium = Medium::onlyTrashed()->findOrFail($id);
        $medium->restore();

        return redirect()->route('admin.media.index');
    }

    /**
     * Permanently delete Medium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('medium_delete')) {
            return abort(401);
        }
        $medium = Medium::onlyTrashed()->findOrFail($id);
        $medium->forceDelete();

        return redirect()->route('admin.media.index');
    }
}
