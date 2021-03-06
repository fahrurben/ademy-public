@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
                $name = old('nama');
                $kode = old('kode');
            @endphp
            {{ Form::open(['url' => route('prodi.create'), 'class' => 'ajax-form']) }}
            {{ Form::selectBox('fakultas_id', $arrFakultas,
                old('fakultas_id'), 'Fakultas', ['required' => true], $errors->first('fakultas_id'))
            }}
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