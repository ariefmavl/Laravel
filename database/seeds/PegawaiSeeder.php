<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 

            $faker = Faker::create('id_JP');

            for($i = 1; $i <= 20; $i++){

                // insert data to table pegawai used Faker
                DB::table('pegawai')->insert([
                    'pegawai_nama' => $faker->name,
                    'pegawai_jabatan' => $faker->jobTitle,
                    'pegawai_umur' => $faker->numberBetween(20,25),
                    'pegawai_alamat' => $faker->address
                ]);
            }
        
    }
}
