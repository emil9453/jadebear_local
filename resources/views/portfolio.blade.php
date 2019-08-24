@extends('layouts.app')
@section('title', 'Портфолио')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="container my-padding">
<div class="row pt-5">
    <div class="col-md-4 page-title">
        <h2 class="text-uppercase" >Портфолио</h2>
    </div>
    <div class="col-md-8">
        <nav class="navbar navbar-expand-lg navbar-light float-lg-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav cap16">
              <li class="nav-item">
                <a class="nav-link  active" href="#">Веб-дизайн <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Разработка</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Бренд</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Патенты</a>
              </li>
            </ul>
            </div>
        </nav>
    </div>
</div>
<div class="row">
  <div class="col-12 p-0">
      <div id="portfolio-banner">
        
      </div>
  </div>
</div>
<div class="row mt-5 mb-5">
  <div class="col-md-8 pl-0">
    <div class="row">
      <div id="portfolio-first" class="border border-light pl-4 w-100">
        <h2 class="cap50">GSTAT</h2>
        <p class="cap16">Сервис для ведения статистики горнодобывающих компаний</p>
      </div>
      <a id="portfolio-more-btn" href="">
        <img src="{{ asset('img/more-button-blue.png') }}">
      </a>
    </div>
    <div class="row mt-3">
      <div class="col-md-6 pl-0">
        <div class="portfolio-item" style="height: 200px;">
        </div>
        <div class="portfolio-item" style="height: 200px;">
        </div>
        <div class="portfolio-item" style="height: 200px;">
        </div>
        <div class="portfolio-item" style="height: 200px;">
        </div>
      </div>
      <div class="col-md-6 pl-0">
        <div class="portfolio-item" style="height: 200px;">
        </div>
        <div class="portfolio-item" style="height: 200px;">
        </div>
        <div class="portfolio-item" style="height: 200px;">
        </div>
        <div class="portfolio-item" style="height: 200px;">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-4">
      <div class="portfolio-item" style="height: 300px;">
      </div>
      <div class="portfolio-item" style="height: 200px;">
      </div>
      <div class="portfolio-item" style="height: 200px;">
      </div>
      <div class="portfolio-item" style="height: 200px;">
      </div>
  </div>
</div>
</div>

@include('components.footer')

@endsection