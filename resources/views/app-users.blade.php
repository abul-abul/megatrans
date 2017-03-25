<!DOCTYPE html>

<html>

<head>
    {!! HTML::style( asset('assets/admin/plugins/assets/global/plugins/bootstrap/css/bootstrap.min.css')) !!}
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

    {!! HTML::script( asset('assets/admin/plugins/assets/global/plugins/jquery.min.js') ) !!}


</body>

</html>