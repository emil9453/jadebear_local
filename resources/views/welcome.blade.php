@extends('layouts.app')
@section('title', 'Jade Bear')
@section('background', 'blue-back')
@section('menu-type', 'white')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-6">
        <div id="left-page1" class="left-page">
            <div id="ill-text">
                <h2 id="ill-title"></h2>
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
        <div id="left-page2" class="left-page">
            <h2 class="cap50">НАПРАВЛЕНИЯ КОМПАНИИ</h2>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития.</p>
            <h3><span>01</span> ВЕБ-ДИЗАЙН</h3>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. С другой стороны начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке направлений прогрессивного развития.</p>
            <div class="nav-btn mt-5 main">
                <button class="btn left mr-0 rounded-0 float-left com-dir-left">
                    <img src="{{ asset('img/arrow-left.png') }}">
                </button>
                <button class="btn right ml-0 rounded-0 border-bottom float-left com-dir-right">
                    <img src="{{ asset('img/arrow-right.png') }}">
                </button>
            </div>
        </div>
        <div id="left-page2-2" class="left-page">
            <h2 class="cap50">НАПРАВЛЕНИЯ КОМПАНИИ</h2>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития.</p>
            <h3><span>02</span> ВЕБ-РАЗРАБОТКА </h3>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. С другой стороны начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке направлений прогрессивного развития.</p>
            <div class="nav-btn mt-5 main">
                <button class="btn left mr-0 rounded-0 float-left com-dir-left">
                    <img src="{{ asset('img/arrow-left.png') }}">
                </button>
                <button class="btn right ml-0 rounded-0 border-bottom float-left com-dir-right">
                    <img src="{{ asset('img/arrow-right.png') }}">
                </button>
            </div>
        </div>
        <div id="left-page2-3" class="left-page">
            <h2 class="cap50">НАПРАВЛЕНИЯ КОМПАНИИ</h2>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития.</p>
            <h3><span>03</span> БРЕНДИНГ</h3>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. С другой стороны начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке направлений прогрессивного развития.</p>
            <div class="nav-btn mt-5 main">
                <button class="btn left mr-0 rounded-0 float-left com-dir-left">
                    <img src="{{ asset('img/arrow-left.png') }}">
                </button>
                <button class="btn right ml-0 rounded-0 border-bottom float-left com-dir-right">
                    <img src="{{ asset('img/arrow-right.png') }}">
                </button>
            </div>
        </div>
        <div id="left-page3" class="left-page">
            <h2 class="cap50">ЧЕМ МЫ ВЫДЕЛЯЕМСЯ СРЕДИ ДРУГИХ КОМПАНИЙ?</h2>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития.</p>
            <h3><span>01</span> Отличие #1</h3>
            <p class="cap14">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. С другой стороны начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке направлений прогрессивного развития.</p>
            <div class="nav-btn mt-5 main">
                <button class="btn left mr-0 rounded-0 float-left">
                    <img src="{{ asset('img/arrow-left.png') }}">
                </button>
                <button class="btn right ml-0 rounded-0 border-bottom float-left">
                    <img src="{{ asset('img/arrow-right.png') }}">
                </button>
            </div>
        </div>
        <div id="left-page4" class="left-page">
            <h3><span>80</span> ВЫПОЛНЕННЫХ ПРОЕКТОВ</h3>
            <div class="row">
                <div class="col-4 p-0"><img src="{{ asset('img/portfolio-welcome.png') }}"></div>
                <div class="col-4 p-0"><img src="{{ asset('img/portfolio-welcome.png') }}"></div>
                <div class="col-4 p-0"><img src="{{ asset('img/portfolio-welcome.png') }}"></div>
            </div>
        </div>
        <div id="left-page5" class="left-page">
            <h3><span>73</span> БЛАГОДАРНЫХ КЛИЕНТА</h3>
            <div class="row ml-0 mr-0 mb-2">
                <div class="col-1 pt-3 pl-0 pr-0"><img class="w-100" src="{{ asset('img/partners01.png') }}"></div>
                <div class="col-11 pl-4 pt-3">
                    <b class="cap30">Билл Гейтс</b>
                    <p class="cap20">Microsoft</p>
                </div>
            </div>
            <p class="cap16">Отличные ребята, ни то что эти "индусы". Услуги, правда, у них дороже, но зато качество на высоте. Сделали ребрендинг компании, и продукта в целом. Полностью доволен сотрудничеством с этой организацией.</p>
            <div class="review mt-5">
                <img id="review1" src="{{ asset('img/review-welcome-1.png') }}">
                <img id="review2" src="{{ asset('img/review-welcome-2.png') }}">
                <img id="review3" src="{{ asset('img/review-welcome-3.png') }}">
            </div>
        </div>
        <div id="left-page6" class="left-page">
            <h3><span>14</span> КОМПАНИЙ РАЗВИВАЮТСЯ ВМЕСТЕ С НАМИ</h3>
            <p class="cap16">Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации форм развития. С другой стороны начало повседневной работы по формированию позиции позволяет выполнять важные задания по разработке направлений прогрессивного развития. </p>
            <div class="row ml-0 mr-0 mt-3">
                <div class="col-2 p-0"><img src="{{ asset('img/partner-logo-1.png') }}"></div>
                <div class="col-2 p-0"><img src="{{ asset('img/partner-logo-2.png') }}"></div>
                <div class="col-2 p-0"><img src="{{ asset('img/partner-logo-3.png') }}"></div>
                <div class="col-2 p-0"><img src="{{ asset('img/partner-logo-4.png') }}"></div>
                <div class="col-2 p-0"><img src="{{ asset('img/partner-logo-5.png') }}"></div>
                <div class="col-2 p-0"><img src="{{ asset('img/partner-logo-6.png') }}"></div>
            </div>
            <b class="cap14">Jade Bear LTD ©, 2016-2018</b>
            <a class="cap14">Связаться с нами</a>
        </div>
    </div>
    <div class="col-md-5">
        <div id="mac-img">
            
        </div>
        <div id="screen">
            <div id="page1" class="page">
                <div id="myProgress">
                    <p>LOADING...</p>
                    <div id="myBar"></div>
                </div>
            </div>
            <div id="page2" class="page">
                <button id="start-ill" class="btn rounded-0 w-100 p-2 cap20">START</button>
            </div>
            <div id="page3" class="page">
                <div class="w-100 ill-logo">
                    <img src="{{ asset('img/mac/logo.png') }}">
                </div>
            </div>
            <div id="page4" class="page">
                <div class="w-100 design">
                    <img src="{{ asset('img/mac/design.png') }}">
                </div>
            </div>
            <div id="page4-2" class="page">
                <div class="w-100 design">
                    <img src="{{ asset('img/mac/webdev.png') }}">
                </div>
            </div> 
            <div id="page4-3" class="page">
                <div class="w-100 design">
                    <img src="{{ asset('img/mac/brend.png') }}">
                </div>
            </div>
            <div id="page5" class="page p-2">
                <div class="window">
                    <a href="">
                        <img src="{{ asset('img/mac/icon.png') }}">
                    </a>
                </div>
            </div>
            <div id="page6" class="page p-2">
                <div class="window">
                    <a href="">
                        <img src="{{ asset('img/mac/show.png') }}">
                    </a>
                </div>
            </div>
            <div id="page7" class="page p-2">
                <div class="window">
                    <a href="">
                        <img src="{{ asset('img/mac/reviews.png') }}">
                    </a>
                </div>
            </div>
            <div id="page8" class="page p-2">
                <div class="window">
                    <a href="">
                        <img src="{{ asset('img/mac/development.png') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
