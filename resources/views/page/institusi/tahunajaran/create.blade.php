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
            {{ Form::open(['url' => route('tahunajaran.create'), 'class' => 'ajax-form']) }}
            {{ Form::selectBox('tipe', Constant::TA_TYPE,
                old('tipe'), 'Tipe', ['required' => true], $errors->first('tipe'))
            }}
            {{ Form::selectBox('tahunAwal', $tahunAwalOptions,
                old('tahunAwal'), 'Tahun Awal', ['required' => true], $errors->first('tahunAwal'))
            }}
            {{ Form::selectBox('tahunAkhir', $tahunAkhirOptions,
                old('tahunAkhir'), 'Tahun Akhir', ['required' => true], $errors->first('tahunAkhir'))
            }}
            {{ Form::datePicker('tanggalPendaftaranMulai', '', 'Tanggal Pendaftaran Mulai',
                ['required' => true], $errors->first('tanggalPendaftaranMulai'))
            }}
            {{ Form::datePicker('tanggalPendaftaranAkhir', '', 'Tanggal Pendaftaran Akhir',
                ['required' => true], $errors->first('tanggalPendaftaranAkhir'))
            }}
            {{ Form::datePicker('tanggalAktif', '', 'Tanggal Aktif',
                ['required' => true], $errors->first('tanggalAktif'))
            }}
            {{ Form::datePicker('tanggalSelesai', '', 'Tanggal Selesai',
                ['required' => true], $errors->first('tanggalSelesai'))
            }}
            {{ Form::selectBox('status', Constant::STATUS_TAHUN_AJARAN,
                old('status'), 'Status', ['required' => true], $errors->first('status'))
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