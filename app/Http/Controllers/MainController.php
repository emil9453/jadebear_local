<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(){
        return view('about');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function reviews(){
        return view('reviews');
    }

    public function services(){
        return view('services');
    }

    public function partners(){
        return view('partners/partners');
    }

    public function toInvestors(){
        return view('temp');
        //return view('toInvestors');
    }

    public function blog(){
        return view('blog');
    }

    public function article(){
        return view('article');
    }
}