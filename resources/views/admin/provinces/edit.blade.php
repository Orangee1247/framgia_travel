@extends('admin.layouts.master')

@section('contents')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Provinces
                        <small>Edit</small>
                    </h1>
                </div>
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Province</label>
                            <input class="form-control" name="name" required autocomplete="off"
                                   value="{{ $province->name }}"/>
                        </div>
                        <div class="form-group">
                            <label>Background URL</label>
                            <input class="form-control" name="bg_url" autocomplete="off"
                                   value="{{ $province->bg_url }}"/>
                        </div>
                        <div class="form-group">
                            <label>Image URL</label>
                            <input class="form-control" name="img_url" required autocomplete="off"
                                   value="{{ $province->img_url }}"/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" name="description" autocomplete="off">{{ $province->description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           onchange="document.getElementById('btnt').disabled = !this.checked"/>
                                    Are you sure to edit this province
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="btn" id="btnt" disabled>Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
