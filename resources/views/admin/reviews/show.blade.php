@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.reviews.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.reviews.fields.text')</th>
                            <td field-key='text'>{!! $review->text !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reviews.fields.photo')</th>
                            <td field-key='photo'>@if($review->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $review->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $review->photo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reviews.fields.name')</th>
                            <td field-key='name'>{{ $review->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.reviews.fields.company')</th>
                            <td field-key='company'>{{ $review->company }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.reviews.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


