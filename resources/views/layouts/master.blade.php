<!DOCTYPE html>
<html lang="en">
<head>
    <title>Framgia Trip</title>
{{ HTML::style('bower_components/font-awesome/css/font-awesome.min.css', ['rel' => 'stylesheet', 'type' => 'text/css' ]) }}
{{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.css', ['rel' => 'stylesheet', 'type' => 'text/css' ]) }}
{{ HTML::style('css/style.css', ['rel' => 'stylesheet', 'type' => 'text/css' ]) }}
<!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Road trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //meta tags -->
    <!--fonts-->
    {{ HTML::style('bower_components/Railway/css/raleway.min.css'), array('rel' => 'stylesheet', 'type' => 'text/css' ) }}
    {{ HTML::style('bower_components/Open-sans/open-sans.css'), array('rel' => 'stylesheet', 'type' => 'text/css' ) }}
{{--    {{ HTML::style('//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese', array('rel' => 'stylesheet')) }}--}}
    <!--//fonts-->
    {{ HTML::style('bower_components/FourBoxes/css/component.css', array('rel' => 'stylesheet', 'type' => 'text/css' )) }}
    {{ HTML::style('css/colorbox.css', array('rel' => 'stylesheet')) }}
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<!-- slider -->
<div class="w3-slider">
    <div id="boxgallery" class="boxgallery" data-effect="effect-1">
        <div class="panel"><img src="images/4.jpg" alt="Image 1"/></div>
        <div class="panel"><img src="images/2.jpg" alt="Image 2"/></div>
        <div class="panel"><img src="images/3.jpg" alt="Image 3"/></div>
        <div class="panel"><img src="images/1.jpg" alt="Image 4"/></div>
    </div>
    <div class="w3layouts-header-title">
        <h2> {{ trans('label.we') }}</h2>
    </div>
</div><!-- /container -->
<!-- header -->
<header id="stickyribbon">
    <div class="container">
        <!-- navigation -->
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3-logo">
                    <img src="{{ asset('images/framgia_logo.png') }}"/>
                    <h1><a href="home">Framgia Trip</a></h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="/home">{{ trans('label.home') }}</a></li>
                    <li><a class="scroll" href="#w3-agile-about">About</a></li>
                    <li><a class="scroll" href="#agileits-specials">Specials</a></li>
                    <li><a class="scroll" href="#wthree-gallery">Gallery</a></li>
                    <li><a class="scroll" href="#agileinfo-news">News</a></li>
                    <li><a class="scroll" href="#w3-contact">Contact</a></li>
                    <!-- Authentication Links -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="nav-mini-wrapper">
        <!-- Authentication Links -->
        {{--<ul class="nav navbar-nav">--}}
        <ul class="nav-login">
            @if (Auth::guest())
                <li id="register">
                    <a href="{{ route('register') }}">
                        <img src="{{ asset('/images/register.png') }}"/>
                    </a>
                </li>

                <li id="login">
                    <a href="{{ route('login') }}">
                        <img src="{{ asset('/images/login.png') }}">
                    </a>
                </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('user.profile', [Auth::user()->id]) }}">{{ trans('label.profile') }}</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" id="logout-1">
                                {{trans('label.logout')}}
                            </a>

                            {!! Form::open(['role'=>'form','route'=> 'logout','method'=>'POST','id'=>'logout-form']) !!}
                            {{ csrf_field() }}
                            {!! Form::close() !!}
                        </li>

                    </ul>
                </li>
            @endif
        </ul>
    </div>
    <div class="clearfix"></div>
    <!-- //navigation -->
    <div id="wrap">
        {!! Form::open(['role' => 'form','autocomplete'=>'on']) !!}
        {!! Form::input('text','search',null,['id'=>'search', 'class'=>'form-control', 'placeholder'=>"where are you looking for"]) !!}
        {!! Form::input('submit', 'search_submit', "Rechercher", ['id'=>'search_submit']) !!}
        {!! Form::close() !!}
    </div>
</header>
<!-- //header -->
@yield('content')

<!-- footer-section -->
<footer>
    <div class="container">
        <div class="w3ls-icons">
            <a href="https://www.facebook.com/" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/" title="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
        <div class="copyright">
            <p>&copy; 2017 Framgia trip. All Rights Reserved | Design by <a href="http://google.com/"> WEABOO</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>
<!-- footer-section -->
{{ HTML::script('bower_components/jquery/dist/jquery.min.js', ['type' => 'text/javascript']) }}
{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{ HTML::script('bower_components/FourBoxes/js/modernizr.custom.js') }}
<!-- js required for banner slider -->
{{ HTML::script('bower_components/FourBoxes/js/classie.js') }}
{{ HTML::script('bower_components/FourBoxes/js/boxesFx.js') }}
<!-- //js required for banner slider -->
<script>
    new BoxesFx(document.getElementById('boxgallery'));
</script>
<!-- //slider -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#logout-1').on('click', function () {
            $('#logout-form').submit();
        });
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- start-smoth-scrolling -->
{{ HTML::script('js/move-top.js', ['type' => 'text/javascript']) }}
{{ HTML::script('js/easing.js', ['type' => 'text/javascript']) }}
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
<script type="text/javascript">
    $(function () {
        var stickyRibbonTop = $('#stickyribbon').offset().top;

        $(window).scroll(function () {
            if ($(window).scrollTop() > stickyRibbonTop) {
                $('#stickyribbon').css({position: 'fixed', top: '0px'});
            } else {
                $('#stickyribbon').css({position: 'static', top: '0px'});
            }
        });
    });
</script>
</body>
</html>