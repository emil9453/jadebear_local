@extends('layouts.app')
@section('title', 'Инвесторам')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
    <link rel="stylesheet" href="{{asset('css/investment.css')}}">
<div class="row pt-5">
        <div class="col-md-4 offset-md-1 page-title">
            <h2 class="text-uppercase" >Инвесторам</h2>
        </div>
        <div class="col-md-6 ">
            <button class="btn my-btn cap16 float-right">Отправить заявку</button>
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
        <ul class="toInvestorsUl">
            <li class="toInvestorsList active" onclick='location.href="{{ route('toInvestors') }}"'>Схема работы</li>
            <li class="toInvestorsList" onclick='location.href="{{ route('specialOffer') }}"'>Спецпредложения</li>
            <li class="toInvestorsList" onclick='location.href="{{ route('relationshipHistory') }}"'>История взаимиотношений</li>
        </ul>
    </div>
    <div class="col-md-5" style="margin-bottom: 50px;">
        <h3 class="text-uppercase" >Схема работы</h3>

        @foreach($content as $block)
        <div class="work-scheme">
            <img class="number" src="{{asset($block->digit)}}" alt="">
            <span class="content">
                {{$block->text}}
            </span>
        </div>
        @endforeach

        <div style="margin-bottom: 20px;">
            <span class="investment_politics">Политика Инвестирования</span>
            <span class="investment_scheme">Схема Инвестирования</span>
        </div>
    </div>
</div>
@include('components.footer')

@endsection