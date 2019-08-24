@extends('layouts.app')
@section('title', 'Партнерам')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="container-fluid my-padding mb-5">
    <div class="row ml-0 mr-0">
        <div class="col-md-9 page-title">
            <h2 class="text-uppercase">Партнерам</h2>
        </div>
        <div class="col-md-3 pt-3">
            <button class="btn my-btn w-100 pt-2 pb-2 cap16">Отправить заявку</button>
        </div>
    </div>
    <div class="row ml-0 mr-0">
        <div class="col-md-12 p-0 mt-5">
            <div class="banner"></div>
        </div>
    </div>
    <div class="row ml-0 mr-0 mt-5">
        <div class="col-md-3 pl-0">
            <div class="nav-left-vacancy p-0">
                <ul class="pl-0">
                  <li class="pb-3"><a class="active" href="">Развитие</a></li>
                  <li class="pb-3"><a href="vacancy/career">Перспективный рост</a></li>
                  <li class="pb-3"><a href="vacancy/semantics">Почему именно вы?</a></li>
                  <li class="pb-3"><a href="vacancy/scheme">Схема работы</a></li>
                  <li class="pb-3"><a href="vacancy/scheme">История взаимоотношений</a></li>
                  <li class="pb-3"><a href="vacancy/scheme">Инвестирование</a></li>
                  <li class="pb-3"><a href="vacancy/scheme">Представительства</a></li>
                  <li class="pb-3"><a href="vacancy/scheme">Благодарственные письма</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 pl-4">
            <div class="row">
                <h2 class="text-uppercase cap30 mb-5">Развитие</h2>
            </div>
            <div class="row">
                @foreach($content as $key=> $block)
                    @if($key%2==0)
                        <div class="col-6 pl-0">
                    @endif
                            <p class="cap20">{{$block->caption}}</p>
                            <p class="cap16">{{$block->text}}</p>
                    @if($key%2!=0)
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('components.footer')
@endsection