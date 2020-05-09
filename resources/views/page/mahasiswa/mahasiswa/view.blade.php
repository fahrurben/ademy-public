@extends('layout.ajax')

@section('content')
    <div class="row">
        @php
            $tahunAjaranMasuk = $mahasiswa->getTahunAjaranMasuk();
            $tahunAjaranString = ($tahunAjaranMasuk->getTipe() == 1 ? 'Ganjil' : 'Genap') .' : '.$tahunAjaranMasuk->getTahunAwal().' - '.$tahunAjaranMasuk->getTahunAkhir()
        @endphp
        <div class="col-md-12">
            {{ Form::viewField('Nim', $mahasiswa->getNim()) }}
            {{ Form::viewField('No ID', $mahasiswa->getNoId()) }}
            {{ Form::viewField('Nama Depan', $mahasiswa->getNamaDepan()) }}
            {{ Form::viewField('Nama Belakang', $mahasiswa->getNamaBelakang()) }}
            {{ Form::viewField('Nama Lengkap', $mahasiswa->getNamaLengkap()) }}
            {{ Form::viewField('Tempat Lahir', $mahasiswa->getTempatLahir()) }}
            {{ Form::viewField('Tanggal Lahir', $mahasiswa->getTanggalLahir()->format(Constant::LOCAL_DATE_FORMAT)) }}
            {{ Form::viewField('Program Studi', $mahasiswa->getProdi()->getNama()) }}
            {{ Form::viewField('Tahun Ajaran Masuk', $tahunAjaranString) }}
            {{ Form::viewField('Semester', $mahasiswa->getSemester()) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection