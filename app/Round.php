<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    public function games()
    {
        $this->belongsTo('App\Game');
    }
}
