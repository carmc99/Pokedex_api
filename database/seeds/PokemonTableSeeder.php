<?php

use Illuminate\Database\Seeder;
use App\Pokemon;
use App\Ability;
use Faker\Generator;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();
        $pokemon = new Pokemon();
        $pokemon->name = $faker->text(30);
        $pokemon->type_id = rand(1,3);
        $pokemon->weight = $faker->numberBetween(2,30);
        $pokemon->height = $faker->randomFloat(3,0,2);
        $pokemon->gender = 'M';
        $pokemon->stat_id = rand(1,3);
        $pokemon->description = $faker->text(30);;
        $pokemon->ability_id = rand(1,3);
        $pokemon->save();

    }
}
