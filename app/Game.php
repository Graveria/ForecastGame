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
        'time',
        'result1',
        'result2'
    ];

    public static function pointCount($res1, $res2, $prog1, $prog2) {
        if ($res1 == $prog1 && $res2 == $prog2) {
            $points = 10;
        } else if ($res1 >= $res2 && $prog1 >= $prog2) {
            $points = 5;
        } else {
            $points = 0;
        }

        return $points;
    }

}


