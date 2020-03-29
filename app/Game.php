<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'game_name'
    ];

    public function rounds()
    {
        $this->hasMany('App\Round');
    }

    public function nodes()
    {
        $this->hasMany('App\Node');
    }
}
