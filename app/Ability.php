<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pokemon;

class Ability extends Model
{
    protected $table = 'abilities';

    function pokemon(){
        return $this->belongsTo('Pokemon');
    }
}
