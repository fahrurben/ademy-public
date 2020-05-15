@extends('layout.app')

@section('content')
    <div class="profile-page details-view">

        <div class="details-header">
            <div class="photo-wrapper">
                <img class="photo" src="{{ url('/images/profile_avatar.png') }}" alt="photo"></img>
                <a href="#" class="btn btn-default btn-xs upload">Upload</a>
            </div>
            <div class="title-wrapper">
                <h2>{{ $mahasiswa->getNamaLengkap() }}</h2>
            </div>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profil</a></li>
            <li role="presentation"><a href="#academic" aria-controls="academic" role="tab" data-toggle="tab">Akademik</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <!-- Profile -->
            <div role="tabpanel" class="tab-pane active clearfix" id="profile">
                <div class="col-md-12">
                    <div class="row">
                        <div class="details-section">
                            @php
                                $tahunAjaranMasuk = $mahasiswa->getTahunAjaranMasuk();
                                $tahunAjaranString = ($tahunAjaranMasuk->getTipe() == 1 ? 'Ganjil' : 'Genap') .' : '.$tahunAjaranMasuk->getTahunAwal().' - '.$tahunAjaranMasuk->getTahunAkhir()
                            @endphp
                            <div class="details-panel">
                                Profil
                                <a href="{{ route('mahasiswa.update', ['id' => $mahasiswa->getId()]) }}"  class="btn btn-default btn-sm showEditModal">Edit</a>
                            </div>

                            <div class="col-md-12">

                                <div class="details-section-content">
                                    {{ Form::viewField('Nim', $mahasiswa->getNim()) }}
                                    {{ Form::viewField('No ID', $mahasiswa->getNoId()) }}
                                    {{ Form::viewField('Nama Depan', $mahasiswa->getNamaDepan()) }}
                                    {{ Form::viewField('Nama Belakang', $mahasiswa->getNamaBelakang()) }}
                                    {{ Form::viewField('Nama Lengkap', $mahasiswa->getNamaLengkap()) }}
                                    {{ Form::viewField('Tempat Lahir', $mahasiswa->getTempatLahir()) }}
                                    {{ Form::viewField('Tanggal Lahir', $mahasiswa->getTanggalLahir()->format(Constant::LOCAL_DATE_FORMAT)) }}
                                    {{ Form::viewField('Program Studi', $mahasiswa->getProdi()->getNama()) }}
                                    {{ Form::viewField('Tahun Ajaran Masuk', $tahunAjaranString) }}
                                    {{ Form::viewField('Semester', $mahasiswa->getSemester()) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile End -->

        </div>
        <!-- Tab panes End -->

    </div>

@endsection