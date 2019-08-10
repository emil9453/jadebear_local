<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>О нас</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="white-back">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11 pl-5"><h1 class="text-center logo-black">JADE BEAR</h1></div>
                <div class="col-md-1 lang-div">
                    <a class="lang active" href=""><img src="{{ asset('img/ru.png') }}"></img></a>
                    <a class="lang" href=""><img src="{{ asset('img/united-kingdom.png') }}"></img></a>
                    <a class="lang" href=""><img src="{{ asset('img/israel.png') }}"></img></a>
                </div>
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
                            <a class="nav-link" href="#">Наша команда</a>
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
                </div>
            </div>
            <div class="mypadding footer pt-5">
                <div class="row">
                    <div class="col-4">
                        <p class="number cap30">+7 (495) 332 12 42</p>
                        <span class="address cap16">Москва, Кутузовский пр-т, 42</span>
                    </div>
                    <div class="col-8">
                        <div class="social">
                            <a href=""><img src="{{ asset('img/social black/vk.png') }}"></img></a>
                            <a href=""><img src="{{ asset('img/social black/facebook.png') }}"></img></a>
                            <a href=""><img src="{{ asset('img/social black/twitter.png') }}"></img></a>
                            <a href=""><img src="{{ asset('img/social black/instagram.png') }}"></img></a>
                            <a href=""><img src="{{ asset('img/social black/vimeo.png') }}"></img></a>
                            <a href=""><img src="{{ asset('img/social black/dribbble.png') }}"></img></a>
                            <a href=""><img src="{{ asset('img/social black/behance.png') }}"></img></a>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-3">
                        <button class="btn my-btn cap16">Обратная связь</button>
                    </div>
                    <div class="col-9">
                        <p class="float-right">
                            <a href="">Условия сайта </a>
                            <a href="">Техническая поддержка</a>
                            <a href="">Политика ценообразования</a>
                        </p>
                        <p class="float-right">
                            <a href="">Благодарственные письма</a>
                            <a href="">Платежная информация</a>
                            <a href="">Соответсвие ФЗ и НПА РФ</a>
                        </p>
                    </div>
                </div>
                <div class="row pt-5 copyright">
                    <div class="col-3">
                        <span>Jade Bear LTD ©, 2016-2018</span>
                    </div>
                    <div class="col-9">
                        <span class="float-right ml-4">JADE RAVEN</span>
                        <span class="float-right ml-4">JADE RABBIT</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu black"> <span></span> </div>
        <nav id="nav">
            <p class="nav-title">МЕНЮ</p>
            <ul class="main">
                <li><a href="">О НАС</a></li>
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
