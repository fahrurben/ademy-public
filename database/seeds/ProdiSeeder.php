<?php

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Prodi Fakultas kedokteran
        DB::table('prodi')->insert([
            'fakultas_id' => 1,
            'nama' => 'Kedokteran',
            'kode' => '0101',
        ]);

        // Prodi Fakultas teknik
        DB::table('prodi')->insert([
            'fakultas_id' => 2,
            'nama' => 'Teknik Sipil',
            'kode' => '0201',
        ]);

        // Prodi Fakultas MIPA
        DB::table('prodi')->insert([
            'fakultas_id' => 3,
            'nama' => 'Ilmu Komputer',
            'kode' => '0301',
        ]);

        // Prodi Fakultas Ekonomi
        DB::table('prodi')->insert([
            'fakultas_id' => 4,
            'nama' => 'Ekonomi',
            'kode' => '0401',
        ]);

        // Prodi Fakultas Hukum
        DB::table('prodi')->insert([
            'fakultas_id' => 5,
            'nama' => 'Hukum',
            'kode' => '0501',
        ]);
    }
}
