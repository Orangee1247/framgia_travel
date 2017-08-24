@extends('admin.layouts.master')

@section('contents')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><b>Provinces Table</b></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Province</th>
                            <th>Description</th>
                            <th>BG URL</th>
                            <th>IMG URL</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($provinces as $province)
                            <tr>
                                <td>{{$province->id}}</td>
                                <td>{{$province->name}}</td>
                                <td>{{$province->description}}</td>
                                <td>{{$province->bg_url}}</td>
                                <td>{{$province->img_url}}</td>
                                <td><a href="{{ route('provinceDelete', $province->id) }}" title="Delete"><i
                                                class="fa fa-fw fa-ban fa-pull-left"></i></a>
                                    <a href="{{ route('provinceGetEdit', $province->id) }}"><i
                                                class="fa fa-fw fa-edit fa-pull-right" title="Edit"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
