@extends('app-admin')
@section('style')
    {{--{!! HTML::style( asset('assets/admin/plugins/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')) !!}--}}
    {{--{!! HTML::style( asset('assets/admin/plugins/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')) !!}--}}
    {{--{!! HTML::style( asset('assets/admin/plugins/assets/global/plugins/bootstrap-summernote/summernote.css')) !!}--}}


@endsection
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
            <h1>Add About</h1>

            {!! Form::open(['action' => ['AdminController@postAddAbout'],'files' => 'true',  ]) !!}
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
            {{--<div class="col-md-12 form-group" style="margin-bottom: 43px">--}}
                {{--<div class="portlet-body form">--}}
                    {{--<form class="form-horizontal form-bordered">--}}
                        {{--<div class="form-body">--}}
                            {{--<div class="form-group">--}}
                                {{--<label class="control-label col-md-1">Default Editor</label>--}}
                                {{--<div class="col-md-11">--}}
                                    {{--<div name="summernote" id="summernote_1">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="col-md-12 form-group">

                <div class="col-md-12">
                    <span class="callapse_block" data-toggle="collapse" data-parent="#accordion2" href="#collapse7">En</span>

                    <span class="callapse_block" data-toggle="collapse" data-parent="#accordion2" href="#collapse8">Arm</span>

                    <span class="callapse_block"  data-toggle="collapse" data-parent="#accordion2" href="#collapse9">Rus</span>

                    <div class="panel-group" id="accordion2">
                        <div class="panel panel-default">
                            <div id="collapse7" class="panel-collapse collapse in">
                                {!! Form::textarea('text_en', null, ['placeholder' => 'Text En' , 'class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="collapse8" class="panel-collapse collapse">
                                {!! Form::textarea('text_arm', null, ['placeholder' => 'Text Arm' , 'class' => 'form-control']) !!}

                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div id="collapse9" class="panel-collapse collapse">
                                {!! Form::textarea('text_rus', null, ['placeholder' => 'Text Rus' , 'class' => 'form-control']) !!}

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div style="width: 94%;margin-left: 32px;" class="input-group form-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse  Image… <input name="images" type="file" style="display: none;" multiple="">
                    </span>
                </label>
                <input type="text" class="form-control" readonly="">
            </div>
            <div class="col-md-12 form-group">
                <div class="col-md-12">
                    {!! Form::text('alt', null, ['placeholder' => 'Alt' , 'class' => 'form-control']) !!}
                </div>
            </div>

            <div style="float: right;margin-right: 31px;">
                <button type="submit" class="btn green">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@endsection
@section('script')

    {{--{!! HTML::script( asset('assets/admin/plugins/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') ) !!}--}}
    {{--{!! HTML::script( asset('assets/admin/plugins/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') ) !!}--}}
    {{--{!! HTML::script( asset('assets/admin/plugins/assets/global/plugins/bootstrap-markdown/lib/markdown.js') ) !!}--}}
    {{--{!! HTML::script( asset('assets/admin/plugins/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') ) !!}--}}
    {{--{!! HTML::script( asset('assets/admin/plugins/assets/global/plugins/bootstrap-summernote/summernote.min.js') ) !!}--}}

    {{--{!! HTML::script( asset('assets/admin/plugins/assets/admin/pages/scripts/components-editors.js') ) !!}--}}

    <script>
//        jQuery(document).ready(function() {
//            // initiate layout and plugins
//            Metronic.init(); // init metronic core components
//            Layout.init(); // init current layout
//            QuickSidebar.init(); // init quick sidebar
//            Demo.init(); // init demo features
//            ComponentsEditors.init();
//        });
    </script>
@endsection
