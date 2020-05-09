@extends('layout.app')

@section('title')
    @lang('Dosen')
    <a href="{{ route('dosen.create') }}" class="btn btn-primary btn-circle btn-sm showCreateModal">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('content')
    <div id="gridWrapper">
        {!! $grid !!}
    </div>
@endsection