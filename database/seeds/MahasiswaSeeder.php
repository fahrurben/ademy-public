<?php

use Illuminate\Database\Seeder;
use App\Constant;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $firstName = $faker->firstName();
            $lastName = $faker->lastName();
            $fullName = $firstName . ' ' . $lastName;

            DB::table('mahasiswa')->insert([
                'prodi_id' => 3, //Ilmu Komputer
                'tahun_ajaran_masuk_id' => 1,
                'nim' => $faker->numerify('###########'),
                'no_id' => $faker->numerify('###########'),
                'nama_depan' => $firstName,
                'nama_belakang' => $lastName,
                'nama_lengkap' => $fullName,
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => $faker->dateTimeBetween($startDate = '2000-01-01', $endDate = '2002-01-01'),
                'semester' => 1,
                'status' => Constant::STATUS_AKTIF,
            ]);
        }
    }
}
