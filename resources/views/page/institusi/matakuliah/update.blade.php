@extends('layout.ajax')

@section('content')
    @php /** @var Domain\Institusi\MataKuliah $mataKuliah */ @endphp

    <div class="row">
        <div class="col-md-12">
            @php
            @endphp
            {{ Form::open(['url' => route('matakuliah.update', ['id' => $mataKuliah->getId()]), 'class' => 'ajax-form']) }}
            {{ Form::textInput('nama', $mataKuliah->getNama(), 'Nama',
                ['required' => true], $errors->first('nama'))
            }}
            {{ Form::textInput('kode', $mataKuliah->getKode(), 'Kode',
                ['required' => true], $errors->first('kode'))
            }}
            {{ Form::selectBox('tipe', $arrTipeOptions,
                $mataKuliah->getTipe(), 'Tipe', ['required' => true], $errors->first('tipe'))
            }}
            {{ Form::selectBox('prodiId', $arrProdiOptions,
                $mataKuliah->getProdi()->getId() ?? '', 'Program Studi', ['required' => true], $errors->first('prodiId'))
            }}
            {{ Form::textInput('semester', $mataKuliah->getSemester(), 'Semester',
                ['type' => 'number', 'required' => true], $errors->first('semester'))
            }}
            {{ Form::textInput('bobot', $mataKuliah->getBobot(), 'Bobot',
                ['type' => 'number', 'required' => true], $errors->first('bobot'))
            }}
            {{ Form::textInput('deskripsi', $mataKuliah->getDeskripsi(), 'Deskripsi',
                [], $errors->first('deskripsi'))
            }}
            {{ Form::selectBox('status', $arrStatusOptions,
                $mataKuliah->getStatus(), 'Status', ['required' => true], $errors->first('tipe'))
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