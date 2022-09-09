<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class tableController extends Controller
{
    public function create(){
        return view('slider.table.create');
    }
    public function store(Request $request){
        //dd($request  ->all());
        $dash['heading1'] = $request->heading1;
        $dash['heading2'] = $request->heading2;
        $dash['description'] = $request->description;
        $dash['status'] = $request->status='on' ? true : false;

        dash_table::create($dash);

    }
    

} 