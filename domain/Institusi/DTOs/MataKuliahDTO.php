<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 13/05/20
 * Time: 8:03
 */

namespace Domain\Institusi\DTOs;


use Domain\BaseDTO;

class MataKuliahDTO extends BaseDTO
{
    public $id;

    public $nama;

    public $kode;

    public $tipe;

    public $prodiId;

    public $semester;

    public $bobot;

    public $deskripsi;

    public $status;

    public function __construct()
    {
    }
}