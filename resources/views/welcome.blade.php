<!DOCTYPE html>
<html lang="en">
@include('partials.head')
@yield('head')

<body>

<script>
    $(document).ready(function () {
        host_url_events='http://localhost:8383/sesa-master/public';

</script>



<div class="row">
    @include('partials.nav')
    @yield('navbar')
</div>

{{--main slider--}}

<div class="container-fluid" id="Main_carousel">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{asset('img/slider/sesa1.jpg')}}" alt="Los Angeles" style="width:100%;max-height: 450px;">
            </div>

            <div class="item">
                <img src="{{asset('img/slider/sesa2.jpg')}}" alt="Chicago" style="width:100%;max-height: 450px;">
            </div>

            <div class="item">
                <img src="{{asset('img/slider/sesa1.jpg')}}" alt="New york" style="width:100%;max-height: 450px;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

{{--end of main slider--}}



<!-- Vission And Mission AND EVENT VIEW Carousel -->
<div class="container" id="vision_missionPanel">
    <div class="row">
        <div class="col-lg-offset-0 col-lg-10 col-xs-offset-6 col-xs-6" style="text-align: right;">
            <label for="" id="UpcomingTitleLabel">Upcoming Events....</label>
        </div>

    </div>
    <div class="row">
        <!-- Event View Carousel -->
        <div class="col-xs-10 col-s-12 col-sm-7 col-lg-6">
            <div class="row">
                <div class="containe-fluid">
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2" style="padding-top: 35px;">
                            <div class="jR3DCarouselGallery"></div>
                            <br /> <br />
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Vission Mission Panel -->
        <div class="col-sm-5 col-lg-6" style="font-size: 1.5em;color: white; padding-bottom: 10px;">
            <div class="row">
                <label class="visionMissionLabel">Our Vision</label>
                <div  id="typewriteVision" class="row">
                </div>
            </div>
            <div class="row">
                <label class="visionMissionLabel" id="missionLabel"></label>
                <div  id="typewriteMision" class="row">
                </div>
            </div>
        </div>

    </div>
</div>

{{--end vision panel--}}



<!-- Specialization Areas -->
<div class="cont" id="specializationAreaContainer">

    <div class="container-fluid" id="borderforContainer">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <label for="" style="font-size: 2vw;text-align: : right;    color: #ffffff;">
                    WE ARE SPECIALIZED IN........
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" id="rightBorderElement" style="color: white" ;>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="animate" data-animate="bounceInLeft" data-duration="1.0s" data-delay="0.1s" data-iteration="1">
                        <div class="col-xs-3 col-sm-3" style="text-align: right;">
                            <i class="fa fa-gamepad" aria-hidden="true" style="font-size: 65px; color: white; padding-right: 30px;" ></i>
                        </div>
                        <div class="col-xs-9 col-sm-9" style="padding-top: 5px;">
                            <div class="container-fluid">
                                <label for="" style="font-size: 2vw;text-align: : right;">
                                    Game Development
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="animate" data-animate="bounceInLeft" data-duration="1.0s" data-delay="0.1s" data-iteration="1">
                        <div class="col-xs-3 col-sm-3" style="text-align: right;">
                            <i class="fa fa-mobile" aria-hidden="true" style="font-size: 65px; color: white; padding-right: 45px;" ></i>
                        </div>
                        <div class="col-xs-9 col-sm-9" style="padding-top: 5px;">
                            <div class="container-fluid">
                                <label for="" style="font-size: 2vw;text-align: : right;">
                                    Mobile Development
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="animate" data-animate="bounceInLeft" data-duration="1.0s" data-delay="0.1s" data-iteration="1">
                        <div class="col-xs-3 col-sm-3" style="text-align: right;">
                            <i class="fa fa-globe" aria-hidden="true" style="font-size: 65px; color: white; padding-right: 30px;" ></i>
                        </div>
                        <div class="col-xs-9 col-sm-9" style="padding-top: 5px;">
                            <div class="container-fluid">
                                <label for="" style="font-size: 2vw;text-align: : right;">
                                    Data Science & Engineering
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;margin-bottom: 25px; color: white;">
                <div class="row" style="padding-bottom: 25px;">
                    <div class="animate" data-animate="bounceInRight" data-duration="1.0s" data-delay="0.1s" data-iteration="1">
                        <div class="col-xs-3 col-sm-3" style="text-align: right;">
                            <i class="fa fa-medkit" aria-hidden="true" style="font-size: 65px; color: white; padding-right: 30px;" ></i>
                        </div>
                        <div class="col-xs-9 col-sm-9" style="padding-top: 5px;">
                            <div class="container-fluid">
                                <label for="" style="font-size: 2vw;text-align: : right;">
                                    Health Informatics
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="animate" data-animate="bounceInRight" data-duration="1.0s" data-delay="0.1s" data-iteration="1">
                        <div class="col-xs-3 col-sm-3" style="text-align: right;">
                            <i class="fa fa-html5" aria-hidden="true" style="font-size: 65px; color: white; padding-right: 35px;" ></i>
                        </div>
                        <div class="col-xs-9 col-sm-9" style="padding-top: 5px;">
                            <div class="container-fluid">
                                <label for="" style="font-size: 2vw;text-align: : right;">
                                    Net Centric Applications
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 25px;">
                    <div class="animate" data-animate="bounceInRight" data-duration="1.0s" data-delay="0.1s" data-iteration="1">
                        <div class="col-xs-3 col-sm-3" style="text-align: right;">
                            <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 65px; color: white; padding-right: 30px;" ></i>
                        </div>
                        <div class="col-xs-9 col-sm-9" style="padding-top: 5px;">
                            <div class="container-fluid">
                                <label for="" style="font-size: 2vw;text-align: : right;">
                                    Business Intelligence
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{--end specialization area--}}

