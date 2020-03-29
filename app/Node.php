<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    public function player()
    {
        $this->belongsTo('App\Player');
    }
}
