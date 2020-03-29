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
        $this->hasMany('App\Round');
    }

    public function node()
    {
        $this->hasMany('App\Node');
    }
}
