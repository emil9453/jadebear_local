@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.work-schema.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.work-schema.fields.digit')</th>
                            <td field-key='digit'>@if($work_schema->digit)<a href="{{ asset(env('UPLOAD_PATH').'/' . $work_schema->digit) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $work_schema->digit) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.work-schema.fields.text')</th>
                            <td field-key='text'>{!! $work_schema->text !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.work_schemas.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


