<?php

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Player::class, 25)->create()->each(function ($player) {
            $player->nodes()->save(factory(App\Node::class)->make());
        });
    }
}
