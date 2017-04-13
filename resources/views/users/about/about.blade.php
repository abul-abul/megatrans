@extends('app-users')
@section('users-content')
<!-- about bg place -->
@if($about != null)
<div style="background:url('/assets/images/about-images/{{$about->images}}')" class="about_bg_place">
    <div class="about_bg_center">

        <h1 class="about_title">

            @if($lang == 'en')
                {{$about->title_en}}
            @elseif($lang == 'ru')
                {{$about->title_rus}}
            @elseif($lang == 'am')
                {{$about->title_arm}}
            @endif

        </h1>
        <p class="about_text">
            @if($lang == 'en')
                {{$about->description_en}}
            @elseif($lang == 'ru')
                {{$about->description_rus}}
            @elseif($lang == 'am')
                {{$about->description_arm}}
            @endif
        </p>



    </div>
</div>
@endif
<!-- about bg place -->
<!-- about content -->
<div class="about_content">
    <div class="about_center">
        <div class="about_center_child">
            <p class="ogtakar_inner_text">
                @if($about != null)
                    @if($lang == 'en')
                        {{$about->text_en}}
                    @elseif($lang == 'ru')
                        {{$about->text_rus}}
                    @elseif($lang == 'am')
                        {{$about->text_arm}}
                    @endif
                 @else
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
        <div class="about_center_child"></div>
    </div>
</div>
<!-- about content -->
<!-- more services -->
<div class="more_services_place">
    <div class="more_services_center">
        <h2 class="other_title">
           {{trans('common.types_transport')}}
        </h2>
        <div class="more_services">
            @if(count($services) != "")
            @foreach($services as $service)
            <div class="more_services_child">
                <a href="{{action('UsersController@getService',$service->id)}}" class="other_links">
                    <img src="/assets/images/service-images/{{$service->images_icon}}" class="more_ser_icon" alt="Services" />
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<!-- more services -->
@endsection