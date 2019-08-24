@extends('layouts.app')
@section('title', 'Вакансии')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="row pt-5">
    <div class="col-md-1"></div>
    <div class="col-md-4 page-title">
        <h2 class="text-uppercase" >Вакансии</h2>
    </div>
    <div class="col-md-7">
        <nav class="navbar navbar-expand-lg navbar-light float-lg-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav cap16">
              <li class="nav-item">
                <a class="nav-link" href="#">О нас </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Наша команда </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Наша история</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Вакансия <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Контакты и реквизиты</a>
              </li>
            </ul>
            </div>
        </nav>
    </div>
</div>
<div class="row pt-5 mb-5">
    <div class="col-1"></div>
    <div class="col-10 p-0">
      <div class="banner">
        <div class="text">  
          <p class="cap30 determination">Офис</p>
          <span class="cap16 proxima">7 открытых вакансий</span>
        </div>
      </div>
    </div>
    <div class="col-1"></div>
</div>
<div class="row mb-3">
    <div class="col-1"></div>
    <div class="col-10 p-0">
      <div class="nav-vacancy">
        <a href="" class="col-md-3 active p-4 float-left">
          <p class="cap20 mb-1">Дизайн</p>
          <span class="cap14">2 места</span>
        </a>
        <a href="" class="col-md-3 p-4 float-left">
          <p class="cap20 mb-1">Управление</p>
          <span class="cap14">1 место</span>
        </a>
        <a href="" class="col-md-3 p-4 float-left">
          <p class="cap20 mb-1">Разработка</p>
          <span class="cap14">4 места</span>
        </a>
      </div>
    </div>
    <div class="col-1"></div>
</div>
<div class="row pt-5 left-padding">
    <div class="col-md-1"></div>
    <div class="col-md-3 p-0">
      <div class="nav-left-vacancy p-0">
        <ul class="pl-0">
          <li class="pb-3"><a href="{{ route('vacancy') }}">Условия</a></li>
          <li class="pb-3"><a href="{{ route('vacancy_career') }}">Карьерный рост</a></li>
          <li class="pb-3"><a class="active" href="{{ route('vacancy_semantics') }}">Семантика действий</a></li>
          <li class="pb-3"><a href="{{ route('vacancy_scheme') }}">Схема работы</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-7">
        <div class="row">
            <h2 class="text-uppercase cap30 mb-5">Вакансия UX дизайнера</h2>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 pb-5 pl-0">
              <p class="cap20">Семантика действий</p>
              <p class="cap16">
                Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.
              </p>
              <a href="" class="blue cap16" id="contract-example-link">Политика действий</a>
            </div>
            <div class="col-md-6">
              <p class="cap16">
                Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.
              </p>
            </div>
        </div>
      </div>
    <div class="col-1"></div>
</div>
<div class="container-fluid my-padding mb-5">
  <div class="row">
    <div class="col-12 banner">
      <div class="text">  
        <p class="cap30 determination">Аутсорсинг</p>
        <span class="cap16 proxima">7 открытых вакансий</span>
      </div>
    </div>
  </div>
</div>
<div class="popup"><span></span></div>
<nav id="vacancy-nav">
  <p class="nav-title">МЕНЮ</p>
  <div class="content">
    
  </div>
</nav>
<div class="overlay"></div>
@include('components.footer')

@endsection