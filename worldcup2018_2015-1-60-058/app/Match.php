<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
	
     protected $fillable = [
        'match_no','team1', 'team1_img_path', 'team1_score','team2','team2_img_path','team2_score','tie_breaker_desc','played_on'
    ];
}