$( document ).ready(function() {
    var scroll_enabled = false;
    var pageNumberMac = 0;
    var pageNumberLeft = -1;
    var width =0;
    var pageListVertical = ['left-page1', 'left-page2', 'left-page3', 'left-page4', 'left-page5', 'left-page6'];
    var pageListMac = ['page3', 'page4', 'page5', 'page6', 'page7', 'page8'];
    var pageMacHorizontal = ['page4', 'page4-2', 'page4-3'];
    var pageHorizontal2 = ['left-page2', 'left-page2-2', 'left-page2-3'];
    var pageNumberComDir = 0;
    var currentPageLeft = "";

    var pr = setInterval(load, 40);
    function load() {
        if (width>=100) {
            clearInterval(pr);
            $("#page1").hide();
            $("#page2").show();
        }else{
            width = width+2;
            $("#myBar").width(width+"%");
        }
    }
    function nextPageLeft() {
        if (pageNumberLeft<5) {
            if (pageNumberLeft>=0){
                $("#"+currentPageLeft).hide();
                $("#"+currentPageMac).hide();
            }
            pageNumberLeft++;
            
            $("#"+pageListVertical[pageNumberLeft]).show();
            $("#"+pageListMac[pageNumberLeft]).show();
            currentPageLeft = pageListVertical[pageNumberLeft];
            currentPageMac = pageListMac[pageNumberLeft];
            if (pageNumberLeft>0) {
                $("#"+pageListVertical[pageNumberLeft]).animate({top:'0%'}, 400);
            }
        }
    }
    
    function horizontalMoveRight() {
        if (pageNumberComDir>1)
            return;

        var prev = pageHorizontal2[pageNumberComDir];
        var prev2 = pageMacHorizontal[pageNumberComDir];
        console.log("pr: "+prev2);
        console.log("pr: "+pageNumberComDir);
        pageNumberComDir++;
        currentPageLeft = pageHorizontal2[pageNumberComDir];
        currentPageMac = pageMacHorizontal[pageNumberComDir];

        $("#"+prev).hide();
        $("#"+prev2).hide();
        $("#"+prev).animate({left:'-150%'}, 200);
        $("#"+currentPageLeft).show();
        $("#"+currentPageMac).show();
        $("#"+currentPageLeft).animate({left:'2%'}, 400);
    }
    function horizontalMoveLeft() {
        if (pageNumberComDir==0)
            return;
        
        var prev = pageHorizontal2[pageNumberComDir];
        var prev2 = pageMacHorizontal[pageNumberComDir];
        pageNumberComDir--;
        currentPageLeft = pageHorizontal2[pageNumberComDir];
        currentPageMac = pageMacHorizontal[pageNumberComDir];

        $("#"+prev).hide();
        $("#"+prev2).hide();
        $("#"+prev).animate({left:'-150%'}, 200);
        $("#"+currentPageLeft).show();
        $("#"+currentPageMac).show();
        $("#"+currentPageLeft).animate({left:'2%'}, 400);
    }

    var showText = function (target, message, index, interval) {
        if (index==0) {
            $("#ill-title").html("");
        }
        if (index < message.length) {
        $(target).append(message[index++]);
        setTimeout(function () { showText(target, message, index, interval); }, interval);
        }
    }
    $('#start-ill').click(function () {
        $("#page2").hide();
        $("#page3").show();
        nextPageLeft();
        showText("#ill-title", "WEB-STUDIO OF PERFOMANCE & DESIGN", 0, 100);
        setTimeout(function () {showText("#ill-title", "REVENUE GENERTING DESIGN & DEVELOPMENT", 0, 100);}, 7000);
        setTimeout(function () {scroll_enabled = true}, 11000);
    });
    $('.com-dir-left').click(function () {
        //nextPageMac();
        horizontalMoveLeft();
    });
    $('.com-dir-right').click(function () {
        //nextPageMac();
        horizontalMoveRight();
    });
    //Firefox
    $('body').bind('DOMMouseScroll', function(e){
        if(e.originalEvent.detail > 0&&scroll_enabled) {
            nextPageLeft();
        }else {

        }
        return true;
    });

    //IE, Opera, Safari
    $('body').bind('mousewheel', function(e){
        if(e.originalEvent.wheelDelta < 0&&scroll_enabled) {
            nextPageLeft();
        }else {

        }
        return true;
    });
});
</script>
@endsection
      