<?php

namespace App\Http\Controllers;

use App\RelationshipHistory;
use App\SpecialOffer;
use App\WorkSchema;
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

    public function toInvestors()
    {
        $content = WorkSchema::all();
        //dd($content);
        return view('toInvestors',compact('content'));
    }

    public function specialOffer(){
        $content = SpecialOffer::all();
        return view('specialOffer',compact('content'));
    }

    public function relationshipHistory(){
        $content = RelationshipHistory::orderBy('year')->get();
        return view('relationshipHistory',compact('content'));
    }

    public function blog(){
        return view('blog');
    }

    public function article(){
        return view('article');
    }
    
    public function media(){
        return view('media');
    }
    
    public function politics(){
        return view('politics');
    }
    
    public function faq(){
        return view('faq');
    }
}