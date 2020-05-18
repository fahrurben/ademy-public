@extends('layout.ajax')

@section('content')
    @php
        /**  @var Domain\Institusi\TahunAjaran $tahunAjaran */
        /**  @var Domain\TahunAjaran\KelasTA $kelas */
        $tahunAjaranName = $tahunAjaran->getTipeString() . ' ' . $tahunAjaran->getTahunAwal() . ' - ' . $tahunAjaran->getTahunAkhir();
    @endphp
    <div class="row">
        <div class="col-md-12">
            {{ Form::viewField('Tahun Ajaran', $tahunAjaranName) }}
            {{ Form::viewField('Program Studi', $kelas->getProdi()->getNama()) }}
            {{ Form::viewField('Mata Kuliah', $kelas->getMataKuliah()->getNama()) }}
            {{ Form::viewField('Dosen', $kelas->getDosen()->getNamaLengkap()) }}
            {{ Form::viewField('Asisten', ($kelas->getAsisten() !== null ? $kelas->getAsisten()->getNamaLengkap() : '')) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection