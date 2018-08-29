@extends('layouts.master')

    @section('content')



        <div class="row quote-v1 margin-bottom-30">
            <div class="col-md-9">
                <span></span>
            </div>
            <div class="col-md-3 text-right">
                <a class="btn-transparent" href="{{url('blog/add')}}" target="_blank"><i class="fa fa-add margin-right-10"></i>Add Article</a>
            </div>
        </div>

        <div class="main">
            <div class="container">

                <!-- BEGIN SIDEBAR & CONTENT -->
                <div class="row margin-bottom-40">
                    <!-- BEGIN CONTENT -->
                    <div class="col-md-12 col-sm-12">
                        <h1>Blog Page</h1>
                        <div class="content-page">
                            <div class="row">
                                <!-- BEGIN LEFT SIDEBAR -->
                                <div class="col-md-9 col-sm-9 blog-posts">

                                   @foreach($blogs as $blog)

                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <!-- BEGIN CAROUSEL -->
                                            <div class="">
                                                <div class="" id="">
                                                    <!-- Carousel items -->
                                                    <div class="">
                                                        <div class="item">
                                                            <img  src="{{url($blog->filepath)}}" style="height: 100px;" class="img-responsive">
                                                        </div>

                                                    </div>
                                                    <!-- Carousel nav -->

                                                </div>
                                            </div>
                                            <!-- END CAROUSEL -->
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h2><a href="{{url('blog/show/'.$blog->id)}}" style="color: #585544;" class="blog-title">{{$blog->title}}</a></h2>
                                            <ul class="blog-info">
                                                <li><i class="fa fa-calendar"></i> {{$blog->created_at}}</li>
                                               {{-- <li><i class="fa fa-comments"></i> 17</li>--}}
                                               {{-- <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>--}}
                                            </ul>
                                            <a href="{{url('blog/show/'.$blog->id)}}" class="more">Read more <i class="icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <hr class="blog-post-sep">

@endforeach

                                       {{$blogs->links()}}




                                    {{--<ul class="pagination">
                                        <li><a href="javascript:;">Prev</a></li>
                                        <li><a href="javascript:;">1</a></li>
                                        <li><a href="javascript:;">2</a></li>
                                        <li class="active"><a href="javascript:;">3</a></li>
                                        <li><a href="javascript:;">4</a></li>
                                        <li><a href="javascript:;">5</a></li>
                                        <li><a href="javascript:;">Next</a></li>
                                    </ul>--}}
                                </div>
                                <!-- END LEFT SIDEBAR -->

                                <!-- BEGIN RIGHT SIDEBAR -->
                                <div class="col-md-3 col-sm-3 blog-sidebar">
                                    <!-- CATEGORIES START -->
                                    <h2 class="no-top-space">Categories</h2>
                                    <ul class="nav sidebar-categories margin-bottom-40">
                                        @foreach(App\Blog::existingTags() as $tag)

                                            <li><a href="{{url('blog/ontag/'.$tag->name)}}">{{$tag->name." (".$tag->count.")"}}</a></li>

                                        @endforeach

                                    </ul>
                                    <!-- CATEGORIES END -->

                                    <!-- BEGIN RECENT NEWS -->


                                </div>
                                <!-- END RIGHT SIDEBAR -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT -->
                </div>
                <!-- END SIDEBAR & CONTENT -->
            </div>
        </div>


    @stop