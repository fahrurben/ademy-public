@extends('layout.app')

@section('title')
    @lang('Fakultas')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Create
                </div>
                <div class="panel-body">
                    @php
                        $name = old('nama');
                        $kode = old('kode');
                    @endphp
                    {{ Form::open(['url' => route('fakultas.create')]) }}
                    {{ Form::textInput('nama', old('nama'), 'Nama',
                        ['required' => true], $errors->first('nama'))
                    }}
                    {{ Form::textInput('kode', old('kode'), 'Kode',
                        ['required' => true], $errors->first('kode'))
                    }}
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                            <a href="{{ route('fakultas') }}" class="btn btn-light float-right mr-1">Cancel</a>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

        </div>
    </div>
@endsection