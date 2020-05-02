@extends('layout.app')

@section('title')
    @lang('Fakultas')
    <a href="{{ route('fakultas.create') }}" class="btn btn-primary btn-circle btn-sm">
        <i class="fas fa-plus"></i>
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <thead>
                        <tr>
                            <th scope="col">@lang('Nama')</th>
                            <th scope="col">@lang('Kode')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($arrFakultas as $fakultas)
                            <tr>
                                <td>{{ $fakultas->getNama() }}</td>
                                <td>{{ $fakultas->getKode() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection