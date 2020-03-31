<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'game_name'
    ];

    public function round()
    {
        return $this->hasMany('App\Round');
    }

    public function node()
    {
        return $this->hasMany('App\Node');
    }
}
