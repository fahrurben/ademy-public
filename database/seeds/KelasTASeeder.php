<?php

use Illuminate\Database\Seeder;

class KelasTASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkulList = DB::table('mata_kuliah')
            ->select('id', 'nama')
            ->where('prodi_id', '=', 3)
            ->get();

        foreach ($matkulList as $matkul) {
            DB::table('kelas_ta')->insert([
                'prodi_id' => 3, //Ilmu Komputer
                'matkul_id' => $matkul->id,
                'nama' => $matkul->nama,
                'ta_id' => 1,
                'dosen_id' => 1,
            ]);
        }

    }
}
