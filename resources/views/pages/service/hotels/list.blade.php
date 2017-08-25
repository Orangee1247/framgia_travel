@extends('layouts.master')

@section('header')
    @include('includes.header')
@endsection

@section('style')
    {{ HTML::style('css/serviceList.css') }}
@endsection

@section('content')
    <div id="wrapper">
        <div class="container">
            <div class="gallery text-center" id="wthree-gallery">
                <h3 class="agileits_head">{{$provinces->name}} Hotels</h3>
                <span class="w3-line"></span>
                <div class="row">
                    <form is="ajax-form" method="post" action="" id="search1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="inputSearch" type="text" size="40" placeholder="Find hotels"/>
                    </form>
                </div>
            </div>


            <div class="service-content">
                @foreach($hotels as $hotel)
                    <div class='list-card'>
                        {{--<div class='list-label'>NEW LAUNCH</div>--}}
                        <img alt='' src={{$hotel->profile_pic}}>
                        <div class='list-details'>
                            <div class='list-name'>
                                <a href="{{route('hotelPF', [$provinces->name, $hotel->name])}}">
                                    <strong>{{$hotel->name}}</strong>
                                </a>
                            </div>

                            <div class='list-location'>
                                <span class="fa fa-map-marker"></span>
                                {{$hotel->address}}
                            </div>

                            <div class='list-location'>
                                <span class="fa fa-phone"></span>
                                {{$hotel->phone}}
                            </div>

                            <div class='list-price'>{{$hotel->description}}</div>
                            <div class='list-bottom'>
                                <div class='list-bottom-section'>
                                    <span>{{$hotel->expected_price}} đ</span>
                                    <span>Avg Price</span>
                                </div>
                                <div class='list-bottom-section'>
                                    <span>{{$hotel->rate_average}} /5</span>
                                    <span>Rating</span>
                                </div>
                                <div class='list-bottom-section'>
                                    <span>{{$hotel->comment}}</span>
                                    <span>Comment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
