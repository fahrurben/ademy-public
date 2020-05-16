@extends('layout.app')

@php
/** @var Domain\Institusi\TahunAjaran $tahunAjaran */
@endphp
@section('title')
    @lang('Kelas Tahun Ajaran')

    <!-- Single button -->
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            {{ $tahunAjaran->getTipeString() . ' ' . $tahunAjaran->getTahunAwal() . ' - ' . $tahunAjaran->getTahunAkhir()}} <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            @foreach ($tahunAjaranOptions as $ta)
                <li><a href="{{ route('kelasta', ['id' => $ta->getId()]) }}">{{ $ta->getTipeString() . ' ' . $ta->getTahunAwal() . ' - ' . $ta->getTahunAkhir()}}</a></li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('kelasta.create', ['id' => $tahunAjaran->getId()]) }}" class="btn btn-primary btn-circle btn-sm showCreateModal">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('content')
    <div id="gridWrapper">
        {!! $grid !!}
    </div>
@endsection