<div style="background:  #C62828;min-height: 10px;width: 100%"></div>

{{--panels--}}

<div class="" style="background:  #BDBDBD;min-height: 350px;width: 100%">
    <div class="row" style="margin-left: 0px;margin-right: 0px">
        <div class="col-sm-6  col-md-4  col-lg-3 ">
            <div class="container-fluid">
                <div class="card" id="forum_card">
                    <div class="main">
                        <div class="title">
                            <h2 style="font-size: 2.5em;">Forum		</h2>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Experience sharing and problem solving area. Students and teachers and old students participating actively.</p>
                    </div>
                    <div class="fab"> </div>
                    <div class="fab-sha"> </div>
                    <div class="icon" style="font-size: 2.2em;"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                    <button class="btn"><span>Learn More</span></button>
                </div>
            </div>
        </div>
        <div class="col-sm-6  col-md-4  col-lg-3 ">
            <div class="container-fluid">
                <div class="card" id="event_card">
                    <div class="main">
                        <div class="title">
                            <h2 style="font-size: 2.5em;">Events		</h2>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Learn about past and upcoming activities organized by the SESA and you can share your ideas.</p>
                    </div>
                    <div class="fab"> </div>
                    <div class="fab-sha"> </div>
                    <div class="icon" style="font-size: 2.3em;"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                    <button class="btn"><span>Learn More</span></button>
                </div>
            </div>
        </div>
        <div class="  col-sm-6  col-md-4  col-lg-3 ">
            <div class="container-fluid">
                <div id="project_card" class="card">
                    <div class="main">
                        <div class="title">
                            <h2 style="font-size: 2.5em;">Projects		</h2>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Students currently working on projects. Our Students hard work and have an idea about current trends.</p>
                    </div>
                    <div class="fab"> </div>
                    <div class="fab-sha"> </div>
                    <div class="icon" style="text-align: center;"><i class="fa fa-code-fork fa-3x" aria-hidden="true"></i></div>
                    <button class="btn"><span>Learn More</span></button>
                </div>
            </div>
        </div>
        <div class="  col-sm-6  col-md-4  col-lg-3 ">
            <div class="container-fluid">
                <div class="card" id="articles_card">
                    <div class="main">
                        <div class="title">
                            <h2 style="font-size: 2.5em;">Articles		</h2>
                        </div>
                    </div>
                    <div class="desc">
                        <p>Creativity area . The students articles and experience sharing area.</p>
                    </div>
                    <div class="fab"> </div>
                    <div class="fab-sha"> </div>
                    <div class="icon" style="text-align: center; font-size: 2.3em;"><i class="fa fa-rss" aria-hidden="true"></i></div>
                    <button class="btn"><span>Learn More</span></button>
                </div>
            </div>
        </div>
    </div>
</div>

{{--end panels--}}

<div style="background:  #C62828;min-height: 10px;width: 100%"></div>









<script src="https://cdn.rawgit.com/vinayakjadhav/jR3DCarousel/v1.0.0/dist/jR3DCarousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/16.3.5/Tween.min.js"></script>
<script src="{{asset('js/front-end/scrolla.jquery.js')}}"></script>
<script src="{{asset('js/front-end/j-sliding-banner.min.js')}}"></script>

<script src="{{asset('js/front-end/SesaJS.js')}}"></script>


@include('partials.footer')
@yield('footer')



</body>
</html>