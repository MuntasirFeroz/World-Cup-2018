<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Player;
class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('player_name');
            $table->string('player_img_path');
            $table->string('player_country');
            $table->string('player_position');
            $table->string('jersy_no');
            $table->string('match_played');
            $table->string('goal_scored');
            $table->string('yellow_cards');
            $table->string('red_cards');

            $table->timestamps();
            //$table->foreign('player_country')->reference('country')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
