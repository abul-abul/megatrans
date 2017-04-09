@extends('app-users')
@section('style')
  {!! HTML::style( asset('assets/user/css/fancybox.css')) !!}
@endsection
@section('users-content')
<!-- page navigate place -->
<div class="navigate_place">
    <div class="navigate_center">
				<span class="navigate_text">
					{{trans('common.home_page')}}
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
				<span class="navigate_text">
					{{trans('common.useful')}}
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
    </div>
</div>
<!-- page navigate place -->

<!-- ogteakar inner content -->
<div class="ogtakar_content">
    <div class="Ogtakar_inner_center">
        <div class="Ogtakar_inner_child">
            <h1 class="Ogtakar_inner_title">
                @if($lang == 'en')
                    {{$blog->title_en}}
                @elseif($lang == 'ru')
                    {{$blog->title_rus}}
                @elseif($lang == 'am')
                    {{$blog->title_arm}}
                @endif
            </h1>
            <p class="ogtakar_inner_text">
                @if($lang == 'en')
                    {{$blog->description_en}}
                @elseif($lang == 'ru')
                    {{$blog->description_rus}}
                @elseif($lang == 'am')
                    {{$blog->description_arm}}
                @endif
            </p>
            {{--<p class="ogtakar_inner_text">--}}
            {{--<p class="ogtakar_inner_text_title">Ոչ գաբարիտային բեռների փոխադրում</p>--}}
            {{--Բեռնափոխադրման ողջ գործընթացի ժամանակ իրականացվում է մշտական հսկողություն բեռի շարժի նկատմամբ՝ հնարավորություն ընձեռելով տեղեկություն ստանալ բեռի կարգավիճակի և գտնվելու վայրի մասին:--}}
            {{--</p>--}}
            {{--<p class="ogtakar_inner_text">--}}
                {{--Մեր ընկերության համար սկզբունքային են բեռների փոխադրման օպերատիվությունն ու անվտանգությունը: Ընկերության փորձառու և պրոֆեսիոնալ աշխատակազմն իր հաճախորդին մատուցում է բարձրակարգ ծառայություններ փոխշահավետ պայմաններով:--}}
            {{--</p>--}}
            {{--<p class="ogtakar_inner_text">--}}
            {{--<p class="ogtakar_inner_text_title">Մենք երաշխավորում ենք.</p>--}}
            {{--<p class="inner_text_italic">--}}
                {{--Բեռի տեղափոխման օպտիմալ երթուղու ընտրություն--}}
            {{--</p>--}}
            {{--<p class="inner_text_italic">--}}
                {{--Սակագների և բեռնափոխադրման հետ կապված այլ վճարումների--}}
            {{--</p>--}}
            {{--<p class="inner_text_italic">--}}
                {{--նախնական հաշվարկ--}}
            {{--</p>--}}
            {{--<p class="inner_text_italic">--}}
                {{--Մրցակցային գներ--}}
            {{--</p>--}}
            {{--<p class="inner_text_italic">--}}
                {{--ծառայությունների մատուցման բարձր որակ--}}
            {{--</p>--}}
            {{--</p>--}}
        </div>
        <div class="Ogtakar_inner_child">
            <div class="Ogtakar_video_place">
                <iframe src="{{$blog->video}}" frameborder="0" allowfullscreen class="ogtakar_inner_video"></iframe>
            </div>
            <div class="light_box_place">
                @foreach($gallerys as $gallery)
                <div class="light_box_child">

                    <a class="fancybox fancy_big" rel="group" href="/assets/images/blog-images/{{$gallery->images_gallery}}" />
                    <img src="/assets/images/blog-images/{{$gallery->images_gallery}}" class="fancy_small" alt="gallery">
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- ogteakar inner content -->

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
    {{--<script src="js/fancy_jquery.js"></script>--}}
    {!! HTML::script( asset('assets/user/js/fancy_jquery.js') ) !!}

    {!! HTML::script( asset('assets/user/js/fancybox.js') ) !!}

@endsection