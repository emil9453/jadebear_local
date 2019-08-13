<?php

namespace App\Http\Controllers;

use App\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function ourTeam(){
        $teamMembers = TeamMember::all();
        return view('ourTeam',compact('teamMembers'));
    }
    
    public function ourHistory(){
        return view('ourHistory');
    }

    public function vacancy(){
        return view('vacancy/vacancy');
    }

    public function vacancyCareer(){
        return view('vacancy/career');
    }

    public function vacancySemantics(){
        return view('vacancy/semantic');
    }

    public function vacancyScheme(){
        return view('vacancy/scheme');
    }

    public function contacts(){
        return view('contacts');
    }
    
}
