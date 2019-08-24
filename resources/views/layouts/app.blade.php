<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="@yield('background')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11 pl-5"><h1 class="text-center logo-@yield('menu-type')">JADE BEAR</h1></div>
                <div class="col-md-1 lang-div">
                    <a class="lang active" href=""><img src="{{ asset('img/ru.png') }}"></img></a>
                    <a class="lang" href=""><img src="{{ asset('img/united-kingdom.png') }}"></img></a>
                    <a class="lang" href=""><img src="{{ asset('img/israel.png') }}"></img></a>
                </div>
            </div>
            @yield('content')
        </div>

        <div class="menu @yield('menu-type')"><span></span> </div>
        <nav id="nav">
            <p class="nav-title">МЕНЮ</p>
            <ul class="main">
                <li><a href="{{ route('about') }}">О НАС</a></li>
                <li><a href="{{ route('portfolio') }}">ПОРТФОЛИО</a></li>
                <li><a href="{{ route('reviews') }}">ОТЗЫВЫ</a></li>
                <li><a href="{{ route('services') }}">УСЛУГИ</a></li>
                <li><a href="{{ route('partners') }}">ПАРТНЕРАМ</a></li>
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
$('#btn-vacancy-responce').click(function () {
    $('.popup').toggleClass('clicked');
    $('#vacancy-nav').toggleClass('show');
    $('.vacancy-overlay').toggleClass('show');
});
</script>
