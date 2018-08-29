
@section('navbar')

    @auth
@isValidatedUser



@else

    <div class="row panel panel-danger">
        <div class="panel-heading">

                    you are not validated... first validate

        </div>

    </div>




@endisValidatedUser
@endauth





    <!-- BEGIN TOP BAR -->
   {{-- <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">

                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        @guest
                        <li><a href="{{url('login')}}">Log In</a></li>
                        <li><a href="{{url('register')}}">Registration</a></li>
                        @else
                            <li><a href="#">{{Auth::user()->name}}</a></li>
                            <li><a href="#" onclick="
                            event.preventDefault();
                             document.getElementById('logout-form').submit();">logout<i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" href="index.html"><img src="{{asset('img/logo.png')}}" alt="Metronic FrontEnd"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

            <!-- BEGIN NAVIGATION -->
            <div class="header-navigation pull-right font-transform-inherit">
                <ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="{{url('/')}}">
                            Home

                        </a>


                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="{{url('course_content')}}">
                            Course Content

                        </a>


                    </li>



                    <li class="dropdown dropdown-megamenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            Learning Material

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="header-navigation-content">
                                    <div class="row">
                                        <div class="col-md-4 header-navigation-col">
                                            <h4>First Year</h4>
                                            <ul>
                                                <li><a href="{{url('learn/view/1')}}">1 st sem</a></li>
                                                <li><a href="{{url('learn/view/2')}}">2 nd sem </a></li>
                                            </ul>

                                            <h4>Second year</h4>
                                            <ul>
                                                <li><a href="{{url('learn/view/3')}}">1 st sem</a></li>
                                                <li><a href="{{url('learn/view/4')}}">2 nd sem </a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4 header-navigation-col">
                                            <h4>Third year</h4>
                                            <ul>
                                                <li><a href="{{url('learn/view/5')}}">1 st sem</a></li>
                                                <li><a href="{{url('learn/view/6')}}">2 nd sem </a></li>
                                            </ul>

                                            <h4>Fourth Year</h4>
                                            <ul>
                                                <li><a href="{{url('learn/view/7')}}">1 st sem</a></li>
                                                <li><a href="{{url('learn/view/8')}}">2 nd sem </a></li>
                                            </ul>



                                        </div>
                                        <div class="col-md-4 header-navigation-col">
                                            <a href="{{url('learn/view/9')}}"><h4>Fourth Year</h4></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="dropdown-toggle" href="{{url('blog/all')}}">
                            Articles

                        </a>


                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="{{url('event/all')}}">
                           Events

                        </a>


                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" href="{{url('forum/dashboard')}}">
                            Forum

                        </a>


                    </li>


                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
--}}

    <div>
        <nav style="position: static;" class="navbar navbar-inverse navbar-fixed-top" style=" margin-bottom: 0px;">
            <div class="container-fluid">
                <div class="navbar-header" style="height: 55px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('img/logo/SESA-5.png')}}" class="img-responsive" alt="" style="padding-top: 0px;margin-top: 0px;">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="navbar_btn_hover" ><a href="{{url('/')}}">Home</a></li>
                        <li id="navbar_btn_hover"><a href="{{url('course_content')}}">Course Content</a></li>
                        <li id="navbar_btn_hover"><a href="#">Learning Materials</a></li>
                        <li id="navbar_btn_hover"><a href="{{url('blog/all')}}">Articles</a></li>
                        <li id="navbar_btn_hover"><a href="{{url('event/all')}}">Events</a></li>
                        <li id="navbar_btn_hover"><a href="{{url('forum/dashboard')}}">Forum</a></li>

                        @guest
                        <li id="navbar_btn_hover"><a href="{{url('login')}}">Log In</a></li>

                        @else
                            <li id="navbar_btn_hover"><a href="#">{{Auth::user()->name}}</a></li>
                            <li id="navbar_btn_hover"><a href="#" onclick="
                            event.preventDefault();
                             document.getElementById('logout-form').submit();">logout<i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest

                    </ul>
                </div>
            </div>
        </nav>
    </div>




    <script>
        var host_url='http://localhost/sesa-master/public/';
    </script>
@stop