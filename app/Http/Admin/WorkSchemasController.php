<?php

namespace App\Http\Controllers\Admin;

use App\WorkSchema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreWorkSchemasRequest;
use App\Http\Requests\Admin\UpdateWorkSchemasRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class WorkSchemasController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of WorkSchema.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('work_schema_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = WorkSchema::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('work_schema_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'work_schemas.id',
                'work_schemas.digit',
                'work_schemas.text',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'work_schema_';
                $routeKey = 'admin.work_schemas';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('digit', function ($row) {
                if($row->digit) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->digit) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->digit) .'"/>'; };
            });
            $table->editColumn('text', function ($row) {
                return $row->text ? $row->text : '';
            });

            $table->rawColumns(['actions','massDelete','digit']);

            return $table->make(true);
        }

        return view('admin.work_schemas.index');
    }

    /**
     * Show the form for creating new WorkSchema.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('work_schema_create')) {
            return abort(401);
        }
        return view('admin.work_schemas.create');
    }

    /**
     * Store a newly created WorkSchema in storage.
     *
     * @param  \App\Http\Requests\StoreWorkSchemasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkSchemasRequest $request)
    {
        if (! Gate::allows('work_schema_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $work_schema = WorkSchema::create($request->all());



        return redirect()->route('admin.work_schemas.index');
    }


    /**
     * Show the form for editing WorkSchema.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('work_schema_edit')) {
            return abort(401);
        }
        $work_schema = WorkSchema::findOrFail($id);

        return view('admin.work_schemas.edit', compact('work_schema'));
    }

    /**
     * Update WorkSchema in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkSchemasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkSchemasRequest $request, $id)
    {
        if (! Gate::allows('work_schema_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $work_schema = WorkSchema::findOrFail($id);
        $work_schema->update($request->all());



        return redirect()->route('admin.work_schemas.index');
    }


    /**
     * Display WorkSchema.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('work_schema_view')) {
            return abort(401);
        }
        $work_schema = WorkSchema::findOrFail($id);

        return view('admin.work_schemas.show', compact('work_schema'));
    }


    /**
     * Remove WorkSchema from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('work_schema_delete')) {
            return abort(401);
        }
        $work_schema = WorkSchema::findOrFail($id);
        $work_schema->delete();

        return redirect()->route('admin.work_schemas.index');
    }

    /**
     * Delete all selected WorkSchema at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('work_schema_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = WorkSchema::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore WorkSchema from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('work_schema_delete')) {
            return abort(401);
        }
        $work_schema = WorkSchema::onlyTrashed()->findOrFail($id);
        $work_schema->restore();

        return redirect()->route('admin.work_schemas.index');
    }

    /**
     * Permanently delete WorkSchema from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('work_schema_delete')) {
            return abort(401);
        }
        $work_schema = WorkSchema::onlyTrashed()->findOrFail($id);
        $work_schema->forceDelete();

        return redirect()->route('admin.work_schemas.index');
    }
}
