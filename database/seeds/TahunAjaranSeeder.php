<?php

use Illuminate\Database\Seeder;
use App\Constant;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tanggalDaftar = now();
        $tanggalDaftarAkhir = (DateTime::createFromFormat('Y-m-d', $tanggalDaftar->format('Y-m-d')))->modify('+1 day');
        $tanggalAktif = (DateTime::createFromFormat('Y-m-d', $tanggalDaftar->format('Y-m-d')))->modify('+2 day');
        $tanggalSelesai = (DateTime::createFromFormat('Y-m-d', $tanggalDaftar->format('Y-m-d')))->modify('+6 month');

        DB::table('tahun_ajaran')->insert([
            'tipe' => Constant::TA_GANJIL,
            'tahun_awal' => 2020,
            'tahun_akhir' => 2021,
            'tanggal_pendaftaran_mulai' => $tanggalDaftar->format('Y-m-d') . ' 00:00:01',
            'tanggal_pendaftaran_akhir' => $tanggalDaftarAkhir->format('Y-m-d') . ' 00:00:01',
            'tanggal_aktif' => $tanggalAktif->format('Y-m-d') . ' 00:00:01',
            'tanggal_selesai' => $tanggalSelesai->format('Y-m-d') . ' 00:00:01',
            'status' => Constant::STATUS_AKTIF,
        ]);
    }
}
