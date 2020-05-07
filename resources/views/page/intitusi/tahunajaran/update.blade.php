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
            {{ Form::selectBox('status', Constant::STATUS_TYPE,
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