@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
            @endphp
            {{ Form::open(['url' => route('dosen.create'), 'class' => 'ajax-form']) }}
            {{ Form::textInput('nid', '', 'NID',
                ['required' => true], $errors->first('nid'))
            }}
            {{ Form::textInput('noId', '', 'No ID (KTP)',
                [], $errors->first('noId'))
            }}
            {{ Form::textInput('namaDepan', old('namaDepan'), 'Nama Depan',
                ['required' => true], $errors->first('namaDepan'))
            }}
            {{ Form::textInput('namaBelakang', old('namaBelakang'), 'Nama Belakang',
                ['required' => true], $errors->first('namaBelakang'))
            }}
            {{ Form::textInput('namaLengkap', old('namaLengkap'), 'Nama Lengkap',
                ['required' => true], $errors->first('namaLengkap'))
            }}
            {{ Form::textInput('tempatLahir', old('tempatLahir'), 'Tempat Lahir',
                ['required' => true], $errors->first('tempatLahir'))
            }}
            {{ Form::datePicker('tanggalLahir', old('tanggalLahir'), 'Tanggal Lahir',
                ['id' => 'datepicker_tanggal_lahir', 'required' => true], $errors->first('tanggalLahir'))
            }}
            {{ Form::selectBox('fakultasId', $fakultasOptions,
                '', 'Fakultas', ['required' => true], $errors->first('fakultasId'))
            }}
            {{ Form::selectBox('jabatan', $jabatanOptions,
                '', 'Jabatan', ['required' => true], $errors->first('jabatan'))
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