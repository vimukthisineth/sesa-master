<html>
    @include('partials.head')
        @yield('head')

    <body>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <script src="{{asset('js/jquery-ui.js')}}"></script>

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    @include('partials.nav')
        @yield('navbar')

        <div class="row" style="padding-top: 10px">
            <div class="col-md-8 col-md-offset-2">

                <form class="form-horizontal" id="blog_form" action="{{url('blog/add')}}" method="post">
                    <fieldset>
                    {{csrf_field()}}

                        <!-- Form Name -->
                        <legend>Add Article</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Title</label>
                            <div class="col-md-8">
                                <input id="title" name="title" type="text" placeholder="Enter your title here..." class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group ">
                            <div class="">
                                <label class="col-md-4 control-label" for="thumbnail">Featured Photo</label>
                                <div class="col-md-8">
                                 <span class="input-group-btn">
                                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                           <i class="fa fa-picture-o"></i> Choose
                                         </a>
                                 </span>


                                    <input id="thumbnail" name="thumbnail" type="text" placeholder="Add featured photo......." class="form-control input-md" required="">

                                </div>
                                <img id="holder" style="margin-top:15px;margin-bottom:15px;display: block" class="img-responsive">
                            </div>

                        </div>

                        <div class="form-group">
                            <textarea name="body" id="body" cols="20" rows="30"></textarea>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <div  class="row blog-tags ">

                                <ul id="tag-body">


                                </ul>
                            </div>

                            <label class="col-md-4 control-label" for="tags">Tags</label>
                            <div class="col-md-4">
                                <input id="tags" name="tags" type="text" autocomplete="off" placeholder="Enter key word here" class="form-control input-md" >


                                <div id="tag-list"  style="position:absolute;z-index:999;background:#eee;display:none">

                                </div>


                            </div>


                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" >
                        </div>

                    </fieldset>
                </form>



                            </div>

            <div id="fb-root"></div>




        </div>








    @include('partials.footer')
        @yield('footer')
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
    </body>


</html>