<?php

namespace App\Http\Controllers;
use App\Models\dash_table;
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
        $dash['status'] = $request->status=='on' ? true : false;

        if($request->bg_image){
            if(!file_exists(public_path('images'))){
                mkdir(public_path('images'),0777,true);
            }
            $image=$request->bg_image;
            $name=$image->GetClientoriginalName();
            $path=public_path('images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $dash['bg_image']='images/'.$imagename;
        }
        if($request->banner_image){
            if(!file_exists(public_path('images'))){
                mkdir(public_path('images'),0777,true);
            }
            $image=$request->banner_image;
            $name=$image->GetClientoriginalName();
            $path=public_path('images');
            $imagename=time().'_'.$name;

            $image->move($path,$imagename);
            $dash['banner_image']='images/'.$imagename;
        }

        dash_table::create($dash);
        return redirect()->to('slider-index');

    }
    public function index(){
        //quary
        $value=dash_table::all();
        return view('slider.table.index',['key'=>$value]);
    }
    

} 