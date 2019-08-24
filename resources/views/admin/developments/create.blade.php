@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.development.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.developments.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('caption', trans('quickadmin.development.fields.caption').'', ['class' => 'control-label']) !!}
                    {!! Form::text('caption', old('caption'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('caption'))
                        <p class="help-block">
                            {{ $errors->first('caption') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('text', trans('quickadmin.development.fields.text').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('text', old('text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('text'))
                        <p class="help-block">
                            {{ $errors->first('text') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

