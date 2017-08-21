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
                    <h1 class="heading">{{$provinces->name}}</h1>
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


                        <div class="nav-link">
                            <ul class="service-link">
                                <li>
                                    <button class="button">Hotels ({{$provinces->hotel}})
                                        <a href="{{route('hotels', $provinces->name)}}"></a>
                                    </button>
                                </li>
                                <li>
                                    <div class="button">Restaurants ({{$provinces->restaurant}})
                                        <a href="{{route('restaurants', $provinces->name)}}"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="button">Things to do ({{$provinces->amusement}})
                                        <a href="{{route('activities', $provinces->name)}}"></a>
                                    </div>
                                </li>
                            </ul>
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