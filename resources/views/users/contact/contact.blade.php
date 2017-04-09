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
            {{trans('common.contact')}}
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </span>
    </div>
</div>
<!-- page navigate place -->

<!-- contacts content -->
<div class="contacts_content">
    <div class="contacts_content_center">
        <div class="content_center_child">
            <h2 class="content_center_tilte">
                {{trans('common.contacts')}}
            </h2>
            <p class="content_center_text">
                «ՄԵԳԱՏՐԱՆՍ» ՄԻՋԱԶԳԱՅԻՆ ԲԵՌՆԱՓՈԽԱԴՐՈՒՄՆԵՐԻ ԸՆԿԵՐՈՒԹՅՈՒՆ
                Հայաստան, 0005, Երևան, Տիգրան Մեծ նրբ. 5/16
            </p>
            <p class="content_center_text">
                <span class="center_text_first">Հեռ.`</span>
                <span class="center_text_second">(+374 60) 442574  |  (+374 60) 482574  |  (+374 10) 559705  |  (+374 10) 559707</span>
            </p>
            <p class="content_center_text">
                <span class="center_text_first">Բջջ.`</span>
                <span class="center_text_second">(+374 91) 442574</span>
            </p>
            <p class="content_center_text">
                <span class="center_text_first">Էլ. հասցե՝</span>
                <span class="center_text_second">info@megatrans.am</span>
            </p>
            <div class="contact_map_place">
                <h2 class="content_center_tilte">
                    Քարտեզ
                </h2>
                <div class="content_map">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <div class="content_center_child">
            <h2 class="content_center_tilte">
                Գրել նամակ
            </h2>
            @include('message')
            {!! Form::open(['action' => ['UsersController@postContact']]) !!}
                {!! Form::text('name',null, ['class' => 'name','placeholder'=>'Անունը']) !!}
                {!! Form::text('email',null, ['class' => 'name','placeholder'=>'Էլ. փոստը']) !!}
                {!! Form::text('team',null, ['class' => 'tema','placeholder'=>'Թեմա']) !!}
                {!! Form::textarea('message',null, ['class' => 'textarea','placeholder'=>'Հաղորդագրություն']) !!}
                <input type="submit" class="send" value="{{trans('common.send')}}" />
                <p class="empty_fields">
                    Լրացրեք պարտադիր դաշտերը
                </p>
            {!!Form::close()!!}

        </div>
    </div>
</div>
<!-- contacts content -->
<!-- ogtakar content -->

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

@section('script')
    {!! HTML::script( asset('assets/user/js/map.js') ) !!}
    {!! HTML::script( asset('assets/user/js/google_map.js') ) !!}
    @yield('script')

@endsection