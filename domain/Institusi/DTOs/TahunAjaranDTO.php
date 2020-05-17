<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 5:36
 */

namespace Domain\Institusi\DTOs;


use App\Constant;
use Carbon\Carbon;
use Domain\BaseDTO;

class TahunAjaranDTO extends BaseDTO
{
    public $id;

    public $tipe;

    public $tahunAwal;

    public $tahunAkhir;

    public $tanggalPendaftaranMulai;

    public $tanggalPendaftaranAkhir;

    public $tanggalAktif;

    public $tanggalSelesai;

    public $status;

    public function __construct()
    {
    }

    public function setTanggalPendaftaranMulaiFromLocale($tanggalPendaftaranMulai)
    {
        $this->tanggalPendaftaranMulai = Carbon::createFromFormat(Constant::LOCAL_DATE_FORMAT, $tanggalPendaftaranMulai);
    }

    public function setTanggalPendaftaranAkhirFromLocale($tanggalPendaftaranAkhir)
    {
        $this->tanggalPendaftaranAkhir = Carbon::createFromFormat(Constant::LOCAL_DATE_FORMAT, $tanggalPendaftaranAkhir);
    }

    public function setTanggalAktifFromLocale($tanggalAktif)
    {
        $this->tanggalAktif = Carbon::createFromFormat(Constant::LOCAL_DATE_FORMAT, $tanggalAktif);
    }

    public function setTanggalSelesaiFromLocale($tanggalSelesai)
    {
        $this->tanggalSelesai = Carbon::createFromFormat(Constant::LOCAL_DATE_FORMAT, $tanggalSelesai);
    }
}