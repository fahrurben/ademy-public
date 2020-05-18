<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::statement("TRUNCATE TABLE fakultas");
        DB::statement("TRUNCATE TABLE prodi");
        DB::statement("TRUNCATE TABLE mata_kuliah");
        DB::statement("TRUNCATE TABLE dosen");
        DB::statement("TRUNCATE TABLE tahun_ajaran");

        $this->call(FakultasSeeder::class);
        $this->call(ProdiSeeder::class);
        $this->call(MatKulSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(TahunAjaranSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
