@extends('layouts.master')

@section('content')

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <div class="row" style="padding-top: 10px">
        <div class="col-md-8 col-md-offset-2">

            <h2>Edit {{$editable['type']}}</h2>
            {{$editable['url']}}

            <form class="form-horizontal" id="question_form" action="{{url($editable['url'])}}" method="post">
                <fieldset>
                {{csrf_field()}}

                    {{method_field('PUT')}}


                    <!-- Text input-->

                    @if(!(is_null($editable['title'])))

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Title</label>
                            <div class="col-md-8">
                                <input id="title" name="title" type="text" value="{{$editable['title']}}" class="form-control input-md" required="">

                            </div>
                        </div>

                    @endif

                    <!-- Text input-->


                    <div class="form-group">
                        <textarea name="body" id="body" cols="20" rows="30">{{$editable['body']}}</textarea>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <div  class="row blog-tags ">

                            <ul id="tag_body">


                            </ul>
                        </div>

                        <label class="col-md-4 control-label" for="tags">Tags</label>
                        <div class="col-md-8 ">
                            <input id="tags" name="tags" type="text" placeholder="Enter key word here" class="form-control input-md" >

                        </div>


                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" >
                    </div>

                </fieldset>
            </form>



        </div>


    </div>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea",
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
                var cmsURL = 'laravel-filemanager?field_name=' + field_name;
                // '../laravel-filemanager?field_name=' + field_name
                alert(cmsURL);
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

    @endsection