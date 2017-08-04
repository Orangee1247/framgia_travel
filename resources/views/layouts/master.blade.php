<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
@yield('style')
</head>
<body>

@yield('slide')

@yield('header')

@yield('content')

@include('includes.footer')

{{ HTML::script('bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ HTML::script('bower_components/FourBoxes/js/modernizr.custom.js') }}
{{ HTML::script('bower_components/FourBoxes/js/classie.js') }}
{{ HTML::script('bower_components/FourBoxes/js/boxesFx.js') }}

@yield('script')

</body>
</html>
