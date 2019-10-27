<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')
                ->on('types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedDecimal('weight');
            $table->unsignedDecimal('height');
            $table->char('gender', 2);
            $table->unsignedInteger('stat_id');
            $table->foreign('stat_id')->references('id')
                ->on('stats')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('description');
            $table->unsignedInteger('ability_id');
            $table->foreign('ability_id')->references('id')
                ->on('abilities')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
}
