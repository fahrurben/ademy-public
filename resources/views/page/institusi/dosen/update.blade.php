@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
            @endphp
            {{ Form::open(['url' => route('dosen.update', ['id' => $dosen->getId()]), 'class' => 'ajax-form']) }}
            {{ Form::textInput('nid', $dosen->getNid(), 'NID',
                ['required' => true], $errors->first('nid'))
            }}
            {{ Form::textInput('noId', $dosen->getNoId(), 'No ID (KTP)',
                [], $errors->first('noId'))
            }}
            {{ Form::textInput('namaDepan', $dosen->getNamaDepan(), 'Nama Depan',
                ['required' => true], $errors->first('namaDepan'))
            }}
            {{ Form::textInput('namaBelakang', $dosen->getNamaBelakang(), 'Nama Belakang',
                ['required' => true], $errors->first('namaBelakang'))
            }}
            {{ Form::textInput('namaLengkap', $dosen->getNamaLengkap(), 'Nama Lengkap',
                ['required' => true], $errors->first('namaLengkap'))
            }}
            {{ Form::textInput('tempatLahir', $dosen->getTempatLahir(), 'Tempat Lahir',
                ['required' => true], $errors->first('tempatLahir'))
            }}
            {{ Form::datePicker('tanggalLahir', $dosen->getTanggalLahir()->format(Constant::LOCAL_DATE_FORMAT), 'Tanggal Lahir',
                ['id' => 'datepicker_tanggal_lahir', 'required' => true], $errors->first('tanggalLahir'))
            }}
            {{ Form::selectBox('fakultasId', $fakultasOptions,
                $dosen->getFakultas()->getId(), 'Fakultas', ['required' => true], $errors->first('fakultasId'))
            }}
            {{ Form::selectBox('jabatan', $jabatanOptions,
                $dosen->getJabatan(), 'Jabatan', ['required' => true], $errors->first('jabatan'))
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