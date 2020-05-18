<?php

use Illuminate\Database\Seeder;

class MatKulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Pendidikan Agama',
            'kode' => 'DU11012',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 2,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Pancasila',
            'kode' => 'DU11022',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 2,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Bahasa Inggris ',
            'kode' => 'DU11032',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 2,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Fisika I',
            'kode' => 'DT11043',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 3,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Kalkulus I',
            'kode' => 'DT11052',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 2,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Bahasa Indonesia',
            'kode' => 'DU11062',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 2,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Dsr.Teknologi Telematika',
            'kode' => 'DT11072',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 2,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Algoritma dan Pemrograman I',
            'kode' => 'DT11082',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 2,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Prakt. Fisika I',
            'kode' => 'PT11091',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 1,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Prakt. Algoritma dan Pemrograman I',
            'kode' => 'PT11101',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 1,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);

        DB::table('mata_kuliah')->insert([
            'prodi_id' => 3,
            'nama' => 'Prakt. Bahasa Inggris I',
            'kode' => 'PU11111',
            'tipe' => \App\Constant::MATAKULIAH_WAJIB,
            'bobot' => 1,
            'semester' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);
    }
}
