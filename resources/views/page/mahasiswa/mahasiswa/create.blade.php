@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
            @endphp
            {{ Form::open(['url' => route('mahasiswa.create'), 'class' => 'ajax-form']) }}
            {{ Form::textInput('nim', old('nim'), 'Nim',
                ['required' => true], $errors->first('nim'))
            }}
            {{ Form::textInput('noId', old('noId'), 'No ID (KTP)',
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
            {{ Form::selectBox('prodiId', $arrProdiOptions,
                old('prodiId'), 'Program Studi', ['required' => true], $errors->first('prodiId'))
            }}
            {{ Form::selectBox('tahunAjaranMasukId', $arrTahunAjaranOptions,
                old('tahunAjaranId'), 'Masuk Di Tahun Ajaran', ['required' => true], $errors->first('tahunAjaranMasukId'))
            }}
            {{ Form::textInput('semester', old('semester'), 'Semester',
                ['type' => 'number', 'required' => true], $errors->first('semester'))
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