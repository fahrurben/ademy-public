@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
            @endphp
            {{ Form::open(['url' => route('matakuliah.create'), 'class' => 'ajax-form']) }}
            {{ Form::textInput('nama', '', 'Nama',
                ['required' => true], $errors->first('nama'))
            }}
            {{ Form::textInput('kode', '', 'Kode',
                ['required' => true], $errors->first('kode'))
            }}
            {{ Form::selectBox('tipe', $arrTipeOptions,
                '', 'Tipe', ['required' => true], $errors->first('tipe'))
            }}
            {{ Form::selectBox('prodiId', $arrProdiOptions,
                '', 'Program Studi', ['required' => true], $errors->first('prodiId'))
            }}
            {{ Form::textInput('semester', '', 'Semester',
                ['type' => 'number', 'required' => true], $errors->first('semester'))
            }}
            {{ Form::textInput('bobot', '', 'Bobot',
                ['type' => 'number', 'required' => true], $errors->first('bobot'))
            }}
            {{ Form::textInput('deskripsi', '', 'Deskripsi',
                [], $errors->first('deskripsi'))
            }}
            {{ Form::selectBox('status', $arrStatusOptions,
                '', 'Status', ['required' => true], $errors->first('tipe'))
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