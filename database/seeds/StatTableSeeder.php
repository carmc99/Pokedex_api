<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class StatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 3; $i++)
        {
            DB::table('stats')->insert([
                'hp' => $faker->numberBetween(1,255),
                'attack' => $faker->numberBetween(1,255),
                'defense' => $faker->numberBetween(1,255),
                'speed' => $faker->numberBetween(1,255),
                'sp_attack' => $faker->numberBetween(1,255),
                'sp_defense' => $faker->numberBetween(1,255),
            ]);
        }
    }
}
