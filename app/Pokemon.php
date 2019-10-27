<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ability;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    function abilities()
    {
        return $this->hasMany('Ability');
    }
}
