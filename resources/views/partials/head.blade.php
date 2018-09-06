@section('head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SESA</title>

        <meta name="keywords" content="">

        <meta name="_token" content="{{csrf_token()}}">

        {{--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">--}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
       {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">--}}

        <link rel="stylesheet" href="{{asset('css/front-end/FrontEndStyleSheet.css')}}">

        <!-- Theme styles START -->
        <link href="{{asset('assets/pages/css/components.css')}}" rel="stylesheet">

        <link href="{{asset('assets/corporate/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/corporate/css/style-responsive.css')}}" rel="stylesheet">
        <link href="{{asset('assets/corporate/css/themes/red.css')}}" rel="stylesheet" id="style-color">
        <link href="{{asset('assets/corporate/css/custom.css')}}" rel="stylesheet">


       {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/easy-responsive-tabs.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/flexslider.css')}}">
        <link rel="stylesheet" href="http://propeller.in/components/card/css/card.css">--}}
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>



       {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>--}}
        <script src="{{asset('assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <style>
            .row {
                margin-right: 0;
                margin-left: 0;
            }
            .blog-title{
                color:#585544;
            }

        </style>
        <script src="{{asset('assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>

        <script>
            {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
        </script>


       {{-- <script src="{{asset('js/jquery.min.js')}}"></script>--}}
        {{--<script src="{{asset('js/bxslider.js')}}"></script>--}}
        <script src="{{url('/vendor/laravel-filemanager/js/lfm.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script>
            $(document).ready(function(){

                $.ajaxSetup({
                   headers: {
                       'X-CSRF-Token':$('meta[name="_token"]').attr('content')
                   }
                });

               //console.log($("#stu-id").children()) ;
                $('#lfm').filemanager('image');

                $('#signup-form').on('submit',function(e){
                   // e.preventDefault();
                  // alert('submited');
                    var re=/SE-201([0-9])-([0-9][0-9][0-9])/;
                    if(!re.test($('#signup-form').attr('student_id').val())){
                        e.preventDefault();
                        $("#student_id_field").addClass('has-error');

                            var stuff='<span class="help-block" id="stu_id_err_msg">'+
                                '<strong >wrong pattern..... SE-201*-***</strong>'+
                        '</span>';

                        $("#stu-id").append(stuff);

                    }



                });

                $('.login-li').click(function (e) {
                    e.preventDefault();
                    //alert('ddd');
                    $('#loginModal').modal('show');
                });

            });
        </script>

        {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}


    </head>
    @stop
