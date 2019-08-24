@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.team-members.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.team-members.fields.position')</th>
                            <td field-key='position'>{{ $team_member->position }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.team-members.fields.name')</th>
                            <td field-key='name'>{{ $team_member->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.team-members.fields.surname')</th>
                            <td field-key='surname'>{{ $team_member->surname }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.team-members.fields.about')</th>
                            <td field-key='about'>{!! $team_member->about !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.team-members.fields.photo')</th>
                            <td field-key='photo'>@if($team_member->photo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $team_member->photo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $team_member->photo) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.team_members.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


