@extends('layout.ajax')

@section('content')
    @php /** @var Domain\Institusi\MataKuliah $mataKuliah */ @endphp

    <div class="row">
        <div class="col-md-12">
            {{ Form::viewField('Nama', $mataKuliah->getNama()) }}
            {{ Form::viewField('Kode', $mataKuliah->getKode()) }}
            {{ Form::viewField('Tipe', Constant::MATAKULIAH_TYPE[$mataKuliah->getTipe()] ?? '') }}
            {{ Form::viewField('Program Studi', $mataKuliah->getProdi()->getNama()) }}
            {{ Form::viewField('Semester', $mataKuliah->getSemester()) }}
            {{ Form::viewField('Bobot', $mataKuliah->getBobot()) }}
            {{ Form::viewField('Deskripsi', $mataKuliah->getDeskripsi()) }}
            {{ Form::viewField('Status', Constant::STATUS_TYPE[$mataKuliah->getStatus()] ?? '') }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
        </div>
    </div>
@endsection