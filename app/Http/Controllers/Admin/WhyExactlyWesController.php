<?php

namespace App\Http\Controllers\Admin;

use App\WhyExactlyWe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreWhyExactlyWesRequest;
use App\Http\Requests\Admin\UpdateWhyExactlyWesRequest;
use Yajra\DataTables\DataTables;

class WhyExactlyWesController extends Controller
{
    /**
     * Display a listing of WhyExactlyWe.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('why_exactly_we_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = WhyExactlyWe::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('why_exactly_we_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'why_exactly_wes.id',
                'why_exactly_wes.caption',
                'why_exactly_wes.text',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'why_exactly_we_';
                $routeKey = 'admin.why_exactly_wes';

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

        return view('admin.why_exactly_wes.index');
    }

    /**
     * Show the form for creating new WhyExactlyWe.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('why_exactly_we_create')) {
            return abort(401);
        }
        return view('admin.why_exactly_wes.create');
    }

    /**
     * Store a newly created WhyExactlyWe in storage.
     *
     * @param  \App\Http\Requests\StoreWhyExactlyWesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWhyExactlyWesRequest $request)
    {
        if (! Gate::allows('why_exactly_we_create')) {
            return abort(401);
        }
        $why_exactly_we = WhyExactlyWe::create($request->all());



        return redirect()->route('admin.why_exactly_wes.index');
    }


    /**
     * Show the form for editing WhyExactlyWe.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('why_exactly_we_edit')) {
            return abort(401);
        }
        $why_exactly_we = WhyExactlyWe::findOrFail($id);

        return view('admin.why_exactly_wes.edit', compact('why_exactly_we'));
    }

    /**
     * Update WhyExactlyWe in storage.
     *
     * @param  \App\Http\Requests\UpdateWhyExactlyWesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWhyExactlyWesRequest $request, $id)
    {
        if (! Gate::allows('why_exactly_we_edit')) {
            return abort(401);
        }
        $why_exactly_we = WhyExactlyWe::findOrFail($id);
        $why_exactly_we->update($request->all());



        return redirect()->route('admin.why_exactly_wes.index');
    }


    /**
     * Display WhyExactlyWe.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('why_exactly_we_view')) {
            return abort(401);
        }
        $why_exactly_we = WhyExactlyWe::findOrFail($id);

        return view('admin.why_exactly_wes.show', compact('why_exactly_we'));
    }


    /**
     * Remove WhyExactlyWe from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('why_exactly_we_delete')) {
            return abort(401);
        }
        $why_exactly_we = WhyExactlyWe::findOrFail($id);
        $why_exactly_we->delete();

        return redirect()->route('admin.why_exactly_wes.index');
    }

    /**
     * Delete all selected WhyExactlyWe at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('why_exactly_we_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = WhyExactlyWe::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore WhyExactlyWe from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('why_exactly_we_delete')) {
            return abort(401);
        }
        $why_exactly_we = WhyExactlyWe::onlyTrashed()->findOrFail($id);
        $why_exactly_we->restore();

        return redirect()->route('admin.why_exactly_wes.index');
    }

    /**
     * Permanently delete WhyExactlyWe from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('why_exactly_we_delete')) {
            return abort(401);
        }
        $why_exactly_we = WhyExactlyWe::onlyTrashed()->findOrFail($id);
        $why_exactly_we->forceDelete();

        return redirect()->route('admin.why_exactly_wes.index');
    }
}
