@extends('layouts.app')
@section('title', 'Jade Bear')
@section('background', 'blue-back')
@section('menu-type', 'white')
@section('content')
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
@endsection

        <div class="menu white"><span></span> </div>
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
</script>