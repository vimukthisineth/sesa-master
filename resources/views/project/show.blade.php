@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8 blog-item" style="background-color:#ffffff">



                <div class="blog-item-img">
                    <!-- BEGIN CAROUSEL -->
                    <div class="">
                        <div id="myCarousel" class="">
                            <!-- Carousel items -->
                            <div class="">
                                <div class="item">
                                    <img src="{{url($project->filepath)}}" class="img-responsive" alt="">
                                </div>

                            </div>
                            <!-- Carousel nav -->

                        </div>
                    </div>
                    <!-- END CAROUSEL -->
                </div>
                <h2>{{$project->title}}</h2>
                <div class="blog-body" style="font-size : 2vh">{!! $project->body !!}</div>
                <ul class="blog-info">
                    <li><i class="fa fa-user"></i> {{ $project->user->name}}</li>
                    <li><i class="fa fa-calendar"></i> {{$project->created_at}}</li>
                    {{-- <li><i class="fa fa-comments"></i> 17</li>
                     <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>--}}
                </ul>

                <h3>Comments</h3>

                <div class="post-comment ">




                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="fb-comments" data-href="http://localhost:8383/sesa-master/public/project/show/{{$project->id}}" data-numposts="5"></div>
                </div>
            </div>
            <div class="col-md-4">

            </div>

        </div></div>

    @stop