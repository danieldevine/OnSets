<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Game::class, 1)->create()->each(function ($game) {
            $game->round()->save(factory(App\Round::class)->make());
        });
    }
}