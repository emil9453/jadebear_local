<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(){
        return view('about');
    }
    public function our_team(){
        return view('our_team');
    }
    public function our_history(){
        return view('our_history');
    }
    public function vacancy(){
        return view('vacancy.vacancy');
    }
    public function services(){
        return view('services');
    }
    public function reviews(){
        return view('reviews');
    }
    public function blog(){
        return view('blog');
    }
    public function article(){
        return view('article');
    }
    public function partners(){
        return view('partners.partners');
    }
}
