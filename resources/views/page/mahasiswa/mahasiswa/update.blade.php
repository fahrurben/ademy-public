@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
                    @endphp
            {{ Form::open([
                'url' => route('mahasiswa.update', ['id' => $mahasiswa->getId()]),
                'data-pjax-target' => 'section-profil',
                'class' => 'ajax-form'])
            }}
            {{ Form::textInput('nim', $mahasiswa->getNim(), 'Nim',
                ['required' => true], $errors->first('nim'))
            }}
            {{ Form::textInput('noId', $mahasiswa->getNoId(), 'No ID (KTP)',
                [], $errors->first('noId'))
            }}
            {{ Form::textInput('namaDepan', $mahasiswa->getNamaDepan(), 'Nama Depan',
                ['required' => true], $errors->first('namaDepan'))
            }}
            {{ Form::textInput('namaBelakang', $mahasiswa->getNamaBelakang(), 'Nama Belakang',
                ['required' => true], $errors->first('namaBelakang'))
            }}
            {{ Form::textInput('namaLengkap', $mahasiswa->getNamaLengkap(), 'Nama Lengkap',
                ['required' => true], $errors->first('namaLengkap'))
            }}
            {{ Form::textInput('tempatLahir', $mahasiswa->getTempatLahir(), 'Tempat Lahir',
                ['required' => true], $errors->first('tempatLahir'))
            }}
            {{ Form::datePicker('tanggalLahir', $mahasiswa->getTanggalLahir()->format(Constant::LOCAL_DATE_FORMAT), 'Tanggal Lahir',
                ['id' => 'datepicker_tanggal_lahir', 'required' => true], $errors->first('tanggalLahir'))
            }}
            {{ Form::selectBox('prodiId', $arrProdiOptions,
                $mahasiswa->getProdi()->getId(), 'Program Studi', ['required' => true], $errors->first('prodiId'))
            }}
            {{ Form::selectBox('tahunAjaranMasukId', $arrTahunAjaranOptions,
                $mahasiswa->getTahunAjaranMasuk()->getId(), 'Masuk Di Tahun Ajaran', ['required' => true], $errors->first('tahunAjaranMasukId'))
            }}
            {{ Form::textInput('semester', $mahasiswa->getSemester(), 'Semester',
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