@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.relationship-history.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.relationship-history.fields.year')</th>
                            <td field-key='year'>{{ $relationship_history->year }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.relationship-history.fields.caption1')</th>
                            <td field-key='caption1'>{{ $relationship_history->caption1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.relationship-history.fields.text1')</th>
                            <td field-key='text1'>{!! $relationship_history->text1 !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.relationship-history.fields.caption2')</th>
                            <td field-key='caption2'>{{ $relationship_history->caption2 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.relationship-history.fields.text2')</th>
                            <td field-key='text2'>{{ $relationship_history->text2 }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.relationship_histories.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


