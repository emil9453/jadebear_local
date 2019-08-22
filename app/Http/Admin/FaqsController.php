<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFaqsRequest;
use App\Http\Requests\Admin\UpdateFaqsRequest;
use Yajra\DataTables\DataTables;

class FaqsController extends Controller
{
    /**
     * Display a listing of Faq.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('faq_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Faq::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('faq_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'faqs.id',
                'faqs.caption',
                'faqs.text',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'faq_';
                $routeKey = 'admin.faqs';

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

        return view('admin.faqs.index');
    }

    /**
     * Show the form for creating new Faq.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('faq_create')) {
            return abort(401);
        }
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created Faq in storage.
     *
     * @param  \App\Http\Requests\StoreFaqsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqsRequest $request)
    {
        if (! Gate::allows('faq_create')) {
            return abort(401);
        }
        $faq = Faq::create($request->all());



        return redirect()->route('admin.faqs.index');
    }


    /**
     * Show the form for editing Faq.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('faq_edit')) {
            return abort(401);
        }
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.edit', compact('faq'));
    }

    /**
     * Update Faq in storage.
     *
     * @param  \App\Http\Requests\UpdateFaqsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqsRequest $request, $id)
    {
        if (! Gate::allows('faq_edit')) {
            return abort(401);
        }
        $faq = Faq::findOrFail($id);
        $faq->update($request->all());



        return redirect()->route('admin.faqs.index');
    }


    /**
     * Display Faq.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('faq_view')) {
            return abort(401);
        }
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.show', compact('faq'));
    }


    /**
     * Remove Faq from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('faq_delete')) {
            return abort(401);
        }
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faqs.index');
    }

    /**
     * Delete all selected Faq at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('faq_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Faq::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Faq from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('faq_delete')) {
            return abort(401);
        }
        $faq = Faq::onlyTrashed()->findOrFail($id);
        $faq->restore();

        return redirect()->route('admin.faqs.index');
    }

    /**
     * Permanently delete Faq from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('faq_delete')) {
            return abort(401);
        }
        $faq = Faq::onlyTrashed()->findOrFail($id);
        $faq->forceDelete();

        return redirect()->route('admin.faqs.index');
    }
}
