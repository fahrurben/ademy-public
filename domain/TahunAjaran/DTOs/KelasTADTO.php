<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 16/05/20
 * Time: 14:09
 */

namespace Domain\TahunAjaran\DTOs;


use Domain\BaseDTO;

class KelasTADTO extends BaseDTO
{
    public $id;

    public $nama;

    public $taId;

    public $prodiId;

    public $matkulId;

    public $dosenId;

    public $asistenId;

    public function __construct()
    {
    }
}