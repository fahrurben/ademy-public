<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fakultas')->insert([
            'nama' => 'Kedokteran',
            'kode' => '01',
        ]);

        DB::table('fakultas')->insert([
            'nama' => 'Teknik',
            'kode' => '02',
        ]);

        DB::table('fakultas')->insert([
            'nama' => 'MIPA',
            'kode' => '03',
        ]);

        DB::table('fakultas')->insert([
            'nama' => 'Ekonomi',
            'kode' => '04',
        ]);

        DB::table('fakultas')->insert([
            'nama' => 'Hukum',
            'kode' => '05',
        ]);
    }
}
