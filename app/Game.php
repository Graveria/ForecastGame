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

    // 1 Uzmin precīzu rezultātu
    // 2 Uzmin precīzu rezultātu starpību
    // Uzmin uzvarētāju
    // Neizšķirts - 3

    // Point count function 
    // checking user submitted forecasts with game results
    public static function pointCount($res1, $res2, $prog1, $prog2) {
        if ($res1 == $prog1 && $res2 == $prog2 && ($prog1 != 0 && $prog2 != 0)) {
            $points = 12;
        }  else if (($res1 > $res2 && $prog1 > $prog2) || ($res1 < $res2 && $prog1 < $prog2)) {
            $points = 5;
        } else if ($prog1 == $prog2) {
            $points = -3;
        } else if ($res1 == $res2) {
            $points = 0;
        } else {
            $points = 0;
        }

        return $points;
    }

}


