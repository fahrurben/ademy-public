@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::open([
                'id' => 'formUpdateAlamat',
                'url' => route('mahasiswa.updateAlamat', ['id' => $mahasiswa->getId()]),
                'data-pjax-target' => 'section-alamat',
                'class' => 'ajax-form'])
            }}
            {{ Form::textInput('alamat', $alamat->getAlamat(), 'Alamat',
                ['required' => true], $errors->first('alamat'))
            }}
            {{ Form::selectBox('provinsi', $provinsiOptions,
                $alamat->getProvinsi(), 'Provinsi', ['id' => 'selectProvinsi', 'required' => true], $errors->first('provinsi'))
            }}
            {{ Form::selectBox('kota', $kotaOptions,
                $alamat->getKota(), 'Kota', ['id' => 'selectKota', 'required' => true], $errors->first('kota'))
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