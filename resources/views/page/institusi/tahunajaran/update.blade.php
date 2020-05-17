@extends('layout.ajax')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @php
                $tahunAwalOptions = $tahunAkhirOptions = [];
                for($i = Constant::TAHUN_START; $i <= Constant::TAHUN_END; $i++) {
                    $tahunAwalOptions[''] = __('- Select Tahun Awal -');
                    $tahunAwalOptions[$i] = $i;

                    $tahunAkhirOptions[''] = __('- Select Tahun Akhir -');
                    $tahunAkhirOptions[$i] = $i;
                }
            @endphp
            {{ Form::open(['url' => route('tahunajaran.update', ['id' => $tahunAjaran->getId()]), 'class' => 'ajax-form']) }}
            {{ Form::selectBox('tipe', Constant::TA_TYPE,
                $tahunAjaran->getTipe(), 'Tipe', ['required' => true], $errors->first('tipe'))
            }}
            {{ Form::selectBox('tahunAwal', $tahunAwalOptions,
                $tahunAjaran->getTahunAwal(), 'Tahun Awal', ['required' => true], $errors->first('tahunAwal'))
            }}
            {{ Form::selectBox('tahunAkhir', $tahunAkhirOptions,
                $tahunAjaran->getTahunAkhir(), 'Tahun Akhir', ['required' => true], $errors->first('tahunAkhir'))
            }}
            {{ Form::datePicker('tanggalPendaftaranMulai', $tahunAjaran->getTanggalPendaftaranMulai()->format(Constant::LOCAL_DATE_FORMAT), 'Tanggal Pendaftaran Mulai',
                ['required' => true], $errors->first('tanggalPendaftaranMulai'))
            }}
            {{ Form::datePicker('tanggalPendaftaranAkhir', $tahunAjaran->getTanggalPendaftaranAkhir()->format(Constant::LOCAL_DATE_FORMAT), 'Tanggal Pendaftaran Akhir',
                ['required' => true], $errors->first('tanggalPendaftaranAkhir'))
            }}
            {{ Form::datePicker('tanggalAktif', $tahunAjaran->getTanggalAktif()->format(Constant::LOCAL_DATE_FORMAT), 'Tanggal Aktif',
                ['required' => true], $errors->first('tanggalAktif'))
            }}
            {{ Form::datePicker('tanggalSelesai', $tahunAjaran->getTanggalSelesai()->format(Constant::LOCAL_DATE_FORMAT), 'Tanggal Selesai',
                ['required' => true], $errors->first('tanggalSelesai'))
            }}
            {{ Form::selectBox('status', Constant::STATUS_TAHUN_AJARAN,
                $tahunAjaran->getStatus(), 'Status', ['required' => true], $errors->first('status'))
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