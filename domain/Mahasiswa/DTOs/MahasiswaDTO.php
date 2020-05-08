<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 08/05/20
 * Time: 8:09
 */

namespace Domain\Mahasiswa\DTOs;


use App\Constant;
use Carbon\Carbon;
use Domain\BaseDTO;

class MahasiswaDTO extends BaseDTO
{
    public $nim;

    public $noId;
    
    public $namaDepan;
    
    public $namaBelakang;
    
    public $namaLengkap;
    
    public $tempatLahir;
    
    public $tanggalLahir;
    
    public $prodiId;

    public $tahunAjaranMasukId;
    
    public $semester;
    
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