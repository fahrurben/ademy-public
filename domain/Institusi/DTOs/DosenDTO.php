<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 10/05/20
 * Time: 6:04
 */

namespace Domain\Institusi\DTOs;


use App\Constant;
use Carbon\Carbon;
use Domain\BaseDTO;

class DosenDTO extends BaseDTO
{
    public $nid;

    public $noId;

    public $namaDepan;

    public $namaBelakang;

    public $namaLengkap;

    public $tempatLahir;

    public $tanggalLahir;

    public $fakultasId;

    public $jabatan;

    public $foto;

    public $status;

    public function __construct()
    {
    }

    public function setTanggalLahirFromLocale($tanggalLahir)
    {
        $this->tanggalLahir = Carbon::createFromFormat(Constant::LOCAL_DATE_FORMAT, $tanggalLahir);
    }
}