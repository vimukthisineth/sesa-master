<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TagController extends Controller
{
   public function getTagList($hint){
       $tag=DB::table('tagging_tags')->where('name','like',$hint.'%')->pluck('name');
       return response()->json(
           $tag
       );
   }
}
