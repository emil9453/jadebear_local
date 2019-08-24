<?php

namespace App\Http\Controllers\Admin;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreReviewsRequest;
use App\Http\Requests\Admin\UpdateReviewsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
use Yajra\DataTables\DataTables;

class ReviewsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Review.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('review_access')) {
            return abort(401);
        }


        
        if (request()->ajax()) {
            $query = Review::query();
            $template = 'actionsTemplate';
            if(request('show_deleted') == 1) {
                
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
                $query->onlyTrashed();
                $template = 'restoreTemplate';
            }
            $query->select([
                'reviews.id',
                'reviews.text',
                'reviews.photo',
                'reviews.name',
                'reviews.company',
            ]);
            $table = Datatables::of($query);

            $table->setRowAttr([
                'data-entry-id' => '{{$id}}',
            ]);
            $table->addColumn('massDelete', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
            $table->editColumn('actions', function ($row) use ($template) {
                $gateKey  = 'review_';
                $routeKey = 'admin.reviews';

                return view($template, compact('row', 'gateKey', 'routeKey'));
            });
            $table->editColumn('text', function ($row) {
                return $row->text ? $row->text : '';
            });
            $table->editColumn('photo', function ($row) {
                if($row->photo) { return '<a href="'. asset(env('UPLOAD_PATH').'/' . $row->photo) .'" target="_blank"><img src="'. asset(env('UPLOAD_PATH').'/thumb/' . $row->photo) .'"/>'; };
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('company', function ($row) {
                return $row->company ? $row->company : '';
            });

            $table->rawColumns(['actions','massDelete','photo']);

            return $table->make(true);
        }

        return view('admin.reviews.index');
    }

    /**
     * Show the form for creating new Review.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('review_create')) {
            return abort(401);
        }
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created Review in storage.
     *
     * @param  \App\Http\Requests\StoreReviewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewsRequest $request)
    {
        if (! Gate::allows('review_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $review = Review::create($request->all());



        return redirect()->route('admin.reviews.index');
    }


    /**
     * Show the form for editing Review.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('review_edit')) {
            return abort(401);
        }
        $review = Review::findOrFail($id);

        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update Review in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewsRequest $request, $id)
    {
        if (! Gate::allows('review_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $review = Review::findOrFail($id);
        $review->update($request->all());



        return redirect()->route('admin.reviews.index');
    }


    /**
     * Display Review.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('review_view')) {
            return abort(401);
        }
        $review = Review::findOrFail($id);

        return view('admin.reviews.show', compact('review'));
    }


    /**
     * Remove Review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.reviews.index');
    }

    /**
     * Delete all selected Review at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Review::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        $review = Review::onlyTrashed()->findOrFail($id);
        $review->restore();

        return redirect()->route('admin.reviews.index');
    }

    /**
     * Permanently delete Review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('review_delete')) {
            return abort(401);
        }
        $review = Review::onlyTrashed()->findOrFail($id);
        $review->forceDelete();

        return redirect()->route('admin.reviews.index');
    }
}
