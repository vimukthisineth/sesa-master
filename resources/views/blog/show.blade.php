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
                                                    <img src="{{url($blog->filepath)}}" class="img-responsive" alt="">
                                                </div>

                                            </div>
                                            <!-- Carousel nav -->

                                        </div>
                                    </div>
                                    <!-- END CAROUSEL -->
                                </div>
                                <h2>{{$blog->title}}</h2>
                               <div class="blog-body" style="font-size : 2vh">{!! $blog->body !!}</div>
                                <ul class="blog-info">
                                    <li><i class="fa fa-user"></i> {{ $blog->user->name}}</li>
                                    <li><i class="fa fa-calendar"></i> {{$blog->created_at}}</li>
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

                                    <div class="fb-comments" data-href="http://localhost:8383/sesa-master/public/blog/show/{{$blog->id}}#comments" data-numposts="5"></div>
                                </div>
                            </div>
                            <!-- END LEFT SIDEBAR -->

                            <!-- BEGIN RIGHT SIDEBAR -->
                            <div class="col-md-3 col-sm-3 blog-sidebar">
                                <!-- CATEGORIES START -->
                               {{-- <h2 class="no-top-space">Categories</h2>
                                <ul class="nav sidebar-categories margin-bottom-40">

                                    @foreach($blog->existingTags() as $tag)

                                        <li><a href="{{url('blog/ontag/'.$tag->name)}}">{{$tag->name." (".$tag->count.")"}}</a></li>

                                        @endforeach



                                </ul>--}}
                                <!-- CATEGORIES END -->

                                <h3 c>Related Articles</h3>
                               {{-- {{$blog->withAllTags($blog->tagNames())->get()}}--}}


                                    @foreach($blog->withAnyTag($blog->tagNames())->get() as $blog_rel)

                                        <div class="recent-news margin-bottom-10">
                                            <div class="row ">

                                               {{--
                                                if image is needed
                                                <div class="col-md-3">

                                                </div>
                                                --}}

                                                <div class="col-md-9 recent-news-inner">
                                                    <h3><a href="{{url('blog/show/'.$blog_rel->id)}}">{{$blog_rel->title}}</a></h3>
                                                    <p>{{$blog_rel->user->name}}</p>
                                                </div>
                                            </div>

                                        </div>
                                        @endforeach



                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
            </div></div></div>
    </div>
    @stop