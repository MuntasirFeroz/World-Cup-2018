<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  

    protected $fillable = [
        'player_name','player_img_path', 'player_country', 'player_position','jersy_no','match_played','goal_scored','yellow_cards','red_cards'
    ];
}
