@extends('pages.service.layouts.master')

@section('style')
    {{ HTML::style('css/provinceList.css') }}
    <style>
        body {
            background-image: url(../images/{{$provinces->bg_url}});
        }
    </style>
@endsection

@section('content')
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

        <div id="service-content">

        </div>
    </div>
@endsection

@section('script')
    {{ HTML::script('bower_components/ajax-form/ajax-form.js') }}
    {{ HTML::script('bower_components/jquery-form/dist/jquery.form.min.js') }}
@endsection
