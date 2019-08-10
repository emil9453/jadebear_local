<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Главная</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="blue-back">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11 pl-5"><h1 class="text-center logo">JADE BEAR</h1></div>
                <div class="col-md-1 lang-div">
                    <a class="lang active" href=""><img src="{{ asset('img/ru.png') }}"></img></a>
                    <a class="lang" href=""><img src="{{ asset('img/united-kingdom.png') }}"></img></a>
                    <a class="lang" href=""><img src="{{ asset('img/israel.png') }}"></img></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div id="ill-text">
                        <h2>WEB-STUDIO <br/> OF PERFOMANCE & DESIGN</h2>
                    </div>
                    <div class="ill-social pt-4">
                        <a href=""><img src="{{ asset('img/social white/vk.png') }}"></img></a>
                        <a href=""><img src="{{ asset('img/social white/fb.png') }}"></img></a>
                        <a href=""><img src="{{ asset('img/social white/tw.png') }}"></img></a>
                        <a href=""><img src="{{ asset('img/social white/inst.png') }}"></img></a>
                        <a href=""><img src="{{ asset('img/social white/vimeo.png') }}"></img></a>
                        <a href=""><img src="{{ asset('img/social white/dribbble.png') }}"></img></a>
                        <a href=""><img src="{{ asset('img/social white/behance.png') }}"></img></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="mac-img">
                        
                    </div>
                </div>
            </div>
            
        </div>

        <div class="menu white"><span></span> </div>
        <nav id="nav">
            <p class="nav-title">МЕНЮ</p>
            <ul class="main">
                <li><a href="{{ route('about') }}">О НАС</a></li>
                <li><a href="">ПОРТФОЛИО</a></li>
                <li><a href="">ОТЗЫВЫ</a></li>
                <li><a href="">УСЛУГИ</a></li>
                <li><a href="">ПАРТНЕРАМ</a></li>
                <li><a href="">ИНВЕСТОРАМ</a></li>
                <li><a href="">БЛОГ</a></li>
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
