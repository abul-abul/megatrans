<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />

    {!! HTML::style( asset('assets/user/font-awesome/css/font-awesome.css')) !!}
    {!! HTML::style( asset('assets/user/css/bootstrap.min.css')) !!}
    {!! HTML::style( asset('assets/user/css/font-face.css')) !!}
    {!! HTML::style( asset('assets/user/css/style.css')) !!}
    @yield('style')

</head>

<body>
{{--<a href="#">{{trans('common.language')}}</a>--}}
@if(isset($homeactive))
<section class="page_start_place">
@endif
        <!-- up header -->
<div class="up_header">
    <div class="up_header_center">
        <div class="language_place">
            @if($lang == 'am')
                <a href="{{URL::to('/am/' . $currentPathWithoutLocale)}}" class="language_links lang_active">
            @else
                <a href="{{URL::to('/am/' . $currentPathWithoutLocale)}}" class="language_links">
            @endif
                arm
            </a>
            @if($lang == 'ru')
            <a href="{{URL::to('/ru/' . $currentPathWithoutLocale)}}" class="language_links lang_active">
            @else
            <a href="{{URL::to('/ru/' . $currentPathWithoutLocale)}}" class="language_links">
            @endif
                rus
            </a>
            @if($lang == 'en')
            <a href="{{URL::to('/en/' . $currentPathWithoutLocale)}}" class="language_links lang_active">
            @else
            <a href="{{URL::to('/en/' . $currentPathWithoutLocale)}}" class="language_links">
            @endif
                eng
            </a>
        </div>
        <div class="up_header_soc_place">
            <a href="#" class="soc_links">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="#" class="soc_links">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="#" class="soc_links">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
        <div class="up_header_small_icons">
            <a href="{{action('UsersController@getHome')}}" class="small_icons_links">
                <img src="/assets/user/images/home.png" class="small_icons_img" />
            </a>
            <a href="{{action('UsersController@getContact')}}" class="small_icons_links">
                <img src="/assets/user/images/message.png" class="small_icons_img" />
            </a>
        </div>
    </div>
