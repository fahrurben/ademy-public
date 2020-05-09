@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['url' => route('fakultas.update', ['id' => $fakultas->getId()]), 'class' => 'ajax-form']) }}
            {{ Form::textInput('nama', isset($fakultas) ? $fakultas->getNama() : '', 'Nama',
                ['required' => true], $errors->first('nama'))
            }}
            {{ Form::textInput('kode', isset($fakultas) ? $fakultas->getKode() : '', 'Kode',
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