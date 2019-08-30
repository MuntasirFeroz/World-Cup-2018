<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_no');
            $table->string('team1');
            $table->string('team1_img_path');
            $table->integer('team1_score');
            $table->string('team2');
            $table->string('team2_img_path');
            $table->integer('team2_score');
            $table->text('tie_breaker_desc')->nullable();
            $table->string('played_on');

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
        Schema::dropIfExists('matches');
    }
}
