<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('flag_img_path');
            $table->string('coach');
            $table->string('group',3);
            $table->integer('match_played');
            $table->integer('match_won');
            $table->integer('match_draw');
            $table->integer('match_lose');
            $table->integer('goal_diff');
            $table->integer('points');
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
        Schema::dropIfExists('teams');
    }
}
