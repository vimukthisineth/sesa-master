<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use App\Comments;
use App\Auth;
use App\Blog;
use App\Question;
use PhpParser\Comment;

//use Illuminate\Routing\Route;

class CommentsController extends Controller
{
   public function store(Request $request){

       $blog=Blog::find($request->blog_id);

       $comment=new Comments;
       $comment->body=$request->body;
       $comment->user_id=auth()->user()->id;
      /* $comment->commentable_type=

       $comment->commentable_id=$request->blog_id;*/
       $comment=$blog->comments()->save($comment);
       return redirect('blog/show/'.$request->blog_id.'#comments');
   }

    public function edit($id,Request $request){
        $comment=Comments::findorfail($id);
        $comment->update($request->all());

       // echo $comment->commentable;

        return redirect('forum/question/show/'.$comment->commentable->id);
    }

    public function delete($id,Request $request){
        $comment=Comments::findorfail($id);
        $comment->replies()->delete();

        $comment->delete();
        return response()->json(
            'Deleted'
        );
    }


   //// answer is also consider as comment
   public function answerStore(Request $request){
       $comment=new Comments;
       $comment->body=$request->body;
       $comment->user_id=auth()->user()->id;

       $question=Question::find($request->question_id);

       $comment=$question->comments()->save($comment);
       return redirect('forum/question/show/'.$request->question_id.'#answers');
   }

   public function answerEdit($id){
      /* $answer=[];
       $answer['id']=$id;
       $answer['body']=$body;
       $answer['type']="Answer";
       $answer['title']=null;


       return view('forum.questions.edit')->with('answer',$answer);*/

      $editable['body']=Comments::findorfail($id)->body;
      $editable['title']=null;
      $editable['type']="Answer";
      //$editable['id']=$id;
      $editable['url']="comment/edit/".$id;
       return view('edit')->with('editable',$editable);
      //echo $editable['body'];
   }

}
