<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    public function game()
    {
        $this->belongsTo('App\Game');
    }
}
