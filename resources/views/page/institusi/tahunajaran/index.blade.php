@extends('layout.app')

@section('title')
    @lang('Tahun Ajaran')
    <a href="{{ route('tahunajaran.create') }}" class="btn btn-primary btn-circle btn-sm showCreateModal">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('content')
    <div id="gridWrapper">
        {!! $grid !!}
    </div>
@endsection