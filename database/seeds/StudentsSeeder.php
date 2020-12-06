<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        for ($i = 0; $i < 1; $i++) {
            DB::table('students')->insert([
                'id_kelas' => 4,
                'nama_siswa' => $faker->text(10),
                'no' => 4,
                'nis' => 18222210,
            ]);
        }
    }
}
