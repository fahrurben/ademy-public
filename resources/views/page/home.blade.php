@extends('layout.app')

@section('title')
Home
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @guest
            <div class="login-wrapper d-flex flex-justify-center">
                <div class="panel panel-default" style="width: 500px;">
                    <div class="panel-heading">
                        Login
                    </div>
                    <div class="panel-body">
                        @php
                            $email = old('email');
                        @endphp
                        {{ Form::open(['url' => route('login')]) }}
                        {{ Form::textInput('email', old('email'), 'Email',
                            ['required' => true], $errors->first('email'))
                        }}
                        {{ Form::textInput('password', '', 'Password',
                            ['required' => true, 'type' => 'password'], $errors->first('password'))
                        }}
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary float-right">Login</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            @endguest
        </div>
    </div>
@endsection