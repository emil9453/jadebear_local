@extends('layouts.app')
@section('title', 'Условия сайта')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
    <link rel="stylesheet" href="{{asset('css/service.css')}}">
<div class="row pt-5">
        <div class="col-md-4 offset-md-1 page-title">
            <h2 class="text-uppercase" >Условия сайта</h2>
        </div>

    <div class="col-md-1"></div>
</div>
<div class="row pt-5 mypadding">
    <div class="col-md-12 pt-3">
        <div class="namingDiv" style="margin-top: 0;">

        </div>
    </div>
</div>
<div class="row pt-5 mb-5">
    <div class="col-md-3 offset-md-1">
        <ul class="pageUl">
            <li class="pageList " onclick='location.href="{{ route('media') }}"'>СМИ о нас</li>
            <li class="pageList active" onclick='location.href="{{ route('politics') }}"'>Политика конфидетциальности</li>
            <li class="pageList" onclick='location.href="{{ route('faq') }}"'>FAQ</li>
        </ul>
    </div>
    <div class="col-md-6" style="margin-bottom: 50px;">
        <h3 class="text-uppercase" >Политика конфидетциальности</h3>
        @foreach($content as $block)
            <div class="service">
                <h3>{{$block->caption}}</h3>
                <div>
                    {{$block->text}}
                </div>
            </div>
        @endforeach
    </div>

</div>
@include('components.footer')

@endsection