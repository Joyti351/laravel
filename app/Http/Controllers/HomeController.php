<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function home(){
        return view('master');
    }
    public function house(){
        return view('dashboard.new');
    }
    public function how(){
        return view('slider.slider1');
    }
}
