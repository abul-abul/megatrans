@extends('app-admin')

@section('admin-content')
    <style>
        .panel-default{
            border-color: #fff;
        }
        .callapse_block{
            font-size: 19px;
            margin-right: -5px;
            cursor: pointer;
            border: 1px solid;
            padding: 2px;
            width: 45px;
            display: inline-block;
            text-align: center;
            margin-bottom: 12px;
            background: #1caf9a;
            color: #fff;
        }
        .bg{
            background: #ccc;
        }
    </style>
    @include('message')
    <div class="portlet-body form">
        <div class="col-md-12">
            <h1>Edit Useful Information</h1>

            {!! Form::model($blog,['action' => ['AdminController@postEditBlog'] ,'files' =>true ] ) !!}
            <input type="hidden" name="id" value="{{$blog->id}}">

            <div class="col-md-12 form-group">
                <div class="col-md-12">
                    <span class="callapse_block" data-toggle="collapse" data-parent="#accordion" href="#collapse1">En</span>

                    <span class="callapse_block" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Arm</span>

                    <span class="callapse_block"  data-toggle="collapse" data-parent="#accordion" href="#collapse3">Rus</span>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div id="collapse1" class="panel-collapse collapse in">
                                {!! Form::text('title_en', null, ['placeholder' => 'Title En' , 'class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="collapse2" class="panel-collapse collapse">
                                {!! Form::text('title_arm', null, ['placeholder' => 'Title Arm' , 'class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="collapse3" class="panel-collapse collapse">
                                {!! Form::text('title_rus', null, ['placeholder' => 'Title Rus' , 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 form-group">

                <div class="col-md-12">
                    <span class="callapse_block" data-toggle="collapse" data-parent="#accordion1" href="#collapse4">En</span>

                    <span class="callapse_block" data-toggle="collapse" data-parent="#accordion1" href="#collapse5">Arm</span>

                    <span class="callapse_block"  data-toggle="collapse" data-parent="#accordion1" href="#collapse6">Rus</span>

                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div id="collapse4" class="panel-collapse collapse in">
                                {!! Form::textarea('description_en', null, ['placeholder' => 'Description En' , 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="collapse5" class="panel-collapse collapse">
                                {!! Form::textarea('description_arm', null, ['placeholder' => 'Description Arm' , 'class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="collapse6" class="panel-collapse collapse">
                                {!! Form::textarea('description_rus', null, ['placeholder' => 'Description Rus' , 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div style="width: 94%;margin-left: 32px;" class="input-group form-group">
                {!! Form::text('video', null, ['placeholder' => 'Video' , 'class' => 'form-control']) !!}

            </div>
            <div style="width: 94%;margin-left: 32px;" class="input-group form-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse  Images… <input name="images" type="file" style="display: none;">
                    </span>
                </label>
                <input type="text" class="form-control" readonly="">
            </div>

            <div style="width: 94%;margin-left: 32px;" class="input-group form-group">
                Browse Gallery Images… {!! Form::file('images_gallery[]', array('multiple'=>true)) !!}
            </div>


            <div style="float: right;margin-right: 31px;">
                <button type="submit" class="btn green">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>

    </div>




@endsection

