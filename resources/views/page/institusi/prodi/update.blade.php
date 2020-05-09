@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['url' => route('prodi.update', ['id' => $prodi->getId()]), 'class' => 'ajax-form']) }}
            {{ Form::selectBox('fakultas_id', $arrFakultas,
                $prodi->getFakultas()->getId(), 'Fakultas', ['required' => true], $errors->first('fakultas_id'))
            }}
            {{ Form::textInput('nama', $prodi->getNama(), 'Nama',
                ['required' => true], $errors->first('nama'))
            }}
            {{ Form::textInput('kode',$prodi->getKode(), 'Kode',
                ['required' => true], $errors->first('kode'))
            }}
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection