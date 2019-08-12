@extends('layouts.app')
@section('title', 'Наша команда')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="row pt-5">
    <div class="col-md-1"></div>
    <div class="col-md-4 page-title">
        <h2 class="text-uppercase" >Наша команда</h2>
    </div>
    <div class="col-md-7">
        <nav class="navbar navbar-expand-lg navbar-light float-lg-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav cap16">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">О нас </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Наша команда <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('our_history') }}">Наша история</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vacancy') }}">Вакансия</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contacts') }}">Контакты и реквизиты</a>
              </li>
            </ul>
            </div>
        </nav>
    </div>
</div>
<div id="team-members" class="row pt-5 mb-5">
    <div class="col-1"></div>
    <div class="col-4 blue-back pl-0">
        <div class="container pt-5 pl-5">
            <b class="cap20">Генеральный директор</b>
            <h3 class="cap30 mt-3">Илья <br>Шмаков</h3>
            <p class="cap14 mt-4">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. С другой стороны начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке направлений прогрессивного развития. </p>
        </div>
        <div class="nav-btn mt-5">
            <button class="btn left mr-0 rounded-0 float-left">
                <img src="{{ asset('img/arrow-left.png') }}">
            </button>
            <button class="btn right ml-0 rounded-0 border-bottom float-left">
                <img src="{{ asset('img/arrow-right.png') }}">
            </button>
        </div>
    </div>
    <div class="col-6">
        <div id="mac-img-members" class="pl-5">
        </div>
    </div>
    <div class="col-1"></div>
</div>
@include('components.footer')

@endsection