<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Auth;
class QuestionController extends Controller
{
    public function store(Request $request){
        $q=new Question;
        $q->title=$request->title;
        $q->body=$request->body;
        $q->user_id=auth()->user()->id;
        $q->save();

        $q->tag($request->tag_list);



    }

    public function show($id){
        $question=Question::findorfail($id);

        return view('forum.questions.showOne')->with('question',$question);
    }

    public function add(){
        dd ("dd");
       // return view('forum.questions.add');
    }

    public function all(){
        $questions=Question::all();
        return view('forum.questions.all')->with('questions',$questions);
    }

    public function ng_get(){
       $questions=Question::all();

       return response()->json(
           ['questions'=>$questions],
           200
       );
    }

    public function goToEdit($id){
        $question=Question::findorfail($id);
        $editable['body']=$question->body;
        $editable['title']=$question->title;
        $editable['type']="Question";
        $editable['url']="forum/question/edit/".$question->id;

        return view('edit')->with('editable',$editable);
    }

    public function edit($id,Request $request){
        $question=Question::findorfail($id);
        $question->update($request->all());

        return redirect('forum/question/show/'.$question->id);

    }



    public function delete($id,Request $request){
        $question=Question::findorfail($id);

        //$question->comments->replies()->delete();

        $question->comments()->delete();


        $question->delete();
    }

    public function toDashboard(){

    }
}
