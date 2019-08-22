<?php

namespace App\Http\Controllers\Admin;

use App\Politic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePoliticsRequest;
use App\Http\Requests\Admin\UpdatePoliticsRequest;
use Yajra\DataTables\DataTables;

class PoliticsController extends Controller
{
    /**
     * Display a listing of Politic.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('politic_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Politic::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('politic_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'politics.id',
                'politics.caption',
                'politics.text',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'politic_';
                $routeKey = 'admin.politics';

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

        return view('admin.politics.index');
    }

    /**
     * Show the form for creating new Politic.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('politic_create')) {
            return abort(401);
        }
        return view('admin.politics.create');
    }

    /**
     * Store a newly created Politic in storage.
     *
     * @param  \App\Http\Requests\StorePoliticsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoliticsRequest $request)
    {
        if (! Gate::allows('politic_create')) {
            return abort(401);
        }
        $politic = Politic::create($request->all());



        return redirect()->route('admin.politics.index');
    }


    /**
     * Show the form for editing Politic.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('politic_edit')) {
            return abort(401);
        }
        $politic = Politic::findOrFail($id);

        return view('admin.politics.edit', compact('politic'));
    }

    /**
     * Update Politic in storage.
     *
     * @param  \App\Http\Requests\UpdatePoliticsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoliticsRequest $request, $id)
    {
        if (! Gate::allows('politic_edit')) {
            return abort(401);
        }
        $politic = Politic::findOrFail($id);
        $politic->update($request->all());



        return redirect()->route('admin.politics.index');
    }


    /**
     * Display Politic.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('politic_view')) {
            return abort(401);
        }
        $politic = Politic::findOrFail($id);

        return view('admin.politics.show', compact('politic'));
    }


    /**
     * Remove Politic from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('politic_delete')) {
            return abort(401);
        }
        $politic = Politic::findOrFail($id);
        $politic->delete();

        return redirect()->route('admin.politics.index');
    }

    /**
     * Delete all selected Politic at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('politic_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Politic::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Politic from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('politic_delete')) {
            return abort(401);
        }
        $politic = Politic::onlyTrashed()->findOrFail($id);
        $politic->restore();

        return redirect()->route('admin.politics.index');
    }

    /**
     * Permanently delete Politic from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('politic_delete')) {
            return abort(401);
        }
        $politic = Politic::onlyTrashed()->findOrFail($id);
        $politic->forceDelete();

        return redirect()->route('admin.politics.index');
    }
}
