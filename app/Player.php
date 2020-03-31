<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];
    protected $attributes = [
        'is_admin' => false,
    ];

    public function node()
    {
        return $this->hasMany('App\Node');
    }
}
