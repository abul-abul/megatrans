@extends('app-users')
@section('users-content')

    <!-- home big slider -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i=1;$i<=count($gallerys);$i++)
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            @endfor
            {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
        </ol>
        <div class="carousel-inner">
            @foreach($gallerys as $gallery)
            <div class="item">
                <img src="/assets/images/gallery-images/{{$gallery->images}}" class="home_slide_images" alt="{{$gallery->alt}}" />
                <div class="carousel-caption">
                    <div class="slide_text_place">
                        <div class="slide_text_center">
                            <h1 class="slide_title">
                                <span class="slide_title_abs"></span>
                                @if($lang == 'en')
                                {{$gallery->title_en}}
                                @elseif($lang == 'ru')
                                {{$gallery->title_rus}}
                                @elseif($lang == 'am')
                                {{$gallery->title_arm}}
                                @endif
                            </h1>
                            <h2 class="slide_text">
                                <span class="slide_text_abs"></span>
                                @if($lang == 'en')
                                    {{$gallery->description_en}}
                                @elseif($lang == 'ru')
                                    {{$gallery->description_rus}}
                                @elseif($lang == 'am')
                                    {{$gallery->description_arm}}
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <!-- display none -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <!-- display none -->
    </div>
    <!-- home big slider -->
    <!-- small slider -->
    <div class="small_slider_place">
        @foreach($services as $service)

        <div class="small_slider_child">
            <div class="small_slider_icon_place">
                <img src="/assets/images/service-images/{{$service->images_icon}}" class="small_slider_icon" alt="images" />
            </div>
            <div class="small_slider_desc_place">
                <img src="/assets/images/service-images/{{$service->images_icon}}" class="small_slider_blue_icons" alt="" />
                <h2 class="small_slider_title">
                    @if($lang == 'en')
                        {{$service->title_en}}
                    @elseif($lang == 'ru')
                        {{$service->title_rus}}
                    @elseif($lang == 'am')
                        {{$service->title_arm}}
                    @endif
                </h2>
                <p class="small_slider_text">
                    @if($lang == 'en')
                        {{$service->description_en}}
                    @elseif($lang == 'ru')
                        {{$service->description_rus}}
                    @elseif($lang == 'am')
                        {{$service->description_arm}}
                    @endif
                </p>
                <a href="{{action('UsersController@getService',$service->id)}}" class="small_slider_more_link">
							<span class="small_slider_more_text">
								ԱՎԵԼԻՆ
							</span>
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        @endforeach
    </div>
    <!-- small slider -->
</section>

<!-- online place -->
<section class="online_place">
    <div class="online_center">
        <div class="online_center_child"></div>
        <div class="online_center_child">
            <h2 class="online_title">
                բեռի օնլայն հետևում
            </h2>

                <label class="inp_title">
                    կոնտեյների համարը
                    <input type="number" name="conteiner_number" class="cont_number">
                </label>
                <label class="inp_title">
                    փոխադրող
                    <div class="carrier_place">
                        <div id="trackHost" class="select_place">
                            <p value="" class="sel_text">
                                MSC
                            </p>
                            <div class="up_down_place">
                                <img src="/assets/user/images/select_down.png" class="sel_down" />
                                <img src="/assets/user/images/select_up.png" class="sel_up" />
                            </div>
                            <div class="choose_place">
                                <p data-val="msc" class="choose_text">
                                    MSC
                                </p>
                                <p data-val="norasia" class="choose_text">
                                    CSAV Norasia
                                </p>
                                <p data-val='kline' class="choose_text">
                                    "K" Line America
                                </p>
                                <p data-val="cma" class="choose_text">
                                    CMA CGM
                                </p>
                                <p data-val="maersk" class="choose_text">
                                    Maersk
                                </p>
                                <p data-val="oocl" class="choose_text">
                                    OOCL
                                </p>
                                <p data-val="tslines" class="choose_text">
                                    T.S. Lines
                                </p>
                                <p data-val="zim" class="choose_text">
                                    ZIM
                                </p>
                                <p data-val="hapaglloyd" class="choose_text">
                                    Hapag-Lioyd
                                </p>
                                <p data-val="safmarine"  class="choose_text">
                                    Safmarine
                                </p>
                                <p data-val="cosco" class="choose_text">
                                    COSCO
                                </p>
                            </div>
                        </div>
                    </div>
                </label>
                <input type="button"  value="հետեվել" class="see" />

        </div>
    </div>
</section>
<!-- online place -->

<!-- partners place -->
<section class="partners_place">
    <div class="partners_place_center">
        <h2 class="partners_title">
            գործընկերները
        </h2>
        <div class="partners_slide_place">
            <ul id="flexiselDemo1">
                @foreach($partners as $partner)
                <li>
                    <a href="{{$partner->images}}">
                        <img alt="{{$partner->alt}}" src="/assets/images/partners-images/{{$partner->images}}" class="partners_logo"/>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- partners place -->
@endsection

@section('script')
    {!! HTML::script( asset('assets/user/js/tracking.js') ) !!}
@endsection