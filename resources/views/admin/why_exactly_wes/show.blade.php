@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.why-exactly-we.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.why-exactly-we.fields.caption')</th>
                            <td field-key='caption'>{{ $why_exactly_we->caption }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.why-exactly-we.fields.text')</th>
                            <td field-key='text'>{!! $why_exactly_we->text !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.why_exactly_wes.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


