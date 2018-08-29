<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Comments;
use App\Auth;
class ReplyController extends Controller
{
    public function store(Request $request){
        $reply=new Reply;
        $reply->body=$request->body;
        $reply->user_id=auth()->user()->id;

        $comment=Comments::find($request->comment_id);

        $reply=$comment->replies()->save($reply);
       // dd($comment->commentable->id);
        return response()->json(
        [
            'reply'=>$reply,
            'user_name'=>auth()->user()->name,
        ]
        );
    }

    public function edit($id,Request $request){
        $reply=Reply::findorfail($id);
       $reply->update($request->all());
    }

    public function delete($id){

    }
}
