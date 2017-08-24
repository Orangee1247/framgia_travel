@extends('admin.layouts.master')

@section('contents')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Provinces
                        <small>Add</small>
                    </h1>
                </div>
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{ route('provincePostAdd') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Province</label>
                            <input class="form-control" name="name" required autocomplete="off"
                                   placeholder="Please Enter Province"/>
                        </div>
                        <div class="form-group">
                            <label>Background URL</label>
                            <input class="form-control" name="bg_url" autocomplete="off"
                                   placeholder="Please Enter URL"/>
                        </div>
                        <div class="form-group">
                            <label>Image URL</label>
                            <input class="form-control" name="img_url" required autocomplete="off"
                                   placeholder="Please Enter URL"/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description" autocomplete="off"
                                      placeholder="Please Enter Description"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           onchange="document.getElementById('btnt').disabled = !this.checked"/>
                                    Are you sure to add this province
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="btn" id="btnt" disabled>Add</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
