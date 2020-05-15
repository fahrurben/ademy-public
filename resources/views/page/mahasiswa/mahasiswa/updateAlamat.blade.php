@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['url' => route('mahasiswa.updateAlamat', ['id' => $mahasiswa->getId()]), 'class' => 'ajax-form']) }}
            {{ Form::textInput('alamat', $alamat->getAlamat(), 'Alamat',
                ['required' => true], $errors->first('alamat'))
            }}
            {{ Form::selectBox('provinsi', $provinsiOptions,
                $alamat->getProvinsi(), 'Provinse', ['required' => true], $errors->first('provinsi'))
            }}
            {{ Form::selectBox('kota', $kotaOptions,
                $alamat->getKota(), 'Kota', ['required' => true], $errors->first('kota'))
            }}
            {{ Form::textInput('kodePos', $alamat->getKodePos(), 'Kode Pos',
                [], $errors->first('kodePos'))
            }}
            {{ Form::textInput('telepon', $alamat->getTelepon(), 'Telepon',
                ['required' => true], $errors->first('telepon'))
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