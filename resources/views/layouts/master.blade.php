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

{{ HTML::script('bower_components/jquery/dist/jquery.min.js') }}
{{ HTML::script('bower_components/vue/dist/vue.min.js') }}
{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ HTML::script('bower_components/FourBoxes/js/modernizr.custom.js') }}
{{ HTML::script('bower_components/FourBoxes/js/classie.js') }}
{{ HTML::script('bower_components/FourBoxes/js/boxesFx.js') }}
<script>
    $(document).ready(function () {
        $('#logout-1').on('click', function () {
            $('#logout-form').submit();
        });
    });
</script>

@yield('script')

</body>
</html>
