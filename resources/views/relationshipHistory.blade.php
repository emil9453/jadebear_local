@extends('layouts.app')
@section('title', 'История взаимиотношений')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
    <script>
        let makeActive = (element) =>
        {
            let year = element.text().trim();
            $('[year]').hide();
            $('.timelineYear').removeClass('active');
            element.addClass('active');
            $('[year="'+year+'"]').fadeIn(300);
        }
    </script>
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
                @foreach($content as $block)
                    <div class="investTimelinePart">
                        <div class="timelineBall">

                        </div>
                        <div class="timelineYear" onclick="makeActive($(this))">
                            {{$block->year}}
                        </div>
                        <span class="timelineRow">

                        </span>
                    </div>
                @endforeach
            </div>
            <div class="row" style="margin-top: 45px;">
                @foreach($content as $block)
                    <div class="main_block row" style="display: none;" year="{{$block->year}}">
                        <div class="col-md-6">
                            <h3>{{$block->caption1}}</h3>
                            <div class="text">
                                {{$block->text1}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>{{$block->caption2}}</h3>
                            <div class="text">
                                {{$block->text2}}
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

        </div>

    </div>
@include('components.footer')

@endsection