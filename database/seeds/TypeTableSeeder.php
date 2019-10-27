<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Faker\Generator;
use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 3; $i++){
            $pokemonType = new Type();
            $pokemonType->name = $faker->text(30);
            $pokemonType->description = $faker->text(30);
            $pokemonType->save();
        }
    }
}