</div>
<!-- up header -->
<!-- header -->
<header>
    <div class="header_center">
        <div class="header_logo_place">
            <a href="{{action('UsersController@getHome')}}">
                <img src="/assets/user/images/header_logo.png" class="header_logo" />
            </a>
        </div>
        <ul class="header_menu">
            @if(isset($serviceactive))
                <li class="header_menu_li header_menu_active">
            @else
                <li class="header_menu_li">
             @endif
                <a href="#" class="header_menu_links">
                    {{trans('common.services')}}
                </a>
                <ul class="sub_menu_abs">
                    @foreach($services as $service)
                        <li class="sub_menu_li">
                            <a href="{{action('UsersController@getService',$service->id)}}" class="sub_menu_links">
                                @if($lang == 'en')
                                    {{$service->title_en}}
                                @elseif($lang == 'ru')
                                    {{$service->title_rus}}
                                @elseif($lang == 'am')
                                    {{$service->title_arm}}
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            @if(isset($activeabout))
            <li class="header_menu_li header_menu_active">
            @else
            <li class="header_menu_li">
            @endif
                <a href="{{action('UsersController@getAbout')}}" class="header_menu_links">
                    {{trans('common.company')}}
                </a>
            </li>
            @if(isset($blogactive))
                <li class="header_menu_li header_menu_active">
            @else
                <li class="header_menu_li">
            @endif
                <a href="{{action('UsersController@getBlog')}}" class="header_menu_links">
                   {{trans('common.useful')}}
                </a>
            </li>
            @if(isset($contactactive))
                <li class="header_menu_li header_menu_active">
            @else
                <li class="header_menu_li">
            @endif
                <a href="{{action('UsersController@getContact')}}" class="header_menu_links">
                   {{trans('common.contact')}}
                </a>
            </li>
            @if(isset($requestactive))
                    <li class="header_menu_li header_menu_active">
                @else
                    <li class="header_menu_li">
            @endif
                <a href="{{action('UsersController@getRequest')}}" class="header_menu_links">
                    {{trans('common.request')}}
                </a>
            </li>
        </ul>
        <div class="header_menu_small_place">
            <div class="burger_place">
                <span class="burger"></span>
                <span class="burger"></span>
                <span class="burger"></span>
            </div>
            <div class="close_place">
                <img src="/assets/user/images/close.png" class="close" />
            </div>
            <ul class="header_menu_small">
                <li class="menu_small_li">
                    <a href="#" class="small_menu_links">
                        {{trans('common.services')}}
                    </a>
                    <ul class="sub_menu_small">
                        @foreach($services as $service)
                        <li class="small_sub_menu_li">
                            <a href="{{action('UsersController@getService',$service->id)}}" class="small_sub_menu_links">
                                @if($lang == 'en')
                                    {{$service->title_en}}
                                @elseif($lang == 'ru')
                                    {{$service->title_rus}}
                                @elseif($lang == 'am')
                                    {{$service->title_arm}}
                                @endif
                            </a>

                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="menu_small_li">
                    <a href="{{action('UsersController@getAbout')}}" class="small_menu_links">
                        {{trans('common.company')}}
                    </a>
                </li>
                <li class="menu_small_li">
                    <a href="{{action('UsersController@getBlog')}}" class="small_menu_links">
                        {{trans('common.useful')}}
                    </a>
                </li>
                <li class="menu_small_li">
                    <a href="{{action('UsersController@getContact')}}" class="small_menu_links">
                        {{trans('common.contact')}}
                    </a>
                </li>
                <li class="menu_small_li">
                    <a href="{{action('UsersController@getRequest')}}" class="small_menu_links">
                        {{trans('common.request')}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- header -->

    @yield('users-content')



<!-- footer -->
<footer>
    <div class="footer_center">
        <div class="footer_logo_place">
            <a href="Home.html">
                <img src="/assets/user/images/footer_logo.png" class="footer_logo" alt="" />
            </a>
        </div>
        <ul class="footer_menu">
            <li class="footer_menu_li">
                <a href="#" class="footer_menu_links">
                    {{trans('common.services')}}
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="{{action('UsersController@getAbout')}}" class="footer_menu_links">
                    {{trans('common.company')}}
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="{{action('UsersController@getBlog')}}" class="footer_menu_links">
                    {{trans('common.useful')}}
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="{{action('UsersController@getContact')}}" class="footer_menu_links">
                    {{trans('common.contact')}}
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="{{action('UsersController@getRequest')}}" class="footer_menu_links">
                    {{trans('common.request')}}
                </a>
            </li>
        </ul>
        <div class="footer_more_place">
            <div class="forex_place">
                {{--<div class="forex_child">--}}
                    {{--<h2 class="forex_title">--}}
                        {{--Forex quotes--}}
                    {{--</h2>--}}
                    {{--<p class="forex_text">--}}
						{{--<span class="forex_text_value">--}}
							{{--audusd--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--0.7575--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--0.7578--}}
						{{--</span>--}}
                    {{--</p>--}}
                    {{--<p class="forex_text">--}}
						{{--<span class="forex_text_value">--}}
							{{--eurchf--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--1.0795--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--1.0798--}}
						{{--</span>--}}
                    {{--</p>--}}
                    {{--<p class="forex_text">--}}
						{{--<span class="forex_text_value">--}}
							{{--eurgbp--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--0.8739--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--0.8742--}}
						{{--</span>--}}
                    {{--</p>--}}
                    {{--<p class="forex_text">--}}
						{{--<span class="forex_text_value">--}}
							{{--eurjpy--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--122.45--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--122.48--}}
						{{--</span>--}}
                    {{--</p>--}}
                    {{--<p class="forex_text">--}}
						{{--<span class="forex_text_value">--}}
							{{--eurusd--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--1.0678--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--1.0681--}}
						{{--</span>--}}
                    {{--</p>--}}
                    {{--<p class="forex_text">--}}
						{{--<span class="forex_text_value">--}}
							{{--gbpusd--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--1.2218--}}
						{{--</span>--}}
						{{--<span class="forex_text_value">--}}
							{{--1.2221--}}
						{{--</span>--}}
                    {{--</p>--}}
                {{--</div>--}}
                <div class="forex_child">
                    <h2 class="forex_title">
                       {{trans('common.currency_exchange')}}
                    </h2>
                    <p class="forex_text">
                        <span class="forex_text_value">
                            usd
                        </span>
                        <span class="forex_text_value">
                            {{trans('common.buy')}}
                        </span>
                        <span class="forex_text_value">
                            {{trans('common.sale')}}
                        </span>
                    </p>
                    <p class="forex_text">
                        <span class="forex_text_value">
                            usd
                        </span>
                        <span class="forex_text_value">
                            {{$usd['buy'][0]}}
                        </span>
                        <span class="forex_text_value">
                            {{$usd['sale'][0]}}
                        </span>
                    </p>
                    <p class="forex_text">
                        <span class="forex_text_value">
                            rub
                        </span>
                        <span class="forex_text_value">
                            {{$rus['buy'][0]}}
                        </span>
                        <span class="forex_text_value">
                            {{$rus['sale'][0]}}
                        </span>
                    </p>
                    <p class="forex_text">
                        <span class="forex_text_value">
                            eur
                        </span>
                        <span class="forex_text_value">
                            {{$eur['buy'][0]}}
                        </span>
                        <span class="forex_text_value">
                            {{$eur['sale'][0]}}
                        </span>
                    </p>


                </div>
            </div>
            <div class="clock_place">
                <div id="demo"></div>
            </div>
            <div class="footer_soc_place">
                <a href="#" class="foter_soc_links">
                    <img src="/assets/user/images/footer_face.png" class="footer_soc" />
                </a>
                <a href="#" class="foter_soc_links">
                    <img src="/assets/user/images/footer_in.png" class="footer_soc" />
                </a>
                <a href="#" class="foter_soc_links">
                    <img src="/assets/user/images/footer_you.png" class="footer_soc" />
                </a>
            </div>
        </div>
        <p class="copy_right">
            {{trans('common.reserved')}}
        </p>
    </div>
</footer>
<!-- footer -->

    {!! HTML::script( asset('assets/user/js/jquery.js') ) !!}
    {!! HTML::script( asset('assets/user/js/bootstrap.min.js') ) !!}
    {!! HTML::script( asset('assets/user/js/coolclock.js') ) !!}
    {!! HTML::script( asset('assets/user/js/moreskins.js') ) !!}
    {!! HTML::script( asset('assets/user/js/init.js') ) !!}
    @yield('script')


</body>

</html>