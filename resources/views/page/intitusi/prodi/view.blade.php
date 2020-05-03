@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::viewField('Fakultas', $prodi->getFakultas()->getNama()) }}
            {{ Form::viewField('Kode', $prodi->getKode()) }}
            {{ Form::viewField('Nama', $prodi->getNama()) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection