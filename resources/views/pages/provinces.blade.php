@extends('layouts.master')

@section('style')
    {{ HTML::style('css/provinces.css', ['rel' => 'stylesheet']) }}
@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="gallery text-center" id="wthree-gallery">
        <div class="container">
            <h3 class="agileits_head">Choose your place to go</h3>
            <span class="w3-line"></span>
            <div class="row">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="  search-query form-control"
                               placeholder=" eg: Ha Noi, Da Nang, TP HCM"/>
                        <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                    </div>
                </div>
            </div>
            <div class="w3l_gallery_grids">
                <div class="bs-example bs-example-tabs wthree_example_tab" role="tabpanel"
                     data-example-id="togglable-tabs">
                    <div class="w3l_gallery_grids1">
                        @foreach($provinces as $province)
                            <div class="col-md-4 w3l_gallery_grid">
                                <div class="agileinfo_gallery_grid">
                                    <a href={{ route('provincePF', $province->name) }}>
                                        <div class="hovereffect">
                                            <img src="{{url($province->img_url)}}" alt=" " class="img-responsive"/>
                                            <div class="overlay">
                                                <p class="info">{{$province->name}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
