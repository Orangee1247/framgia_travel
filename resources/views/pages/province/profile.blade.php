@extends('layouts.master')

@section('style')
    {{ HTML::style('css/provincePF.css', ['rel' => 'stylesheet']) }}
    {{ HTML::style('css/ninja-slider.css', ['rel' => 'stylesheet']) }}
    {{ HTML::style('css/thumbnail-slider.css', ['rel' => 'stylesheet']) }}
    <style>
        body {
            background-image: url(../images/{{$provinces->bg_url}});
        }
    </style>
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div id="wrapper">
        <div class="container" id="content">
            <div>
                <div class="container" id="tab-content">
                    <h1 class="heading">About {{$provinces->name}}</h1>

                    <div class="photo-wrapper">
                        <div class="photo">
                            <div id='ninja-slider'>
                                <div>
                                    <div class="slider-inner">
                                        <ul>
                                            @foreach($images as $image)
                                                <li><a class="ns-img"
                                                       href="../images/{{$image->img_url}}"></a></li>
                                            @endforeach
                                        </ul>
                                        <div class="fs-icon" title="Expand/Close"></div>
                                    </div>
                                    <div id="thumbnail-slider">
                                        <div class="inner">
                                            <ul>
                                                @foreach($images as $image)
                                                    <li><a class="thumb"
                                                           href="../images/{{$image->img_url}}"></a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overview">
                        <div class="navigation">
                            <div id="navbar">
                                <ul>
                                    <li>
                                        <a>
                                            <span class="text">Overview</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('hotels', [$provinces->name, 1])}}">
                                            <span class="text">Places to stay</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('restaurants', [$provinces->name, 2])}}">
                                            <span class="text">Where to eat</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('activities', [$provinces->name, 3])}}">
                                            <span class="text">Things to do</span>
                                            <span class="line -right"></span>
                                            <span class="line -top"></span>
                                            <span class="line -left"></span>
                                            <span class="line -bottom"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bio">
                            <p>{{$provinces->description}}</p>
                        </div>

                        <div class="trending">
                            <h4><strong>Travellers are talking about these hotels</strong></h4>

                            <div id="hotel">
                            </div>

                            <div id="restaurant">
                                <h4><strong>Top-rated {{$provinces->name}} Restaurants</strong></h4>
                            </div>

                            <div id="activity">
                                <h4><strong>Top-rated {{$provinces->name}} Things to Do</strong></h4>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{ HTML::script('js/ninja-slider.js', ['type' => 'text/javascript']) }}
    {{ HTML::script('js/thumbnail-slider.js', ['type' => 'text/javascript']) }}
@endsection