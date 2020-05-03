@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::viewField('Kode', $fakultas->getKode()) }}
            {{ Form::viewField('Nama', $fakultas->getNama()) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection