@extends('layout.app')

@section('title')
    @lang('Mata Kuliah')
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary btn-circle btn-sm showCreateModal">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('content')
    <div id="gridWrapper">
        {!! $grid !!}
    </div>
@endsection