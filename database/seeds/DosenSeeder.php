<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'fakultas_id' => '3',
            'nid' => '000101',
            'no_id' => '0122131355',
            'nama_depan' => 'Budi',
            'nama_belakang' => 'Raharjo',
            'nama_lengkap' => 'Budi Raharjo',
            'tempat_lahir' => 'Medan',
            'tanggal_lahir' => '1980-01-01',
            'email' => 'budi.raharjo@email.com',
            'jabatan' => 1,
            'status' => \App\Constant::STATUS_AKTIF,
        ]);
    }
}
