@extends('layouts.app')
@section('title', 'О нас')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4 page-title">
        <h2 class="text-uppercase">О НАС</h2>
    </div>
    <div class="col-md-7">
        <nav class="navbar navbar-expand-lg navbar-light float-lg-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('about') }}">О нас <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ourTeam') }}">Наша команда</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ourHistory') }}">Наша история</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vacancy') }}">Вакансия</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contacts') }}">Контакты и реквизиты</a>
              </li>
            </ul>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <h2 class="page-title">О НАС</h2>
                </div>
                <div class="col-md-7">
                    <nav class="navbar navbar-expand-lg navbar-light float-lg-right">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">О нас <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('ourTeam') }}">Наша команда</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('ourHistory') }}">Наша история</a>
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

        </nav>
    </div>
</div>
<div class="row pt-5 mypadding">
    <div class="col-md-12 pt-3">
        <div id="about-big-image">
            
        </div>
    </div>
</div>
<div class="row pt-5 mypadding">
    <div class="col-md-4">
        <div class="back-picture pic01 pt-1">
            <p class="cap30">КТО МЫ?</p>
        </div>
    </div>
    <div class="col-md-4 about-desc">
        <p>Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
    </div>
    <div class="col-md-4 about-desc">
        <p>Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
    </div>
</div>
<div class="row pt-5 mypadding">
    <div class="col-md-4">
        <div class="back-picture pic02 pt-1">
        </div>
    </div>
    <div class="col-md-4 about-desc">
        <p>Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
    </div>
    <div class="col-md-4 about-desc">
        <p>Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
    </div>
</div>
<div class="row pt-5 mypadding">
    <div class="col-md-4">
        <div class="back-picture pic03 pt-1">
        </div>
    </div>
    <div class="col-md-4 about-desc">
        <p>Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
    </div>
    <div class="col-md-4 about-desc">
        <p>Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
    </div>
</div>
<div id="about-last" class="row mypadding">
    <div class="col-md-4 blue-back">
        <div class="back-picture pic04">
        </div>
        <div class="container">
            <h3 class="cap20">Microsoft</h3>
            <p class="cap16">Сотрудничество с самым крупным поставщиком програмного обеспечения началось в 2015 года. С тех пор совместными усилиями мы запустили 2 многофункциональных сервиса.</p>
        </div>
        <div id="more-button">
            <img class="float-left" src="{{ asset('img/more-button.png') }}">
            <p class="cap16 float-left">Условия развития</p>
        </div>
    </div>
    <div class="col-md-8 partners">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('img/partners01.png') }}">
            </div>
            <div class="col-3">
                <img src="{{ asset('img/partners02.png') }}">

            </div>
            <div class="col-3">
                <img src="{{ asset('img/partners03.png') }}">
            </div>
            <div class="col-3">
                <img src="{{ asset('img/partners01.png') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('img/partners01.png') }}">
            </div>
            <div class="col-3">
                <img src="{{ asset('img/partners02.png') }}">
            </div>
            <div class="col-3">
                <img src="{{ asset('img/partners03.png') }}">
            </div>
            <div class="col-3">
                <img src="{{ asset('img/partners01.png') }}">
            </div>
        </div>

        <div class="menu black"> <span></span> </div>
        <nav id="nav">
            <p class="nav-title">МЕНЮ</p>
            <ul class="main">
                <li><a href="{{ route('about') }}">О НАС</a></li>
                <li><a href="{{ route('portfolio') }}">ПОРТФОЛИО</a></li>
                <li><a href="{{ route('reviews') }}">ОТЗЫВЫ</a></li>
                <li><a href="{{ route('services') }}">УСЛУГИ</a></li>
                <li><a href="{{ route('toPartners') }}">ПАРТНЕРАМ</a></li>
                <li><a href="{{ route('toInvestors') }}">ИНВЕСТОРАМ</a></li>
                <li><a href="{{ route('blog') }}">БЛОГ</a></li>
            </ul>
        </nav>
        <div class="overlay"></div>

        

    </body>
</html>
<script src="js/app.js" charset="utf-8"></script>
<script>
$('.menu, .overlay').click(function () {
    $('.menu').toggleClass('clicked');
    $('#nav').toggleClass('show');
});
</script>

    </div>
</div>
@include('components.footer')
@endsection