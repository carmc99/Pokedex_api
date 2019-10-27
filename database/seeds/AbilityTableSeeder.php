<?php

use Illuminate\Database\Seeder;
use App\Ability;

class AbilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ability = new Ability();
        $ability->name = 'Pressure';
        $ability->description = 'By putting pressure on the opposing Pokémon, it raises their PP usage.';
        $ability->save();

        $ability = new Ability();
        $ability->name = 'Soundproof';
        $ability->description = 'Soundproofing of the Pokémon itself gives full immunity to all sound-based moves.';
        $ability->save();

        $ability = new Ability();
        $ability->name = 'Chatter';
        $ability->description = 'The user attacks the target with sound waves of deafening chatter. This confuses the target.';
        $ability->save();

    }
}
