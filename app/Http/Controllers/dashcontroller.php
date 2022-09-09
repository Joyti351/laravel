<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashcontroller extends Controller
{
    public function house(){
        return view('slider.new');
    }
    public function how(){
        return view('slider.master');
    }
}
