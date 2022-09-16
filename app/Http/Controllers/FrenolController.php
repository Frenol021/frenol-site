<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrenolController extends Controller
{
    //

    public function index(){
        return view('frenol/home');
    }


    public function about(){
        return view('frenol/about');
    }
}
