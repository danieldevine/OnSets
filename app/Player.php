<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $attributes = [
        'is_admin' => false,
    ];

    public function node()
    {
        return $this->hasMany('App\Node');
    }
}
