@extends('layouts.master')

@section('style')
    {{  HTML::style('css/hotelPF.css', ['rel' => 'stylesheet'])  }}
    {{  HTML::style('css/ninja-slider.css', ['rel' => 'stylesheet'])  }}
    {{  HTML::style('css/thumbnail-slider.css', ['rel' => 'stylesheet'])  }}
    {{  HTML::style('bower_components/bootstrap-star-rating/css/star-rating.min.css', ['rel' => 'stylesheet'])  }}
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <?php
    $star1 = 0;
    $star2 = 0;
    $star3 = 0;
    $star4 = 0;
    $star5 = 0;

    foreach ($comments as $comment) {
        if ($comment->rate_point <= 1) $star1 += 1;
        else if ($comment->rate_point <= 2) $star2 += 1;
        else if ($comment->rate_point <= 3) $star3 += 1;
        else if ($comment->rate_point <= 4) $star4 += 1;
        else if ($comment->rate_point <= 5) $star5 += 1;
    }

    switch ($type) {
        case 1:
            $route_name = 'hotels';
            $route_namePF = 'hotelPF';
            $route_text = 'Hotels';
            break;

        case 2:
            $route_name = 'restaurants';
            $route_namePF = 'restaurantPF';
            $route_text = 'Restaurants';
            break;

        case 3:
            $route_name = 'activities';
            $route_namePF = 'activityPF';
            $route_text = 'Activities';
            break;

        default:
            $route_name = '';
            $route_namePF = '';
            $route_text = '';
            break;
    }
    ?>

    <div id="wrapper">
        <div id="link">
            <div class="box1">
                <a href={{ route('provinceList') }}><h4>Province</h4></a>
            </div>
            <span class="fa  fa-chevron-right"></span>

            <div class="box1">
                <a href={{ route('provincePF',$province) }}><h4>{{ $province }}</h4></a>
            </div>
            <span class="fa  fa-chevron-right"></span>

            <div class="box1">
                    <a href={{ route($route_name, [$province, $type]) }}><h4>{{ $route_text }}</h4></a>
            </div>

            <span class="fa  fa-chevron-right"></span>

            <div class="box1">
                    <a href={{ route($route_namePF, [$province, $type, $hotel->name]) }}><h4>{{ $hotel->name }}</h4></a>
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
                                           href={{ $image->img_url }}></a></li>
                                @endforeach
                            </ul>
                            <div class="fs-icon" title="Expand/Close"></div>
                        </div>
                        <div id="thumbnail-slider">
                            <div class="inner">
                                <ul>
                                    @foreach($images as $image)
                                        <li><a class="thumb"
                                               href={{ $image->img_url }}></a></li>
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
                        <h2><strong>{{ $hotel->name }}</strong></h2>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-map-marker"></span>
                            <h5><strong>ADDRESS</strong></h5>
                        </div>

                        <div class="text">
                            {{ $hotel->address }}
                        </div>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-phone"></span>
                            <h5><strong>CONTACT</strong></h5>
                        </div>

                        <div class="text">
                            {{ $hotel->phone }}
                        </div>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-dollar"></span>
                            <h5><strong>AVG. PRICE</strong></h5>
                        </div>

                        <div class="text">
                            {{ $hotel->expected_price }} $
                        </div>
                    </div>

                    <div class="line">
                        <div class="title">
                            <span class="fa fa-info-circle"></span>
                            <h5><strong>ABOUT US</strong></h5>
                        </div>

                        <div class="text" id="about">
                            {{ $hotel->description }}
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
                        <h2 class="bold padding-bottom-7">{{ round($hotel->rate_average,2) }}
                            <small>/ 5</small>
                        </h2>
                        <?php
                        $value = round($hotel->rate_average * 2) / 2
                        ?>
                        <input id="input-show" type="text" class="rating" value="{{ $value }}"
                               data-readonly="true" data-size="md" data-step="0.5" title="">
                    </div>
                </div>
                <div class="col-sm-3" id="rate-bd">
                    <h4>Rating breakdown</h4>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">4-5 <span
                                        class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-success" role="progressbar"
                                     aria-valuenow="5"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>

                        <div class="pull-right bd-value" style="margin-left:10px;">{{ $star5 }}</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">3-4 <span
                                        class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-primary" role="progressbar"
                                     aria-valuenow="4"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right bd-value" style="margin-left:10px;">{{ $star4 }}</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">2-3 <span
                                        class="glyphicon glyphicon-star"></span>
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
                        <div class="pull-right bd-value" style="margin-left:10px;">{{ $star3 }}</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">1-2 <span
                                        class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-warning" role="progressbar"
                                     aria-valuenow="2"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right bd-value" style="margin-left:10px;">{{ $star2 }}</div>
                    </div>
                    <div class="pull-left">
                        <div class="pull-left" style="width:35px; line-height:1;">
                            <div style="height:9px; margin:5px 0;">0-1 <span
                                        class="glyphicon glyphicon-star"></span>
                            </div>
                        </div>
                        <div class="pull-left" style="width:180px;">
                            <div class="progress" style="height:9px; margin:8px 0;">
                                <div class="progress-bar progress-bar-danger" role="progressbar"
                                     aria-valuenow="1"
                                     aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right bd-value" style="margin-left:10px;">{{ $star1 }}</div>
                    </div>
                </div>
            </div>

            <div class="row" id="comment-box">
                <div class="col-md-6">
                    <div class="well well-sm">
                        <div class="text-right">
                            <label id="label">What do you think about our services ?</label>
                            <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Review
                                Us</a>
                        </div>

                        <div class="row" id="post-review-box">
                            <div class="col-md-12">

                                <form accept-charset="UTF-8"
                                      action={{ route('comment',[$province, $type, $hotel->name]) }} method="POST">
                                    <input type="hidden" name="_token" value="{{  csrf_token()  }}">

                                    <textarea class="form-control animated" cols="50"
                                              id="new-review" name="title" placeholder="Title"
                                              rows="1" required></textarea>

                                    <textarea class="form-control animated" cols="50"
                                              id="new-review" name="content"
                                              placeholder="Enter your review here..."
                                              rows="3" required></textarea>

                                    <div class="text-right">

                                        <input id="input-send" type="text" class="rating" data-min="0"
                                               data-max="5"
                                               data-size="xs" data-step=0.5 value="0"
                                               title="">
                                        <input type="hidden" id="submit-rate" name="rate_point">

                                        <a class="btn btn-danger btn-sm" href="#" id="close-review-box">
                                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                        <button class="btn btn-success btn-lg" type="submit">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                @foreach($comments as $comment)
                    @foreach($users as $user)
                        @if($comment->user_id == $user->user_id)
                            <div class="col-sm-7" id="sm7-comment">
                                <hr/>
                                <div class="review-block">
                                    @if(Auth::user())
                                        @if(Auth::user()->id == $comment->user_id)
                                            <a class="btn delete" data-toggle="confirmation"
                                               data-href="{{ route('comment.delete',[$province, $type, $hotel->name, $comment->id]) }}"></a>
                                            <button type="sub" class="edit1"></button>
                                        @endif()
                                    @endif

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src='/images/{{ $user->profile_pic }}' class="img-rounded">
                                            <div class="review-block-name"><a href="#">{{ $user->name }}</a></div>
                                            <div class="review-block-date">{{ $comment->created_at }}</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <form accept-charset="UTF-8"
                                                  action="{{ route('comment.edit',[$province, $type, $hotel->name, $comment->id]) }}"
                                                  method="POST">
                                                <input type="hidden" name="_token" value="{{  csrf_token()  }}">

                                                <input id="input" type="text" class="rating"
                                                       value="{{ $comment->rate_point }}"
                                                       data-readonly="true" data-max="5" data-min="0"
                                                       data-step="0.5"
                                                       size="sm" title="">

                                                <div class="review-block-title">
                                                <textarea class="edit" id="edit-title" cols="80"
                                                          name="title" rows="1" readonly="true"
                                                          data-prevvalue="{{ $comment->title }}"
                                                          required>{{ $comment->title }}</textarea>
                                                </div>
                                                <div class="review-block-description">
                                                <textarea class="edit" id="edit-content" cols="100"
                                                          name="content" rows="3" readonly="true"
                                                          data-prevvalue="{{ $comment->content }}"
                                                          required>{{ $comment->content }}</textarea>
                                                </div>


                                                <div class="btn-div">
                                                    <button class="btn btn-success btn-lg" id="save"
                                                            type="submit">Save
                                                    </button>
                                                    <a class="btn btn-danger btn-sm" id="close-comment-box">
                                                        <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                                </div>
                                            </form>
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
    {{  HTML::script('bower_components/bootstrap-confirmation/bootstrap-confirmation.js', ['type' => 'text/javascript'])  }}
    {{  HTML::script('bower_components/bootstrap/js/tooltip.js', ['type' => 'text/javascript'])  }}
    {{  HTML::script('js/star-rating.js', ['type' => 'text/javascript'])  }}
    {{  HTML::script('js/ninja-slider.js', ['type' => 'text/javascript'])  }}
    {{  HTML::script('js/thumbnail-slider.js', ['type' => 'text/javascript'])  }}
    {{  HTML::script('js/hotelPF.js', ['type' => 'text/javascript'])  }}
@endsection
