@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="row title-row" >
                <span class="add-blog">
                    <a href="{{url('learn/upload')}}" class="btn btn-readmore">Add File</a>
                </span>
            </div>
        </div>
        <div class="row">
            @if(count($mats))
                <div class="col-md-2">
                    <span><a href="{{$mats->downloadable_link}}"><i class="fa fa-file fa-5x" aria-hidden="true"></i></a><p class="down-link-text">{{$mats->title}}</p></span>

                </div>
             @elseif(count($mats==0))
                <div class="col-md-2 panel panel-danger">
                    No files uploded yet....
                </div>
            @else


                @foreach($mats as $mat)
                <div class="col-md-2">
                    <span><a href="{{$mat->downloadable_link}}"><i class="fa fa-file fa-5x" aria-hidden="true"></i></a><p class="down-link-text">{{$mat->title}}</p></span>

                </div>
                @endforeach
                @endif
        </div>
    </div>

@stop