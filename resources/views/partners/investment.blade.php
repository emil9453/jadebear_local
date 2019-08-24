@extends('layouts.app')
@section('title', 'Инвестирование')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="container-fluid my-padding mb-5">
    <div class="row ml-0 mr-0">
        <div class="col-md-9 page-title">
            <h2 class="text-uppercase">Партнерам</h2>
        </div>
        <div class="col-md-3 pt-3">
            <button id="btn-popup-right" class="btn my-btn w-100 pt-2 pb-2 cap16">Отправить заявку</button>
        </div>
    </div>
    <div class="row ml-0 mr-0 mt-5">
        <div class="col-md-3 pl-0">
            <div class="nav-left-vacancy p-0">
                <ul class="pl-0">
                  <li class="pb-3"><a href="{{ route('partners') }}">Развитие</a></li>
                  <li class="pb-3"><a href="{{ route('partners_perspective') }}">Перспективный рост</a></li>
                  <li class="pb-3"><a href="{{ route('partners_why') }}">Почему именно вы?</a></li>
                  <li class="pb-3"><a href="{{ route('partners_scheme') }}">Схема работы</a></li>
                  <li class="pb-3"><a href="{{ route('partners_relationship') }}">История взаимоотношений</a></li>
                  <li class="pb-3"><a class="active" href="{{ route('partners_investment') }}">Инвестирование</a></li>
                  <li class="pb-3"><a href="{{ route('partners_offices') }}">Представительства</a></li>
                  <li class="pb-3"><a href="{{ route('partners_thanks') }}">Благодарственные письма</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 pl-4">
            <div class="row">
                <h2 class="text-uppercase cap30 mb-5">Инвестирование</h2>
            </div>
            <div class="chart w-100">
              <img src="{{ asset('img/chart.png') }}">
            </div>
            <div class="row mt-5">
                <div class="col-md-6 pl-0">
                    <p class="cap20">Заголовок</p>
                    <p class="cap16">Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
                    <a href="#">Политика инвестирования</a>
                </div>
                <div class="col-md-6">
                    <p class="cap20">Заголовок</p>
                    <p class="cap16">Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Не следует, однако забывать, что реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav id="vacancy-nav" class="popup-right">
  <div class="container content pl-4">
    <div class="row">
      <div class="col-2">
        <span class="popup-close">

        </span>
      </div>
      <div class="col-10">
        <h2 class="cap40 text-uppercase">Обратная связь</h2>
      </div>
    </div>
    <form>
      <div class="row mt-5">
          <div class="form-group col-6">
            <label for="exampleInputEmail1">Ваше имя</label>
            <input type="text" class="form-control rounded-0 border-top-0 border-left-0 border-right-0 border-bottom" id="exampleInputEmail1">
          </div>
          <div class="form-group col-6">
            <label for="exampleInputEmail1">Ваш номер для связи</label>
            <input type="text" class="form-control  rounded-0 border-top-0 border-left-0 border-right-0 border-bottom" id="exampleInputEmail1" placeholder="+7 ">
          </div>
      </div>
      <div class="row mt-2">
          <div class="form-group col-12">
            <label for="textarea1">Сообщение</label>
            <textarea class="form-control  rounded-0 border-top-0 border-left-0 border-right-0 border-bottom" id="textarea1" placeholder="Введите текст " rows="3"></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-6">
            <button class="btn my-btn cap16 w-100 pt-3 pb-3">Отправить резюме</button>
          </div>
          <div class="col-6">
            <p class="cap14">Нажимая на кнопку, вы даете <a href="">согласие</a> 
            на обработку персональных данных 
            и соглашаетесь с политикой 
            конфиденциальности.</p>
          </div>
      </div>
    </form>
    
  </div>
</nav>
<div class="vacancy-overlay"></div>
@include('components.footer')
@endsection