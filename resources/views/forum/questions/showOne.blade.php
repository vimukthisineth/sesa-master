@extends('layouts.master')

@section('content')
   {{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.need-tiny",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
//alert(field_name);
                var cmsURL = '../laravel-filemanager?field_name=' + field_name;
                // '../laravel-filemanager?field_name=' + field_name
                //alert(cmsURL);
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }
                //alert(cmsURL);
                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>


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


                                            </div>
                                            <!-- Carousel nav -->

                                        </div>
                                    </div>
                                    <!-- END CAROUSEL -->
                                </div>
                                <h2>{{$question->title}}</h2>
                                <div class="blog-body">{!! $question->body !!}</div>
                                <ul class="blog-info">
                                    <li><i class="fa fa-user"></i> {{ $question->user->name}}</li>
                                    <li><i class="fa fa-calendar"></i> {{$question->created_at}}</li>

                                    @if($question->user->id==auth()->user()->id)

                                    <li>
                                        <a href="{{url('forum/question/edit/'.$question->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                         edit
                                    </li>
                                    <li>
                                        <a href="#" onclick="
                                                event.preventDefault();
                                                 document.getElementById('question-delete-form').submit();">
                                            <form id="question-delete-form" action="{{url('forum/question/delete/'.$question->id)}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                            </form>

                                            <i class="fa fa-trash"></i>
                                        </a> delete
                                    </li>

                                    @endif
                                    {{-- <li><i class="fa fa-comments"></i> 17</li>
                                     <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>--}}
                                </ul>

                                <h3>Answers</h3>
                                <div class="comments" id="answers">

                                    @foreach($question->comments as $comment)

                                        <div class="media">
                                            <a href="javascript:;" class="pull-left">
                                                <img src="{{asset('img/propic/'.$question->user->id%1 .'.jpg')}}" alt="" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <div id="cmnt-row" class="row">

                                                    <div class="row">
                                                        <h4 class="media-heading"> <span id="cmnt-span" data-comment-id="{{$comment->id}}">by {{$comment->user->name}}

                                                                @auth
                                                                @if(auth()->user()->id==$comment->user->id)
                                                                / <a class="edit-comment" href="{{url('forum/answer/edit',['id'=>$comment->id])}}">Edit</a> /
                                                                    <a class="delete-comment" href="#" >Delete</a>
                                                                    @endif
                                                                @endauth

                                                            </span></h4>

                                                    </div>

                                                    <p class="comment-body" data-comment="">{!!  $comment->body!!} </p>
                                                </div>

                                                <hr>
                                                <!-- Nested media object -->
                                                <div class="row">
                                                    @if(count($comment->replies)==1)
                                                        <p class="reply_count">{{count($comment->replies)}} reply</p>
                                                    @elseif(count($comment->replies)>1)
                                                        <p class="reply_count">{{count($comment->replies)}} replies</p>


                                                    @elseif(count($comment->replies)==0)
                                                        <p class="reply_count">add a reply</p>


                                                    @endif
                                                </div>
                                                <div id="replies">
                                                    <div class="rep_content">
                                                        @foreach($comment->replies as $reply)
                                                            <div class="media">
                                                                <a href="javascript:;" class="pull-left">
                                                                    <img src="{{asset('img/propic/'.$question->user->id%1 .'.jpg')}}" alt="" class="media-object">
                                                                </a>
                                                                <div class="media-body">
                                                                    <div class="row">
                                                                        <h4 class="media-heading"> <span>by {{$reply->user->name}} </span></h4>

                                                                    </div>
                                                                    <div class="row">
                                                                        <p>{{$reply->body}} </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <!--end media-->
                                                    @auth
                                                        <div class="post-reply padding-top-40">

                                                            <form class="submit-reply" role="form" action="{{url('reply/add')}}" method="post">


                                                                <div class="form-group">
                                                                    <label>Reply</label>
                                                                    <textarea class="form-control" rows="3" name="body"></textarea>
                                                                </div>
                                                                <input type="hidden" name="comment_id" value="{{$comment->id}}">

                                                                <p><button class="btn btn-primary" type="submit">Post a Reply</button></p>
                                                            </form>
                                                        </div>

                                                    @endauth
                                                        <!--end media-->
                                                </div>





                                            </div>
                                        </div>



                                        <!--end media-->
                                @endforeach
                                <!--end media-->
                                </div>

                                <div class="post-comment padding-top-40">

                                    <form role="form" action="{{url('forum/answer/add')}}" method="post">
                                        {{csrf_field()}}


                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea class="form-control need-tiny" rows="5" name="body"></textarea>
                                        </div>
                                        <input type="hidden" name="question_id" value="{{$question->id}}">

                                        <p><button class="btn btn-primary" type="submit">Post Answer</button></p>
                                    </form>
                                </div>
                            </div>
                            <!-- END LEFT SIDEBAR -->

                            <!-- BEGIN RIGHT SIDEBAR -->
                            <div class="col-md-3 col-sm-3 blog-sidebar">
                                <!-- CATEGORIES START -->
                                <h3 style="font-weight: bold;">Related Articles</h3>
                                @foreach($question->withAnyTag($question->tagNames())->get() as $question_rel)



                                    <div class="recent-news margin-bottom-10">
                                        <div class="row margin-bottom-10">

                                            {{--
                                             if image is needed
                                             <div class="col-md-3">

                                             </div>
                                             --}}

                                            <div class="col-md-9 recent-news-inner">
                                                <h3><a href="{{url('question/show/'.$question_rel->id)}}">{{$question_rel->title}}</a></h3>
                                                <span style="font-size: smaller;"> by {{$question_rel->user->name}}</span>
                                            </div>
                                        </div>

                                    </div>
                                 @endforeach

                            <!-- CATEGORIES END -->


                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT -->
                </div>
                <!-- END SIDEBAR & CONTENT -->
            </div></div></div>
    </div>
@stop