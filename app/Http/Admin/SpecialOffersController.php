<?php

namespace App\Http\Controllers\Admin;

use App\SpecialOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSpecialOffersRequest;
use App\Http\Requests\Admin\UpdateSpecialOffersRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class SpecialOffersController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of SpecialOffer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('special_offer_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = SpecialOffer::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('special_offer_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'special_offers.id',
                'special_offers.photo',
                'special_offers.caption1',
                'special_offers.caption2',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'special_offer_';
                $routeKey = 'admin.special_offers';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('photo', function ($row) {
                if($row->photo) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo) .'"/>'; };
            });
            $table->editColumn('caption1', function ($row) {
                return $row->caption1 ? $row->caption1 : '';
            });
            $table->editColumn('caption2', function ($row) {
                if($row->caption2) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->caption2) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->caption2) .'"/>'; };
            });

            $table->rawColumns(['actions','massDelete','photo','caption2']);

            return $table->make(true);
        }

        return view('admin.special_offers.index');
    }

    /**
     * Show the form for creating new SpecialOffer.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('special_offer_create')) {
            return abort(401);
        }
        return view('admin.special_offers.create');
    }

    /**
     * Store a newly created SpecialOffer in storage.
     *
     * @param  \App\Http\Requests\StoreSpecialOffersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecialOffersRequest $request)
    {
        if (! Gate::allows('special_offer_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $special_offer = SpecialOffer::create($request->all());



        return redirect()->route('admin.special_offers.index');
    }


    /**
     * Show the form for editing SpecialOffer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('special_offer_edit')) {
            return abort(401);
        }
        $special_offer = SpecialOffer::findOrFail($id);

        return view('admin.special_offers.edit', compact('special_offer'));
    }

    /**
     * Update SpecialOffer in storage.
     *
     * @param  \App\Http\Requests\UpdateSpecialOffersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecialOffersRequest $request, $id)
    {
        if (! Gate::allows('special_offer_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $special_offer = SpecialOffer::findOrFail($id);
        $special_offer->update($request->all());



        return redirect()->route('admin.special_offers.index');
    }


    /**
     * Display SpecialOffer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('special_offer_view')) {
            return abort(401);
        }
        $special_offer = SpecialOffer::findOrFail($id);

        return view('admin.special_offers.show', compact('special_offer'));
    }


    /**
     * Remove SpecialOffer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('special_offer_delete')) {
            return abort(401);
        }
        $special_offer = SpecialOffer::findOrFail($id);
        $special_offer->delete();

        return redirect()->route('admin.special_offers.index');
    }

    /**
     * Delete all selected SpecialOffer at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('special_offer_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = SpecialOffer::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore SpecialOffer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('special_offer_delete')) {
            return abort(401);
        }
        $special_offer = SpecialOffer::onlyTrashed()->findOrFail($id);
        $special_offer->restore();

        return redirect()->route('admin.special_offers.index');
    }

    /**
     * Permanently delete SpecialOffer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('special_offer_delete')) {
            return abort(401);
        }
        $special_offer = SpecialOffer::onlyTrashed()->findOrFail($id);
        $special_offer->forceDelete();

        return redirect()->route('admin.special_offers.index');
    }
}
