<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'event_id', 
        'team1_id',
        'team2_id',
        'start_time',
        'result1',
        'result2'
    ];
}
