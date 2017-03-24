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
        .add_button_block{
            margin-top: 46px;
        }
    </style>
    {!! Form::open(['action' => ['AdminController@postAddSkill'],'files' => 'true',  ]) !!}
    <input type="hidden" name="id" value="{{$id}}">
    <div class="col-md-12 form-group skills_block">
        <div class="col-md-10 ">
            <span class="callapse_block" data-toggle="collapse" data-parent="#accordion2" href="#collapse7">En</span>

            <span class="callapse_block" data-toggle="collapse" data-parent="#accordion2" href="#collapse8">Arm</span>

            <span class="callapse_block"  data-toggle="collapse" data-parent="#accordion2" href="#collapse9">Rus</span>

            <div class="panel-group" id="accordion2">
                <div class="panel panel-default">
                    <div id="collapse7" class="panel-collapse collapse in">
                        {!! Form::text('skill_en', null, ['placeholder' => 'Skill En' , 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div id="collapse8" class="panel-collapse collapse">
                        {!! Form::text('skill_arm', null, ['placeholder' => 'Skill Arm' , 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="panel panel-default">
                    <div id="collapse9" class="panel-collapse collapse">
                        {!! Form::text('skill_rus', null, ['placeholder' => 'Skill Rus' , 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 add_button_block"><button type="button" class="btn btn-info add_block">Add</button></div>

    </div>
    <div style="margin-left: 50px;">
        <button type="submit" class="btn green">Submit</button>
    </div>
    {!! Form::close() !!}

@endsection