@extends('layouts.app')
@section('title', 'Услуги')
@section('background', 'white-back')
@section('menu-type', 'black')
@section('content')
<div class="container-fluid my-padding ">
    <div class="row">
        <div class="col-md-5 page-title">
            <h2 class="text-uppercase">Услуги</h2>
        </div>
        <div class="col-md-7">
        
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4 service-left pl-0">
            <p class="cap30">Название услуги</p>
            <button class="btn cap16 my-btn cap16 pl-5 pr-5 pt-3 pb-3">Заказать услугу</button>
            <a class="cap16 text-center float-left mt-4" href="">Узнать больше</a>
        </div>
        <div class="col-md-8 service-right banner">
        
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4 service-left pl-0">
            <p class="cap30">Название услуги</p>
            <button class="btn cap16 my-btn cap16 pl-5 pr-5 pt-3 pb-3">Заказать услугу</button>
            <a class="cap16 text-center float-left mt-4" href="">Узнать больше</a>
        </div>
        <div class="col-md-8 service-right banner">
        
        </div>
    </div>
    <div class="row mt-4 mb-5">
        <div class="col-md-4 service-left pl-0">
            <p class="cap30">Название услуги</p>
            <button class="btn cap16 my-btn cap16 pl-5 pr-5 pt-3 pb-3">Заказать услугу</button>
            <a class="cap16 text-center float-left mt-4" href="">Узнать больше</a>
        </div>
        <div class="col-md-8 service-right banner">
        
        </div>
    </div>
</div>
@include('components.footer')
@endsection