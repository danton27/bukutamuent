<?php

use Illuminate\Database\Seeder;
use App\Models\ModelsMaster;
use Faker\Factory as Faker;

class ClientbookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0;$i < 4000; $i++){
            ModelsMaster::create([
                'nama' => $faker->title,
                'nrp' => str_random(10),
                'nohp' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'keterangan' => $faker->text,
                'petugas' => str_random(10),
                'proses' => str_random(10)
            ]);
        }

    }
}
