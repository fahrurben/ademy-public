@extends('layout.app')

@section('title')
Home
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @guest
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 500px;">
                    <div class="card-header">
                        <span class="card-title">Login</span>
                    </div>
                    <div class="card-body">
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
                            <div class="col-12">
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