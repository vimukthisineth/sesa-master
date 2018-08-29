<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;

class projectcontroller extends Controller
{
    public function add(){
        return view('project/add');
    }

    public function store(Request $request){
        $pro=new Project;
        $pro->title=$request->title;
        $pro->body=$request->body;
        $pro->filepath=$request->filepath;
        $pro->user_id=Auth::user()->id;
        $pro->save();
    }
    //
    public function all(){
        $projects=Project::all();
        return view('project/all')->with('projects',$projects);
    }

    public function show($id){
        $project=Project::findorfail($id);
        return view('project/show')->with('project',$project);

    }

    public function selectThree(){
        $project=Project::orderBy('id','desc')->take(3)->get();
        //dd($project);
        return json_decode($project);
    }
}
