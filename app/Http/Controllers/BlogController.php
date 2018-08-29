<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Auth;

class BlogController extends Controller
{
    public function add(){
        return view('blog.createblog');
    }

    public function store(Request $request){
        //dd($request->form_data);
        $blog=new Blog;
        $blog->title=$request->title;
        $blog->body=$request->body;
        //$blog->category=$request->category;
        $blog->filepath=$request->filepath;
        $blog->user_id=auth()->user()->id;

        $blog->save();

        $blog->tag(['java','c#']);


        return $blog;
    }

    public function show($id){
        $blog=Blog::findorfail($id);
        return view('blog.show')->with('blog',$blog);
    }

    public function getAll(){
        $blogs=Blog::paginate(10);
        //dd($blogs);
        return view('blog.getAll')->with('blogs',$blogs);
    }

    public function getAllToDashboard(){
        $blogs=Blog::select('id','title','filepath','created_at','user_id')->orderBy('created_at','desc')->with('user:id,name')->paginate(10);
            for($g=0;$g<count($blogs);$g++){
                $blogs[$g]->type="blog";
            }

        //dd($blogs[0]);


        return response()->json(
            $blogs
        );
    }

    public function get_blog_on_tag($tag){

        //dd ($tag);
        $blogs=Blog::withAnyTag($tag)->paginate(10);


        return view('blog.getAll')->with('blogs',$blogs);
       /*return response()->json(
            ['blogs' => $blogs],
            200
        );*/
    }

    public function ng_getall(){
        $blogs=Blog::all();
        return response()->json(
          ['blogs' => $blogs],
            200
          );
    }


}
