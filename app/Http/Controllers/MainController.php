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
    
}
