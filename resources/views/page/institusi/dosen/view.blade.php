@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::viewField('Nid', $dosen->getNid()) }}
            {{ Form::viewField('No ID', $dosen->getNoId()) }}
            {{ Form::viewField('Nama Depan', $dosen->getNamaDepan()) }}
            {{ Form::viewField('Nama Belakang', $dosen->getNamaBelakang()) }}
            {{ Form::viewField('Nama Lengkap', $dosen->getNamaLengkap()) }}
            {{ Form::viewField('Tempat Lahir', $dosen->getTempatLahir()) }}
            {{ Form::viewField('Tanggal Lahir', $dosen->getTanggalLahir()->format(Constant::LOCAL_DATE_FORMAT)) }}
            {{ Form::viewField('Fakultas', $dosen->getFakultas()->getNama()) }}
            {{ Form::viewField('Jabatan', $dosen->getJabatanLabel()) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection