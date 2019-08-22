@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.media.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.media.fields.photo')</th>
                            <td field-key='photo'>@if($medium->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $medium->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $medium->photo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.media.fields.caption')</th>
                            <td field-key='caption'>{{ $medium->caption }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.media.fields.text')</th>
                            <td field-key='text'>{{ $medium->text }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.media.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


