<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function round()
    {
        $this->hasMany('App\Round');
    }
}
