<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Round;
use Faker\Generator as Faker;

$factory->define(Round::class, function (Faker $faker) {
    return [
        'round_start' => '2020-03-28 13:14',
        'round_end'   => '2020-03-29 13:14',
        'game_id'     => '1'
    ];
});
