@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.special-offers.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.special_offers.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('photo', trans('quickadmin.special-offers.fields.photo').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('photo', ['class' => 'form-control', 'style' => 'margin-top: 4px;', 'required' => '']) !!}
                    {!! Form::hidden('photo_max_size', 2) !!}
                    {!! Form::hidden('photo_max_width', 4096) !!}
                    {!! Form::hidden('photo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo'))
                        <p class="help-block">
                            {{ $errors->first('photo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('caption1', trans('quickadmin.special-offers.fields.caption1').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('caption1', old('caption1'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('caption1'))
                        <p class="help-block">
                            {{ $errors->first('caption1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('caption2', trans('quickadmin.special-offers.fields.caption2').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('caption2', ['class' => 'form-control', 'style' => 'margin-top: 4px;', 'required' => '']) !!}
                    {!! Form::hidden('caption2_max_size', 2) !!}
                    {!! Form::hidden('caption2_max_width', 4096) !!}
                    {!! Form::hidden('caption2_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('caption2'))
                        <p class="help-block">
                            {{ $errors->first('caption2') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

