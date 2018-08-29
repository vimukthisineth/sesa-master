<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Project;
use App\Blog;
use App\Question;
class AdminController extends Controller
{
    public function getDashboard(){
        $questions = Question::orderBy('created_at','desc')->paginate(10);

        return view('forum.dashboard')->with('questions',$questions);


    }
}
