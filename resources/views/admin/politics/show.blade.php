@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.politics.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.politics.fields.caption')</th>
                            <td field-key='caption'>{{ $politic->caption }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.politics.fields.text')</th>
                            <td field-key='text'>{!! $politic->text !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.politics.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


