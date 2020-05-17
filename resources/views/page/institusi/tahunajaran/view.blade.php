@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::viewField('Tipe', $tahunAjaran->getTipeString()) }}
            {{ Form::viewField('Tahun Awal', $tahunAjaran->getTahunAwal()) }}
            {{ Form::viewField('Tahun Akhir', $tahunAjaran->getTahunAkhir()) }}
            {{ Form::viewField('Tanggal Pendaftaran Mulai', $tahunAjaran->getTanggalPendaftaranMulai()->format(Constant::LOCAL_DATE_FORMAT)) }}
            {{ Form::viewField('Tanggal Pendaftaran Akhir', $tahunAjaran->getTanggalPendaftaranAkhir()->format(Constant::LOCAL_DATE_FORMAT)) }}
            {{ Form::viewField('Tanggal Aktif', $tahunAjaran->getTanggalAktif()->format(Constant::LOCAL_DATE_FORMAT)) }}
            {{ Form::viewField('Tanggal Selesai', $tahunAjaran->getTanggalSelesai()->format(Constant::LOCAL_DATE_FORMAT)) }}
            {{ Form::viewField('Status', $tahunAjaran->getStatusString()) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection