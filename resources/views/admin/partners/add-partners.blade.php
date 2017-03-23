@extends('app-admin')
@section('admin-content')
    @include('message')
    <div class="portlet-body form">
        <div class="col-md-12">
            <h1>Add Partners</h1>

            {!! Form::open(['action' => ['AdminController@postAddPartners'],'files' => 'true',  ]) !!}
                <div style="width: 94%;margin-left: 32px;" class="input-group form-group">
                    <label class="input-group-btn">
                        <span class="btn btn-primary">
                            Browse Partners Image… <input name="images" type="file" style="display: none;" multiple="">
                        </span>
                    </label>
                    <input type="text" class="form-control" readonly="">
                </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-12">
                        {!! Form::text('alt', null, ['placeholder' => 'Alt' , 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-12">
                        {!! Form::text('link', null, ['placeholder' => 'Partners Link' , 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div style="float: right;margin-right: 31px;">
                    <button type="submit" class="btn green">Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection