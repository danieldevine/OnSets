<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Node;
use Faker\Generator as Faker;

$factory->define(Node::class, function (Faker $faker) {
    return [
        'is_active' => true,
        'parent' => $faker->numberBetween(1, 5),
        'closed_at' => $faker->dateTimeThisMonth(),
        'content' => $faker->paragraph(),
        'game_id' => '1'
    ];
});
