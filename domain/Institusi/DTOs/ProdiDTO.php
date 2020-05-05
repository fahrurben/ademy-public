<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 06/05/20
 * Time: 5:00
 */

namespace Domain\Institusi\DTOs;


class ProdiDTO extends BaseDTO
{
    public $id;

    public $nama;

    public $kode;

    public $fakultas_id;

    public function __construct()
    {
    }

}