<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    protected $fillable = [
        'id', 
        'user_id',
        'game_id',
        'forecast_result1',
        'forecast_result2',
        'points',
    ];
}
