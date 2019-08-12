<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ourTeam(){
    	return view('temp');
        //return view('ourTeam');
    }
    
    public function ourHistory(){
    	return view('temp');
        //return view('ourHistory');
    }

    public function vacancy(){
    	return view('temp');
        //return view('vacancy');
    }

    public function contactDetails(){
    	return view('temp');
        //return view('contactDetails');
    }
    
}
