<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // Import library Faker

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0;$i<=5;$i++){
            //Data Faker dengan nama ID, random elemen yg ditentukan
            DB::table('mahasiswa')->insert([
                'nim' => $faker->randomNumber(6,true),
                'nama' => $faker->name(),
                'gender' => $faker->randomElement(['Laki-laki','Perempuan']),
                'prodi' => $faker->randomElement(['Sistem Informasi','Informatika','Teknik Komputer']),
                'minat' => $faker->randomElement(['ai','ds','web']),
            ]);
        }
    }
}
