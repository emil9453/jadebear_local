<?php

namespace App\Http\Controllers;

use App\Development;
use App\Faq;
use App\Medium;
use App\Politic;
use App\RelationshipHistory;
use App\Review;
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
        $content = Review::all();
        return view('reviews',compact('content'));
    }

    public function services(){
        return view('services');
    }

    public function partners(){
        $content = Development::all();
        return view('partners/partners',compact('content'));
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
        $content = Medium::all();
        return view('media',compact('content'));
    }
    
    public function politics(){
        $content = Politic::all();
        return view('politics',compact('content'));
    }
    
    public function faq(){
        $content = Faq::all();
        return view('faq',compact('content'));
    }

    public function service(){
        return view('service');
    }
    public function partners_perspective()
    {
        return view('partners.perspective');
    }
    public function partners_why()
    {
        return view('partners.why');
    }
    public function partners_scheme()
    {
        return view('partners.scheme');
    }
    public function partners_relationship()
    {
        return view('partners.relationship');
    }
    public function partners_investment()
    {
        return view('partners.investment');
    }
    public function partners_offices()
    {
        return view('partners.offices');
    }
    public function partners_thanks()
    {
        return view('partners.thanks');
    }

}