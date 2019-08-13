<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ourTeam(){
        return view('ourTeam');
    }
    
    public function ourHistory(){
        return view('ourHistory');
    }

    public function vacancy(){
        return view('vacancy/vacancy');
    }

    public function contacts(){
        return view('contacts');
    }
    
}
