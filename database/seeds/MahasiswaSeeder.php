<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker indonesia
        $faker = Faker::create('id_ID');

        //membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){

            //insert data dummy mahasiswa dengan faker
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'npm' => $faker->numberBetween(15500,91500),
                'alamat' => $faker->address
            ]);
        }

    }
}
