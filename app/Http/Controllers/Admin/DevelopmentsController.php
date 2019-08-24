<?php

namespace App\Http\Controllers\Admin;

use App\Development;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDevelopmentsRequest;
use App\Http\Requests\Admin\UpdateDevelopmentsRequest;
use Yajra\DataTables\DataTables;

class DevelopmentsController extends Controller
{
    /**
     * Display a listing of Development.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('development_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Development::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('development_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'developments.id',
                'developments.caption',
                'developments.text',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'development_';
                $routeKey = 'admin.developments';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('caption', function ($row) {
                return $row->caption ? $row->caption : '';
            });
            $table->editColumn('text', function ($row) {
                return $row->text ? $row->text : '';
            });

            $table->rawColumns(['actions','massDelete']);

            return $table->make(true);
        }

        return view('admin.developments.index');
    }

    /**
     * Show the form for creating new Development.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('development_create')) {
            return abort(401);
        }
        return view('admin.developments.create');
    }

    /**
     * Store a newly created Development in storage.
     *
     * @param  \App\Http\Requests\StoreDevelopmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDevelopmentsRequest $request)
    {
        if (! Gate::allows('development_create')) {
            return abort(401);
        }
        $development = Development::create($request->all());



        return redirect()->route('admin.developments.index');
    }


    /**
     * Show the form for editing Development.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('development_edit')) {
            return abort(401);
        }
        $development = Development::findOrFail($id);

        return view('admin.developments.edit', compact('development'));
    }

    /**
     * Update Development in storage.
     *
     * @param  \App\Http\Requests\UpdateDevelopmentsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDevelopmentsRequest $request, $id)
    {
        if (! Gate::allows('development_edit')) {
            return abort(401);
        }
        $development = Development::findOrFail($id);
        $development->update($request->all());



        return redirect()->route('admin.developments.index');
    }


    /**
     * Display Development.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('development_view')) {
            return abort(401);
        }
        $development = Development::findOrFail($id);

        return view('admin.developments.show', compact('development'));
    }


    /**
     * Remove Development from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('development_delete')) {
            return abort(401);
        }
        $development = Development::findOrFail($id);
        $development->delete();

        return redirect()->route('admin.developments.index');
    }

    /**
     * Delete all selected Development at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('development_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Development::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Development from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('development_delete')) {
            return abort(401);
        }
        $development = Development::onlyTrashed()->findOrFail($id);
        $development->restore();

        return redirect()->route('admin.developments.index');
    }

    /**
     * Permanently delete Development from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('development_delete')) {
            return abort(401);
        }
        $development = Development::onlyTrashed()->findOrFail($id);
        $development->forceDelete();

        return redirect()->route('admin.developments.index');
    }
}
