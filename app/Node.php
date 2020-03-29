<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $fillable = [
        'parent', 'content'
    ];

    public function players()
    {
        $this->belongsTo('App\Player');
    }

    public function games()
    {
        $this->belongsTo('App\Game');
    }
}
