<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $fillable = [
        'parent', 'content'
    ];

    public function player()
    {
        $this->belongsTo('App\Player');
    }

    public function game()
    {
        $this->belongsTo('App\Game');
    }
}
