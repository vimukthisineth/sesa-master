@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="panel panel-warning">
            WE have limited space in kelani server <br>
            Please upload files to any online storage and share the downloadable link

        </div>


        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="{{url('learn/store')}}" method="post">
                    {{csrf_field()}}
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Share Downloadable link....</legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                            <div class="col-md-6">
                                <input id="title" name="title" type="text" placeholder="Name what you upload :-)" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Link">Downloadable Link</label>
                            <div class="col-md-6">
                                <input id="Link" name="Link" type="text" placeholder="Link" class="form-control input-md" required="">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="sem">Semester</label>
                            <div class="col-md-5">
                                <select id="sem" name="sem" class="form-control">
                                    <option value="1">first yr - 1st</option>
                                    <option value="2">first yr - 2nd</option>
                                    <option value="3">second yr - 1st</option>
                                    <option value="4">second yr - 2nd</option>
                                    <option value="5">third yr - 1st</option>
                                    <option value="6">third yr - 2nd</option>
                                    <option value="7">fourth yr - 1st</option>
                                    <option value="8">fourth yr - 2nd</option>
                                    <option value="9">common</option>
                                </select>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for=""></label>
                            <div class="col-md-4">
                                <button id="" name="" class="btn btn-primary">Add</button>
                            </div>
                        </div>



                    </fieldset>
                </form>

            </div>


        </div>
    </div>

    @stop