@extends('app-users')
@section('users-content')
    <div class="navigate_place">
        <div class="navigate_center">
				<span class="navigate_text">
					Գլխավոր էջ
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
				<span class="navigate_text">
					Օգտակար նյութեր
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
        </div>
    </div>
    <!-- page navigate place -->
    <!-- ogtakar content -->
    <div class="ogtakar_content">
        <div class="ogtakar_content_center">
            @foreach($blogs as $blog)
            <div class="ogtakar_content_child">
                <a href="{{action('UsersController@getInnerBlog',$blog->id)}}">
                    <img src="/assets/images/blog-images/{{$blog->images}}" class="ogtakar_img" alt="blog" />
                    <div class="ogtakar_child_abs">
                        <h2 class="ogtakar_child_title">
                            @if($lang == 'en')
                                {{$blog->title_en}}
                            @elseif($lang == 'ru')
                                {{$blog->title_rus}}
                            @elseif($lang == 'am')
                                {{$blog->title_arm}}
                            @endif
                        </h2>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
    <!-- ogtakar content -->

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