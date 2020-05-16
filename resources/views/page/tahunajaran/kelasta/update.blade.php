@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
                /**
                    @var Domain\Institusi\TahunAjaran $tahunAjaran
                    @var Domain\TahunAjaran\KelasTA $kelas
                */
                $tahunAjaranName = $tahunAjaran->getTipeString() . ' ' . $tahunAjaran->getTahunAwal() . ' - ' . $tahunAjaran->getTahunAkhir();
            @endphp
            {{ Form::open(['url' => route('kelasta.update', ['id' => $kelas->getId()]), 'class' => 'ajax-form']) }}
            {{ Form::textInput('tahunAjaran', $tahunAjaranName, 'Tahun Ajaran',
                ['readonly' => 'readonly'])
            }}
            {{ Form::selectBox('prodiId', $arrProdiOptions,
                $kelas->getProdi()->getId(), 'Program Studi', ['required' => true], $errors->first('prodiId'))
            }}
            {{ Form::selectBox('matkulId', $arrMataKuliahOptions,
                $kelas->getMataKuliah()->getId(), 'Mata Kuliah', ['required' => true], $errors->first('matkulId'))
            }}
            {{ Form::selectBox('dosenId', $arrDosenOptions,
                $kelas->getDosen()->getId(), 'Dosen', ['required' => true], $errors->first('dosenId'))
            }}
            {{ Form::selectBox('asistenId', $arrDosenOptions,
                $kelas->getAsisten() ? $kelas->getAsisten()->getId() : '', 'Asisten Dosen', [], $errors->first('asistenId'))
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