@extends('layouts.master')

@section('style')
    {{ HTML::style('css/hotelPF.css', ['rel' => 'stylesheet']) }}
    {{ HTML::style('css/ninja-slider.css', ['rel' => 'stylesheet']) }}
    {{ HTML::style('css/thumbnail-slider.css', ['rel' => 'stylesheet']) }}
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div id="wrapper">
        <div id="link">
            <div class="box1">
                <a href={{route('provinceList')}}><h4>Province</h4></a>
            </div>
            <span class="fa  fa-chevron-right"></span>

            <div class="box1">
                <a href={{route('provincePF',$province)}}><h4>{{$province}}</h4></a>
            </div>
            <span class="fa  fa-chevron-right"></span>

            <div class="box1">
                <a href={{route('hotels',$province)}}><h4>Hotels</h4></a>
            </div>
        </div>

        <div id="content">

            <div class="photo-wrapper">
                <div class="photo">
                    <div id='ninja-slider'>
                        <div class="slider-inner">
                            <ul>
                                @foreach($images as $image)
                                    <li><a class="ns-img"
                                           href={{$image->img_url}}></a></li>
                                @endforeach
                            </ul>
                            <div class="fs-icon" title="Expand/Close"></div>
                        </div>
                        <div id="thumbnail-slider">
                            <div class="inner">
                                <ul>
                                    @foreach($images as $image)
                                        <li><a class="thumb"
                                               href={{$image->img_url}}></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="line"></div>

            <div id="info">
                <div id="info-content">
                    <div id="header">
                        <h2><strong>{{$hotel->name}}</strong></h2>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-map-marker"></span>
                            <h5><strong>ADDRESS</strong></h5>
                        </div>

                        <div class="text">
                            {{$hotel->address}}
                        </div>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-phone"></span>
                            <h5><strong>CONTACT</strong></h5>
                        </div>

                        <div class="text">
                            {{$hotel->phone}}
                        </div>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-dollar"></span>
                            <h5><strong>AVG. PRICE</strong></h5>
                        </div>

                        <div class="text">
                            {{$hotel->expected_price}} $
                        </div>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-info-circle"></span>
                            <h5><strong>ABOUT US</strong></h5>
                        </div>

                        <div class="text" id="about">
                            {{$hotel->description}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="comment">
            <div class="row" id="rating">
                <div class="col-sm-3">
                    <div class="rating-block">
                        <h4>Average user rating</h4>
                        <h2 class="bold padding-bottom-7">4.3
                            <small>/ 5</small>
                        </h2>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4>Rating breakdown</h4>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">1</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">1</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">0</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">0</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right" style="margin-left:10px;">0</div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($comments as $comment)
                    @foreach($users as $user)
                        @if($comment->user_id == $user->id)
                            <div class="col-sm-7" id="sm7-comment">
                                <hr/>
                                <div class="review-block">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src='/images/{{$user->profile_pic}}' class="img-rounded">
                                            <div class="review-block-name"><a href="#">{{$user->name}}</a></div>
                                            <div class="review-block-date">{{$comment->created_at}}</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="review-block-rate">
                                                <button type="button" class="btn btn-warning btn-xs"
                                                        aria-label="Left Align">
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-xs"
                                                        aria-label="Left Align">
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-xs"
                                                        aria-label="Left Align">
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs"
                                                        aria-label="Left Align">
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs"
                                                        aria-label="Left Align">
                                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                            <div class="review-block-title">{{$comment->title}}</div>
                                            <div class="review-block-description">{{$comment->content}}</div>
                                        </div>
                                    </div>
                                    <hr/>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{ HTML::script('js/ninja-slider.js', ['type' => 'text/javascript']) }}
    {{ HTML::script('js/thumbnail-slider.js', ['type' => 'text/javascript']) }}
@endsection
