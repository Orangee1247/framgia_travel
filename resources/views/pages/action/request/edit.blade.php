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
    <div class="page-wrap">
        <div class="container">
            <div class="w3agile-about-section-head text-center">
                <h2>About Tour Request</h2>
                <span></span>
            </div>
            <div class="centeredDiv">
                <h3>Tell us about your tour requirements</h3>
                <hr>
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Tour Name</label> &nbsp;
                        <i class="fa fa-commenting-o"></i>
                        <input class="form-control" name="title" required autocomplete="off"
                               value="{{ $plann->title }}"/>
                    </div>
                    <div class="form-group">
                        <label>Visiting provinces</label> &nbsp;
                        <i class="fa fa-location-arrow"></i>
                        @php
                            $choiceSArr = [];
                            foreach ($choices as $choice) {
                                $choiceSArr[] = $choice->province_id;
                            }
                        @endphp
                        <select name="proChoice[]" class="form-control select2" id="mySelectBox" multiple required>
                            @foreach($provinces as $province)
                                <option value="{{ $province->id }}"
                                        {{ in_array($province->id, $choiceSArr) ? 'selected' : '' }}
                                >{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 date">
                            <label>From</label> &nbsp;
                            <i class="fa fa-calendar"></i>
                            <input name="time_from" type="text" class="form-control" id="datepicker"
                                   value="{{ $plann->time_from }}">
                        </div>
                        <div class="form-group col-md-6 date">
                            <label>To</label> &nbsp;
                            <i class="fa fa-calendar"></i>
                            <input name="time_to" type="text" class="form-control" id="datepicker2"
                                   value="{{ $plann->time_to }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label> &nbsp;
                        <i class="fa fa-pencil"></i>
                        <textarea class="form-control" rows="3" name="description"
                                  autocomplete="off">{{ $plann->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Place</label>
                        <i class="fa fa-location-arrow"></i> &nbsp;
                        <select name="choice" class="form-group select2" id="detail" required>
                            @foreach($provinces as $province)
                                @if(in_array($province->id, $choiceSArr))
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div id="expand"></div>
                    <button type="button" id="add"><i class="fa fa-plus"></i></button>
                    <button type="button" id="minus"><i class="fa fa-minus"></i></button>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"
                                       onchange="document.getElementById('btnt').disabled = !this.checked"/>
                                I will agree to Framgia Trip <a href="#">Term & Condition</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="btn" id="btnt" disabled>Edit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a id="delete" class="pull-right" href="{{ route('requestDelete', $plann->id) }}">DELETE THIS
                        PLAN</a>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
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
            $(".select2").select2();
            $('#datepicker').datepicker({
                autoclose: true
            });
            $('#datepicker2').datepicker({
                autoclose: true
            });
        })(jQuery);

        $("#mySelectBox").change(function () {
            var province = [];
            $.each($("#mySelectBox option:selected"), function () {
                province.push({
                    id: $(this).val(),
                    name: $(this).text()
                });
            });
            var change = '';
            for (i = 0; i < province.length; i++) {
                change += '<option value = "' + province[i].id + '"> ' + province[i].name + '<option>';
            }
            $("#detail").html(change);
        });
        var number = 1;
        $("#add").click(function () {
            var changes = '';
            changes += '<div class="form-group" id="' + number + '"><h1>' + number + '</h1>' + '</div>';
            number++;
            $("#expand").append(changes);
        })
        $("#minus").click(function () {
            $("#expand > div").last().remove();
            number = (number > 1) ? number - 1 : 1;
        })
    </script>
@endsection
