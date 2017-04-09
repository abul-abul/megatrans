@extends('app-users')
@section('users-content')
<!-- page navigate place -->
<div class="navigate_place">
    <div class="navigate_center">
        <span class="navigate_text">
            <a href="{{action('UsersController@getHome')}}">
            {{trans('common.home_page')}}
            </a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </span>
        <span class="navigate_text">
            {{trans('common.request')}}
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </span>
    </div>
</div>
<!-- page navigate place -->

<!-- qouestion content -->
<div class="qouestion_content">
    <div class="qouestion_content_center">
        <h1 class="qouestion_title">
            {{trans('common.request')}}

        </h1>
        @include('message')
        {!! Form::open(['action' => ['UsersController@postRequest']]) !!}

        <div class="qouestion_child">
            </div>
            <div class="qouestion_child">
                {!! Form::text('company',null, ['class' => 'qouestion','placeholder'=> trans("common.company") ]) !!}
                {!! Form::text('contact_person',null, ['class' => 'qouestion','placeholder'=>trans('common.contact_person')]) !!}
                {!! Form::text('tel',null, ['class' => 'qouestion','placeholder'=>trans('common.telephone')]) !!}
                {!! Form::text('email',null, ['class' => 'qouestion','placeholder'=>trans('common.email')]) !!}
                {!! Form::text('cargo_description',null, ['class' => 'qouestion','placeholder'=>trans('common.cargo_description')]) !!}
                {!! Form::text('code',null, ['class' => 'qouestion','placeholder'=>trans('common.code')]) !!}
                {!! Form::text('number_and_types_of_railcars',null, ['class' => 'qouestion','placeholder'=>trans('common.types_wagon')]) !!}
                {!! Form::text('cargo_gross_weight_in_one_railcar',null, ['class' => 'qouestion','placeholder'=>trans('common.weight_per_car_loa')]) !!}
                {!! Form::text('cargo_total_gross_weight',null, ['class' => 'qouestion','placeholder'=>trans('common.total_gross')]) !!}
                {!! Form::text('un_number',null, ['class' => 'qouestion','placeholder'=>trans('common.hazard_class_un_for')]) !!}

                <input type="submit" name="send" class="send" value="{{trans('common.send')}}" />
                <p class="empty_fields">
                    Լրացրեք պարտադիր դաշտերը
                </p>
            </div>
        {!!Form::close()!!}

    </div>
</div>
<!-- qouestion content -->


<div class="more_services_place">
    <div class="more_services_center">
        <h2 class="other_title">
            {{trans('common.types_transport')}}
        </h2>
        <div class="more_services">
            @foreach($services as $service)
                <div class="more_services_child">
                    <a href="{{action('UsersController@getService',$service->id)}}" class="other_links">
                        <img src="/assets/images/service-images/{{$service->images_icon}}" class="more_ser_icon" alt="Services" />
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- more services -->
@endsection