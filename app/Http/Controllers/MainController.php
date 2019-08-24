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

    public function vacancy_career(){
        return view('vacancy.career');
    }
    public function vacancy_semantics(){
        return view('vacancy.semantic');
    }
    public function vacancy_scheme(){
        return view('vacancy.scheme');
    }
    public function contacts(){
        return view('contacts');
    }
    public function portfolio(){
        return view('portfolio');
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