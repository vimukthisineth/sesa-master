@extends('layouts.master')

@section('content')
    <div class="row equal">
        @foreach($projects as $project)
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4 equal">
                <div class="card">
                    <img class="card-img-top" src="{{url($project->filepath)}}">
                    <a href="{{url('project/show/'.$project->id)}}" class="view-link">
                        <div class="card-block">
                            <h4 class="card-title">{{$project->title}}</h4>

                        </div></a>

                </div>
            </div>




        @endforeach

    </div>
    @stop