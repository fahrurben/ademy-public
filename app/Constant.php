<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 5:03
 */

namespace App;


class Constant
{
    const TA_TYPE = [
      1 => 'Ganjil',
      2 => 'Genap',
    ];

    const TAHUN_START = 2010;
    const TAHUN_END = 2030;

    const STATUS_TYPE = [
      0 => 'In Aktif',
      1 => 'Aktif',
      3 => 'Selesai',
    ];

    const STATUS_MAHASISWA = [
        0 => 'In Aktif',
        1 => 'Aktif',
    ];

    const STATUS_INAKTIF = 0;
    const STATUS_AKTIF = 1;

    const LOCAL_DATE_FORMAT = 'd/m/Y';

    const JABATAN_DOSEN_TYPE = [
        '1' => 'Asisten Ahli',
        '2' => 'Lektor',
        '3' => 'Lektor Kepala',
        '4' => 'Profesor',
    ];
}