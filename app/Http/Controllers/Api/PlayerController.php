<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Player;

/**
 * Player Controller
 *
 * @since
 * @author Dan Devine <dandevine0@gmail.com>
 */
class PlayerController extends Controller
{
    /**
     * Gets all players.
     *
     * @return Object
     */
    public function getPlayers()
    {
        $players = Player::All();

        return $response->json($players);
    }

    /**
     * Gets a single player.
     *
     * @param String $id
     * @return Object
     */
    public function getPlayer($id)
    {
        $player  = Player::all();

        return $response->json($player);
    }
}
