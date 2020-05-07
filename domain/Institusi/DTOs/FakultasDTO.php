<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 06/05/20
 * Time: 5:00
 */

namespace Domain\Institusi\DTOs;

use Domain\BaseDTO;

class FakultasDTO extends BaseDTO
{
    public $id;

    public $nama;

    public $kode;

    public function __construct()
    {
    }

}