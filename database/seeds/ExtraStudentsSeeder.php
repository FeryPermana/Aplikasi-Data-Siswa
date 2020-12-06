<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ExtraStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        for ($i = 0; $i < 3; $i++) {
            DB::table('extrastudents')->insert([
                'id_students' => 3,
                'id_extras' => 3,
            ]);
        }
    }
}
