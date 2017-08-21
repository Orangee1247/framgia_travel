@extends('layouts.master')

@section('style')
    {{ HTML::style('bower_components/AdminLTE/plugins/select2/select2.min.css') }}
    {{ HTML::style('bower_components/AdminLTE/plugins/datepicker/datepicker3.css') }}
    {{ HTML::style('bower_components/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css') }}
    {{ HTML::style('css/requestTour.css') }}
@endsection


@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="container">
        <div class="w3agile-about-section-head text-center">
            <h2>About Tour Request</h2>
            <span></span>
        </div>
        <div class="centeredDiv">
            <h3>Tell us about <b><em>{{ Auth::user()->name }}</em></b> desired tour requirements</h3>
            <hr>
            <form action="{{ route('requestPost') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Tour Name</label> &nbsp;
                    <i class="fa fa-commenting-o"></i>
                    <input class="form-control" name="name" required autocomplete="off"
                           placeholder="Please Enter Tour Name"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Budget</label> &nbsp;
                            <i class="fa fa-money"></i>
                            <input type="number" min="0" class="form-control" name="budget" autocomplete="off"
                                   placeholder="$$$"/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group spinner">
                            <label>How many Days</label> &nbsp;
                            <i class="fa fa-sun-o"></i>
                            <input id="days" type="text" class="form-control" name="days" autocomplete="off"
                                   value="0"/>
                            <div class="input-group-btn-vertical">
                                <button class="btn btn-default" type="button" id="dayup"><i class="fa fa-caret-up"></i>
                                </button>
                                <button class="btn btn-default" type="button" id="daydown"><i
                                            class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group spinner">
                            <label>How many Nights</label> &nbsp;
                            <i class="fa fa-moon-o"></i>
                            <input id="nights" type="text" class="form-control" name="nights" autocomplete="off"
                                   value="0"/>
                            <div class="input-group-btn-vertical">
                                <button class="btn btn-default" type="button" id="nightup"><i
                                            class="fa fa-caret-up"></i></button>
                                <button class="btn btn-default" type="button" id="nightdown"><i
                                            class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Visiting provinces</label> &nbsp;
                    <i class="fa fa-location-arrow"></i>
                    <select name="proChoice" class="form-control select2" multiple="multiple">
                        @foreach($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group date">
                            <label>Date</label> &nbsp;
                            <i class="fa fa-calendar"></i>
                            <input name="dateStart" type="text" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <label>Time</label> &nbsp;
                                <i class="fa fa-clock-o"></i>
                                <div class="form-group">
                                    <input name="timeStart" type="text" class="form-control timepicker">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label> &nbsp;
                    <i class="fa fa-pencil"></i>
                    <textarea class="form-control" rows="3" name="description" autocomplete="off"
                              placeholder="Please Enter Description"></textarea>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"
                                   onchange="document.getElementById('btnt').disabled = !this.checked"/>
                            I will agree to Framgia Trip <a href="#">Term & Condition</a>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="btn" id="btnt" disabled>Create</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('script')
    {{ HTML::script('bower_components/AdminLTE/plugins/select2/select2.full.js') }}
    {{ HTML::script('bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js') }}
    {{ HTML::script('bower_components/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js') }}
    <script>
        (function ($) {
            $("#dayup").on("click", function () {
                $("#days").val(parseInt($("#days").val(), 10) + 1);
            });
            $("#daydown").on("click", function () {
                if ($("#days").val() > 0)
                    $("#days").val(parseInt($("#days").val(), 10) - 1);
            });
            $("#nightup").on("click", function () {
                $("#nights").val(parseInt($("#nights").val(), 10) + 1);
            });
            $("#nightdown").on("click", function () {
                if ($("#nights").val() > 0)
                    $("#nights").val(parseInt($("#nights").val(), 10) - 1);
            });
            $(".select2").select2();
            $(".timepicker").timepicker({
                showInputs: false
            });
            $('#datepicker').datepicker({
                autoclose: true
            });
        })(jQuery);
    </script>
@endsection
