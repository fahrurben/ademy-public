@extends('layout.app')

@section('title')
    @lang('Fakultas')
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary btn-circle btn-sm showCreateModal">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('content')
    <div id="gridWrapper">
        {!! $grid !!}
    </div>
@endsection