@extends('layout.app')

@php
/** @var Domain\Institusi\TahunAjaran $tahunAjaran */
@endphp
@section('title')
    @lang('Kelas TA: ')
    {{ $tahunAjaran->getTipeString() . ' ' . $tahunAjaran->getTahunAwal() . ' - ' . $tahunAjaran->getTahunAkhir()}}
    <a href="{{ route('kelasta.create', ['id' => $tahunAjaran->getId()]) }}" class="btn btn-primary btn-circle btn-sm showCreateModal">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('content')
    <div id="gridWrapper">

    </div>
@endsection