<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 5:36
 */

namespace Domain\Institusi\DTOs;


class TahunAjaranDTO extends BaseDTO
{
    public $id;

    public $tipe;

    public $tahunAwal;

    public $tahunAkhir;

    public $status;

    public function __construct()
    {
    }

}