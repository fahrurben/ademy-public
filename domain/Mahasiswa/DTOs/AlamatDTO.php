<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 15/05/20
 * Time: 8:23
 */

namespace Domain\Mahasiswa\DTOs;


use Domain\BaseDTO;

class AlamatDTO extends BaseDTO
{
    public $id;

    public $alamat;

    public $provinsi;

    public $kota;

    public $kodePos;

    public $telepon;

    public function __construct()
    {
    }
}