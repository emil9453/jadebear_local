@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.work-schema.title')</h3>
    
    {!! Form::model($work_schema, ['method' => 'PUT', 'route' => ['admin.work_schemas.update', $work_schema->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($work_schema->digit)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$work_schema->digit) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$work_schema->digit) }}"></a>
                    @endif
                    {!! Form::label('digit', trans('quickadmin.work-schema.fields.digit').'*', ['class' => 'control-label']) !!}
                    {!! Form::file('digit', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('digit_max_size', 2) !!}
                    {!! Form::hidden('digit_max_width', 4096) !!}
                    {!! Form::hidden('digit_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('digit'))
                        <p class="help-block">
                            {{ $errors->first('digit') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('text', trans('quickadmin.work-schema.fields.text').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('text', old('text'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
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

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

