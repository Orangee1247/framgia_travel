<!DOCTYPE html>
<html lang="en">
@include('includes.head')
@yield('style')

<body>

@yield('slide')

@yield('header')

@yield('content')

@include('includes.footer')

{{ HTML::script('bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ HTML::script('bower_components/FourBoxes/js/modernizr.custom.js') }}
<!-- js required for banner slider -->
{{ HTML::script('bower_components/FourBoxes/js/classie.js') }}
{{ HTML::script('bower_components/FourBoxes/js/boxesFx.js') }}

@yield('script')
</body>
</html>