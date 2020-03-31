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
        return $this->belongsTo('App\Player');
    }

    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}