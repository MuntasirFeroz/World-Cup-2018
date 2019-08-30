<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $fillable = [
        'country', 'flag_img_path', 'coach','group','match_played','match_won','match_draw','match_lose','goal_diff','points'
    ];

    
}
