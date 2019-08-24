@extends('layouts.app')
@section('title', 'Отзывы')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="container-fluid my-padding mb-5">
    <div class="row ml-0 mr-0">
        <div class="col-md-5 page-title">
            <h2 class="text-uppercase">Отзывы</h2>
        </div>
        <div class="col-md-7">
        
        </div>
    </div>
    <div class="row mt-5 pl-0">
        @foreach($content as $block)
            <div class="col-md-4 mb-4">
                <div class="border review-item w-100">
                    <p class="cap20 p-4">{{$block->text}}</p>
                    <div class="w-100 bottom blue-back float-left">
                        <div class="col-4 p-4 float-left">
                            <img src="{{ asset(''.$block->photo.'') }}">
                        </div>
                        <div class="col-8 pt-3 float-left">
                            <b class="cap30">{{$block->name}}</b>
                            <span class="cap20">{{$block->company}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</div>
@include('components.footer')
@endsection