@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.special-offers.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.special-offers.fields.photo')</th>
                            <td field-key='photo'>@if($special_offer->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $special_offer->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $special_offer->photo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.special-offers.fields.caption1')</th>
                            <td field-key='caption1'>{{ $special_offer->caption1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.special-offers.fields.caption2')</th>
                            <td field-key='caption2'>@if($special_offer->caption2)<a href="{{ asset(env('UPLOAD_PATH').'/' . $special_offer->caption2) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $special_offer->caption2) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.special_offers.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


