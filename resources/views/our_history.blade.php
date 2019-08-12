@extends('layouts.app')
@section('title', 'Наша команда')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="row pt-5">
    <div class="col-md-1"></div>
    <div class="col-md-4 page-title">
        <h2 class="text-uppercase" >Наша история</h2>
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
              <li class="nav-item active">
                <a class="nav-link" href="#">Наша команда <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Наша история</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Вакансия</a>
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
    <div class="col-3">
        <div class="timeline">
            <div class="entry">
            <div class="title">
              <h3 class="determination cap20">2014</h3>
            </div>
            </div>
            <div class="entry active">
            <div class="title">
              <h3 class="determination cap20">Декабрь</h3>
            </div>
            </div>
            <div class="entry">
            <div class="title">
              <h3 class="determination cap20">2015</h3>
            </div>

            </div>
            <div class="entry">
            <div class="title">
              <h3 class="determination cap20">2016</h3>
            </div>
            </div>
            <div class="entry">
            <div class="title">
              <h3 class="determination cap20">2017</h3>
            </div>
            </div>
            <div class="entry">
            <div class="title">
              <h3 class="determination cap20">2018</h3>
            </div>
            </div>
            <div class="entry">
            <div class="title">
              <h3 class="determination cap20 blue">Заглянуть в будущее</h3>
            </div>
            </div>
        </div>
    </div>
    <div class="col-7">
        <div class="row">
            <h2 class="determination cap30">ЗАГОЛВОК</h2>
        </div>
        <div class="row">
            <div class="col-6 pl-0 pr-5">
                <p class="proxima cap16">Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
            </div>
            <div class="col-6 pl-5">
                <p class="proxima cap16">Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>
@include('components.footer')

@endsection