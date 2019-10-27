<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('hp');
            $table->unsignedSmallInteger('attack');
            $table->unsignedSmallInteger('defense');
            $table->unsignedSmallInteger('speed');
            $table->unsignedSmallInteger('sp_attack');
            $table->unsignedSmallInteger('sp_defense');
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
        Schema::dropIfExists('stats');
    }
}
