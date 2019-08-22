@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.relationship-history.title')</h3>
    
    {!! Form::model($relationship_history, ['method' => 'PUT', 'route' => ['admin.relationship_histories.update', $relationship_history->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('year', trans('quickadmin.relationship-history.fields.year').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('year', old('year'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('year'))
                        <p class="help-block">
                            {{ $errors->first('year') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('caption1', trans('quickadmin.relationship-history.fields.caption1').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('text1', trans('quickadmin.relationship-history.fields.text1').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('text1', old('text1'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('text1'))
                        <p class="help-block">
                            {{ $errors->first('text1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('caption2', trans('quickadmin.relationship-history.fields.caption2').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('caption2', old('caption2'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('caption2'))
                        <p class="help-block">
                            {{ $errors->first('caption2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('text2', trans('quickadmin.relationship-history.fields.text2').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('text2', old('text2'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('text2'))
                        <p class="help-block">
                            {{ $errors->first('text2') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

