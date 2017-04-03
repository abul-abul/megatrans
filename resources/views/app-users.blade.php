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
            <a href="Home.html" class="small_icons_links">
                <img src="/assets/user/images/home.png" class="small_icons_img" />
            </a>
            <a href="#" class="small_icons_links">
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
            <a href="Home.html">
                <img src="/assets/user/images/header_logo.png" class="header_logo" />
            </a>
        </div>
        <ul class="header_menu">
            <li class="header_menu_li">
                <a href="Services.html" class="header_menu_links">
                    ծառայություններ
                </a>
                <ul class="sub_menu_abs">
                    <li class="sub_menu_li">
                        <a href="Services.html" class="sub_menu_links">
                            Երկաթուղային բեռնափոխադրում
                        </a>
                    </li>
                    <li class="sub_menu_li">
                        <a href="Services.html" class="sub_menu_links">
                            Բեռնարկային բեռնափոխադրում
                        </a>
                    </li>
                    <li class="sub_menu_li">
                        <a href="Services.html" class="sub_menu_links">
                            Ավտոմոբիլային բեռնափոխադրում
                        </a>
                    </li>
                    <li class="sub_menu_li">
                        <a href="Services.html" class="sub_menu_links">
                            Օդային բեռնափոխադրում
                        </a>
                    </li>
                    <li class="sub_menu_li">
                        <a href="Services.html" class="sub_menu_links">
                            հավաքական բեռնափոխադրում
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header_menu_li">
                <a href="About.html" class="header_menu_links">
                    ընկերություն
                </a>
            </li>
            <li class="header_menu_li">
                <a href="Ogtakar.html" class="header_menu_links">
                    օգտակար նյութեր
                </a>
            </li>
            <li class="header_menu_li">
                <a href="Contacts.html" class="header_menu_links">
                    հետադարձ կապ
                </a>
            </li>
            <li class="header_menu_li">
                <a href="Harcum.html" class="header_menu_links">
                    հարցում
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
                    <a href="Services.html" class="small_menu_links">
                        ծառայություններ
                    </a>
                    <ul class="sub_menu_small">
                        <li class="small_sub_menu_li">
                            <a href="Services.html" class="small_sub_menu_links">
                                Երկաթուղային բեռնափոխադրում
                            </a>
                        </li>
                        <li class="small_sub_menu_li">
                            <a href="Services.html" class="small_sub_menu_links">
                                Բեռնարկային բեռնափոխադրում
                            </a>
                        </li>
                        <li class="small_sub_menu_li">
                            <a href="Services.html" class="small_sub_menu_links">
                                Ավտոմոբիլային բեռնափոխադրում
                            </a>
                        </li>
                        <li class="small_sub_menu_li">
                            <a href="Services.html" class="small_sub_menu_links">
                                Օդային բեռնափոխադրում
                            </a>
                        </li>
                        <li class="small_sub_menu_li">
                            <a href="Services.html" class="small_sub_menu_links">
                                հավաքական բեռնափոխադրում
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu_small_li">
                    <a href="About.html" class="small_menu_links">
                        ընկերություն
                    </a>
                </li>
                <li class="menu_small_li">
                    <a href="Ogtakar.html" class="small_menu_links">
                        օգտակար նյութեր
                    </a>
                </li>
                <li class="menu_small_li">
                    <a href="Contacts.html" class="small_menu_links">
                        հետադարձ կապ
                    </a>
                </li>
                <li class="menu_small_li">
                    <a href="Harcum.html" class="small_menu_links">
                        հարցում
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
                <a href="Services.html" class="footer_menu_links">
                    ծառայություններ
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="About.html" class="footer_menu_links">
                    ընկերություն
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="Ogtakar.html" class="footer_menu_links">
                    օգտակար նյութեր
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="Contacts.html" class="footer_menu_links">
                    հետադարձ կապ
                </a>
            </li>
            <li class="footer_menu_li">
                <a href="Harcum.html" class="footer_menu_links">
                    հարցում
                </a>
            </li>
        </ul>
        <div class="footer_more_place">
            <div class="forex_place">
                <div class="forex_child">
                    <h2 class="forex_title">
                        Forex quotes
                    </h2>
                    <p class="forex_text">
								<span class="forex_text_value">
									audusd
								</span>
								<span class="forex_text_value">
									0.7575
								</span>
								<span class="forex_text_value">
									0.7578
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									eurchf
								</span>
								<span class="forex_text_value">
									1.0795
								</span>
								<span class="forex_text_value">
									1.0798
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									eurgbp
								</span>
								<span class="forex_text_value">
									0.8739
								</span>
								<span class="forex_text_value">
									0.8742
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									eurjpy
								</span>
								<span class="forex_text_value">
									122.45
								</span>
								<span class="forex_text_value">
									122.48
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									eurusd
								</span>
								<span class="forex_text_value">
									1.0678
								</span>
								<span class="forex_text_value">
									1.0681
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									gbpusd
								</span>
								<span class="forex_text_value">
									1.2218
								</span>
								<span class="forex_text_value">
									1.2221
								</span>
                    </p>
                </div>
                <div class="forex_child">
                    <h2 class="forex_title">
                        Արտարժույթի  փոխարժեքը
                    </h2>
                    <p class="forex_text">
								<span class="forex_text_value">
									usd
								</span>
								<span class="forex_text_value">
									Առք
								</span>
								<span class="forex_text_value">
									Վաճ
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									usd
								</span>
								<span class="forex_text_value">
									484.00
								</span>
								<span class="forex_text_value">
									487.00
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									rub
								</span>
								<span class="forex_text_value">
									808
								</span>
								<span class="forex_text_value">
									833
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									eur
								</span>
								<span class="forex_text_value">
									515.00
								</span>
								<span class="forex_text_value">
									525.00
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									gbp
								</span>
								<span class="forex_text_value">
									585.00
								</span>
								<span class="forex_text_value">
									600.00
								</span>
                    </p>
                    <p class="forex_text">
								<span class="forex_text_value">
									chf
								</span>
								<span class="forex_text_value">
									475.00
								</span>
								<span class="forex_text_value">
									490.00
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
            ՄԵԳԱՏՐԱՆՍ ՍՊԸ բոլոր իրավունքները  պաշտպանված են 2017
        </p>
    </div>
</footer>
<!-- footer -->

    {!! HTML::script( asset('assets/user/js/jquery.js') ) !!}
    {!! HTML::script( asset('assets/user/js/bootstrap.min.js') ) !!}
    {!! HTML::script( asset('assets/user/js/jquery-flexisel.js') ) !!}
    {!! HTML::script( asset('assets/user/js/coolclock.js') ) !!}
    {!! HTML::script( asset('assets/user/js/moreskins.js') ) !!}
    {!! HTML::script( asset('assets/user/js/init.js') ) !!}
    @yield('script')


</body>

</html>