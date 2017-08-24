@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        {!! Form::open(['role' => 'form','class'=>'form-horizontal','method' =>'POST','route'=>'register']) !!}
                        {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            <div class="col-md-6">
                                {!! Form::input('text','name',old('name'),['id'=>'name','class'=>'form-control','autofocus'=>'true']) !!}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-4 control-label']) !!}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            <div class="col-md-6">
                                {!! Form::input('email','email',old('email'),['id'=>'email','class'=>'form-control','autofocus'=>'true']) !!}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            <div class="col-md-6">
                                {!! Form::input('password','password',null,['id'=>'password','class'=>'form-control']) !!}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password-confirm', 'Confirm Password', ['class' => 'col-md-4 control-label']) !!}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            <div class="col-md-6">
                                {!! Form::input('password','password_confirmation',null,['id'=>'password-confirm','class'=>'form-control']) !!}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
