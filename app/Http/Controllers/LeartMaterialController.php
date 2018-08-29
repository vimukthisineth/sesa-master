<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeartMaterial;

class LeartMaterialController extends Controller
{
    public function store(Request $request){
        $mat=new LeartMaterial;
        $mat->title=$request->title;
        $mat->downloadable_link=$request->Link;
        //$mat->year=$request->year;
        $mat->sem=$request->sem;
        $mat->save();
        //echo "ddd";
    }

    public function add(){
        return view('learn_mat.uploadpage');
    }

    public function view($sem){
        $mats=LeartMaterial::where('sem','=',$sem)->first();
        return view("learn_mat.downPage")->with('mats',$mats);
    }

}
