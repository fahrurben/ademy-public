@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
                $name = old('nama');
                $kode = old('kode');
            @endphp
            {{ Form::open(['url' => route('fakultas.create'), 'class' => 'ajax-form']) }}
            {{ Form::textInput('nama', old('nama'), 'Nama',
                ['required' => true], $errors->first('nama'))
            }}
            {{ Form::textInput('kode', old('kode'), 'Kode',
                ['required' => true], $errors->first('kode'))
            }}
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection