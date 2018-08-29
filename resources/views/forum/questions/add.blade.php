@extends('layouts.master')

@section('content')



    <div class="row" style="padding-top: 10px">
        <div class="col-md-8 col-md-offset-2">

            <form class="form-horizontal" id="question_form" action="" method="post">
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
                            <input id="tags" name="tags" type="text" placeholder="Enter key word here" class="form-control input-md" >


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


    </div>


    @endsection