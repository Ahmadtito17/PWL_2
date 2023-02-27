<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('');
    }

    public function home(){
        return view('home');
    }

    public function product(){
        return view('product');
    }

    public function news(){
        return view('news');
    }

    public function program(){
        return view('program');
    }

    public function aboutUs(){
        return view('about-us');
    }
}
