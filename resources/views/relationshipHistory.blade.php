@extends('layouts.app')
@section('title', 'История взаимиотношений')
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
    <div class="row pt-5 mb-5">
        <div class="col-md-3 offset-md-1">
            <ul class="toInvestorsUl">
                <li class="toInvestorsList" onclick='location.href="{{ route('toInvestors') }}"'>Схема работы</li>
                <li class="toInvestorsList" onclick='location.href="{{ route('specialOffer') }}"'>Спецпредложения</li>
                <li class="toInvestorsList active" onclick='location.href="{{ route('relationshipHistory') }}"'>История взаимиотношений</li>
            </ul>
        </div>
        <div class="col-md-7" style="margin-bottom: 50px;">
            <h3 class="text-uppercase" >История взаимиотношений</h3>
            <div class="investTimeline">
                <div class="investTimelinePart">
                    <div class="timelineBall">

                    </div>
                    <div class="timelineYear active">
                        2014
                    </div>
                    <span class="timelineRow">

                    </span>
                </div>
                <div class="investTimelinePart">
                    <div class="timelineBall">

                    </div>
                    <div class="timelineYear">
                        2015
                    </div>
                    <span class="timelineRow">

                    </span>
                </div>
                <div class="investTimelinePart">
                    <div class="timelineBall">

                    </div>
                    <div class="timelineYear">
                        2016
                    </div>
                    <span class="timelineRow">

                    </span>
                </div>
                <div class="investTimelinePart">
                    <div class="timelineBall">

                    </div>
                    <div class="timelineYear">
                        2017
                    </div>
                    <span class="timelineRow">

                    </span>
                </div>
                <div class="investTimelinePart">
                    <div class="timelineBall">

                    </div>
                    <div class="timelineYear">
                        2018
                    </div>
                    <span class="timelineRow">

                    </span>
                </div>
            </div>
            <div class="row" style="margin-top: 45px;">
                <div class="col-md-6">
                    <h3>Заголовок</h3>
                    <div class="text">
                        Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения направлений прогрессивного развития. Таким образом рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Заголовок</h3>
                    <div class="text">
                        Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности требуют определения и уточнения направлений прогрессивного развития. Таким образом рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.
                    </div>
                </div>
            </div>

        </div>

    </div>
@include('components.footer')

@endsection