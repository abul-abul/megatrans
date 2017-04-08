@extends('app-users')
@section('users-content')
        <!-- services bg place -->
<div class="services_bg_place">
    <div class="services_center_child">
        <div class="services_desc_place">
            <div class="services_title_place">
                <img src="/assets/images/service-images/{{$service->images_icon}}" class="services_small_img" alt="" />
                <h1 class="services_title">
                    @if($lang == 'en')
                        {{$service->title_en}}
                    @elseif($lang == 'ru')
                        {{$service->title_rus}}
                    @elseif($lang == 'am')
                        {{$service->title_arm}}
                    @endif
                </h1>
                <p class="services_text">
                    @if($lang == 'en')
                        {{$service->description_en}}
                    @elseif($lang == 'ru')
                        {{$service->description_rus}}
                    @elseif($lang == 'am')
                        {{$service->description_arm}}
                    @endif

                </p>
            </div>
        </div>
    </div>
    <div style="background-image: url('/assets/images/service-images/{{$service->images}}');" class="services_center_child"></div>
</div>
<!-- services bg place -->


<!-- services content place -->
<div class="services_content">
    <div class="services_content_center">
        <div class="services_center_abs">
            <div class="center_abs_child">
                <h2 class="services_content_title">
                    @if($lang == 'en')
                        {{$service->title_en}}
                    @elseif($lang == 'ru')
                        {{$service->title_rus}}
                    @elseif($lang == 'am')
                        {{$service->title_arm}}
                    @endif
                </h2>
                <ul class="content_list_menu">
                    @foreach($skills as $skill)
                    <li class="list_menu_li">
                        <span class="li_round"></span>
                        <span class="li_round_text">
                            @if($lang == 'en')
                                {{$skill->skill_en}}
                            @elseif($lang == 'ru')
                                {{$skill->skill_rus}}
                            @elseif($lang == 'am')
                                {{$skill->skill_arm}}
                            @endif
                        </span>
                    </li>
                    @endforeach
                </ul>
                <div class="profi_title_place">
                    <div class="profi_title_child"></div>
                    <div class="profi_title_child"></div>
                    <p class="profi_title">
                        Մեր մասնագետները կանեն ամեն ինչ և այլն
                    </p>
                </div>
                <a href="Harcum.html">
                    <button class="qouestion_btn">
                        ուղարկել հարցում
                    </button>
                </a>
            </div>
            <div class="center_abs_child">
                <div class="services_video_place">
                    <div class="services_video">
                        <iframe src="{{$service->video}}" frameborder="0" allowfullscreen class="iframe"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- other services -->
    <div class="other_services_place">
        <h2 class="other_title">
            այլ բեռնափոխադրման տեսակներ
        </h2>
        <div class="other_services">
            @foreach($services as $service)
            <div class="other_services_child">
                <a href="{{action('UsersController@getService',$service->id)}}" class="other_links">
                    <img src="/assets/images/service-images/{{$service->images_icon}}" class="other_icon" alt="Services" />
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- other services -->
</div>
<!-- services content place -->
@endsection