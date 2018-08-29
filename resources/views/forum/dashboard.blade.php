@extends ('layouts.master')

@section('content')
    <script src="{{asset('js/dashboard.js')}}"></script>
<div class="">
    <div class="container-fluid">
        <div class="row">



            <div class="col-md-2" style="padding:0">
                <div class="row" style="margin:1em">

                        <div class="blog-item">
                            <div class="media">
                                <a href="javascript:;" class="pull-left">
                                    <img src="{{asset('img/propic/'.auth()->user()->id%1 .'.jpg')}}" alt="" class="media-object">
                                </a>
                                <div class="media-body" style="padding-top:2px;">
                                    <h6 style="font-weight: bolder;" class="media-heading"> {{auth()->user()->name}} Dasanayaka</h6>

                                </div>
                            </div>
                        </div>


                </div>

                <div class="row">
                    <div class="blog-sidebar">
                        <!-- CATEGORIES START -->

                        <ul class="tabbable faq-tabbable" style="margin-right: 5px;">

                                <li><a href="{{url('forum/question/all')}}">Questions</a></li>
                                <li><a href="{{url('blog/all')}}">Articles</a></li>
                                <li><a href="{{url('project/all')}}">Projects</a></li>
                                <li><a href="{{url('event/all')}}">Events</a></li>




                        </ul>
                    </div>
                </div>


            </div>
            <div class="col-md-4" style="padding:0">



                {{--load content in dashboard.js--}}
                <div id="content" class="blog-item" style="background-color:#e9ebee">

                </div>


            </div>
            <div class="col-md-6">
                @foreach($questions as $question)

                    <div class="rep_content" style="margin:1em 0.1em;background-color:#ffffff;padding: 0.3em;">
                        <div class="media" style="" >
                            <div class="media-body">
                                <div class="row" style="padding: 0.2em;">
                                    <a href="{{url('forum/question/show/'.$question->id)}}" class="post-link">
                                        <p class="post-font">
                                            {{$question->title}}
                                            </p>
                                    </a>
                                </div>
                                <div class="row" style="text-align: right;">
                                    <div  class="row blog-tags ">

                                        <ul id="tag-body">

                                            @foreach($question->tagNames() as $tags)

                                            <li><a href="javascript:;"><i class="fa fa-tags"></i>{{$tags}}</a></li>

                                                @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="media-heading">
                                        <span>
                                            by {{$question->user->name}}
                                        </span>
                                    </h6>
                                </div>
                            </div>
                            <a href="javascript:;" class="pull-right">
                                <img src="" alt="" class="media-object-post">
                            </a>
                        </div>
                    </div>

                    @endforeach


            </div>

        </div>
    </div>

</div>

    @endsection