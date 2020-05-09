@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::viewField('Tipe', $tahunAjaran->getTipeString()) }}
            {{ Form::viewField('Tahun Awal', $tahunAjaran->getTahunAwal()) }}
            {{ Form::viewField('Tahun Akhir', $tahunAjaran->getTahunAkhir()) }}
            {{ Form::viewField('Status', $tahunAjaran->getStatusString()) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection