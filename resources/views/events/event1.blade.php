@extends('layouts.master')
    @section('content')



<div class="main">
    <div class="container">

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">

                <div class="content-page">
                    <div class="row">
                        <!-- BEGIN LEFT SIDEBAR -->
                        <div class="col-md-9 col-sm-9 blog-item">
                            <div class="blog-item-img">
                                <!-- BEGIN CAROUSEL -->
                                <div class="">
                                    <div id="myCarousel" class="">
                                        <!-- Carousel items -->
                                        <div class="">
                                            <div class="item">
                                                <img src="{{url($event->filepath)}}" alt="" class="img-responsive">
                                            </div>

                                        </div>
                                        <!-- Carousel nav -->

                                    </div>
                                </div>
                                <!-- END CAROUSEL -->
                            </div>
                            <h2>{{$event->title}}</h2>
                            <div class="blog-body">{!! $event->body !!}</div>
                            <ul class="blog-info">
                                {{-- <li><i class="fa fa-user"></i> By admin</li>--}}
                                <li><i class="fa fa-calendar"></i> {{$event->created_at}}</li>
                                {{-- <li><i class="fa fa-comments"></i> 17</li>
                                 <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>--}}
                            </ul>

                            </div>
                        <!-- END LEFT SIDEBAR -->

                        <!-- BEGIN RIGHT SIDEBAR -->

                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div></div></div>
</div>

        @stop