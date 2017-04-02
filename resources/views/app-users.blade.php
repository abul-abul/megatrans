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
<a href="#">{{trans('common.language')}}</a>

<ul class="regularmenu-inner">
    <li><a href="{{URL::to('/en/' . $currentPathWithoutLocale)}}">en</a></li>
    <li><a href="{{URL::to('/ru/' . $currentPathWithoutLocale)}}">ru</a></li>
    <li><a href="{{URL::to('/am/' . $currentPathWithoutLocale)}}">am</a></li>
</ul>

    @yield('users-content')


    {!! HTML::script( asset('assets/user/js/jquery.js') ) !!}
    {!! HTML::script( asset('assets/user/js/bootstrap.min.js') ) !!}
    {!! HTML::script( asset('assets/user/js/jquery-flexisel.js') ) !!}
    {!! HTML::script( asset('assets/user/js/coolclock.js') ) !!}
    {!! HTML::script( asset('assets/user/js/moreskins.js') ) !!}
    {!! HTML::script( asset('assets/user/js/init.js') ) !!}



</body>

</html>