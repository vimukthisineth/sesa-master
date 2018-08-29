<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Event;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use App\Event;

class Eventcontroller extends Controller
{
    public function add(Request $request){
        $event=new Event;
        $event->title=$request->title;
        $event->filepath=$request->filepath;
        $event->body=$request->body;
        $event->start_time=$request->start_time;
        $event->start_date=$request->start_date;
        $event->end_time=$request->end_time;
        $event->end_date=$request->end_date;
        $event->is_verified=false;
        $event->user_id=auth()->user()->id;
        $event->save();

        $events=Event::all();
        return view('events.all')->with('events',$events);

    }



    public function show($id){
        $event=Event::findorfail($id);
        return view('events/event1')->with('event',$event);
    }
    public function all(){
        $events=Event::all();
        return view('events.all')->with('events',$events);
    }

    public function toSlide(){
        $events=Event::select('filepath')->get();
        return json_decode($events);
    }

    public function toDashboard(){
        $events=Event::select('id','title','filepath','created_at','user_id')->orderBy('created_at','desc')->with('user:id,name')->paginate(5);
        for($g=0;$g<count($events);$g++){
            $events[$g]->type="event";
        }

        return response()->json(
            $events
        );
    }
}
