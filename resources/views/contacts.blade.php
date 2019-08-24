@extends('layouts.app')
@section('title', 'Вакансии. Схема работы')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="row pt-5">
    <div class="col-md-1"></div>
    <div class="col-md-4 page-title">
        <h2 class="text-uppercase" >Контакты</h2>
    </div>
    <div class="col-md-7">
        <nav class="navbar navbar-expand-lg navbar-light float-lg-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav cap16">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">О нас </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ourTeam') }}">Наша команда </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ourHistory') }}">Наша история</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vacancy') }}">Вакансия</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('contacts') }}">Контакты и реквизиты <span class="sr-only">(current)</span></a>
              </li>
            </ul>
            </div>
        </nav>
    </div>
</div>

<div id="contacts-container" class="container-fluid my-padding mb-5 mt-5">
  <div class="row">
    <div class="col-4 pl-0">
      <p class="cap16 mb-3">Телефон</p>
      <span class="cap30">+7 (495) 332 12 42</span>
      <p class="cap16 mb-3 mt-4">Email</p>
      <span class="cap30">jadebear@info.com</span>
    </div>
    <div class="col-8">
      <p class="cap16 mb-3">Реквизиты</p>
      <b>
        ООО «Jade Bear ltd»<br>
        г. Москва, Кутузовский пр-т, 42<br>
        ИНН: 1231234421<br>
        КПП: 0980891514<br>
        БИК: 2342351512
      </b>
    </div>
  </div>
  <div class="row">
    <div id="map" class="col-12 p-0 mt-5 mb-3">
      <img src="{{ asset('img/contacts_map.png') }}">
    </div>
  </div>
</div>

@include('components.footer')

@endsection