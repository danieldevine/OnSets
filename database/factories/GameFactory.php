<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'game_name' => 'OffSets 2020',
        'game_start' => '2020-03-21 13:14',
        'game_end' => '2020-12-21 13:14'
    ];
});
