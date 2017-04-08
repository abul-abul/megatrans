@extends('app-users')
@section('users-content')
<!-- page navigate place -->
<div class="navigate_place">
    <div class="navigate_center">
        <span class="navigate_text">
            <a href="{{action('UsersController@getHome')}}">
            Գլխավոր էջ
            </a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </span>
        <span class="navigate_text">
            Հարցում
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </span>
    </div>
</div>
<!-- page navigate place -->

<!-- qouestion content -->
<div class="qouestion_content">
    <div class="qouestion_content_center">
        <h1 class="qouestion_title">
            Հարցում
        </h1>
        @include('message')
        {!! Form::open(['action' => ['UsersController@postRequest']]) !!}

        <div class="qouestion_child">
            </div>
            <div class="qouestion_child">
                {!! Form::text('company',null, ['class' => 'qouestion','placeholder'=>'Կազմակերպություն']) !!}
                {!! Form::text('contact_person',null, ['class' => 'qouestion','placeholder'=>'Կոնտակտային անձ*']) !!}
                {!! Form::text('tel',null, ['class' => 'qouestion','placeholder'=>'Հեռ.*']) !!}
                {!! Form::text('email',null, ['class' => 'qouestion','placeholder'=>'Էլ-փոստ*']) !!}
                {!! Form::text('cargo_description',null, ['class' => 'qouestion','placeholder'=>'Բեռի նկարագրություն*']) !!}
                {!! Form::text('code',null, ['class' => 'qouestion','placeholder'=>'Կոդ']) !!}
                {!! Form::text('number_and_types_of_railcars',null, ['class' => 'qouestion','placeholder'=>'Վագոնների քանակ և տեսակ']) !!}
                {!! Form::text('cargo_gross_weight_in_one_railcar',null, ['class' => 'qouestion','placeholder'=>'Բեռի բրուտտո քաշը մեկ վագոնում (տ)']) !!}
                {!! Form::text('cargo_total_gross_weight',null, ['class' => 'qouestion','placeholder'=>'Բեռի ընդհանուր բրուտտո քաշը (տ)']) !!}
                {!! Form::text('un_number',null, ['class' => 'qouestion','placeholder'=>'Վտանգավորության կարգ, UN համար']) !!}

                <input type="submit" name="send" class="send" value="ուղարկել" />
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
            բեռնափոխադրման տեսակներ
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