<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Game;

/**
 * Games Controller
 *
 * @author Dan Devine <dandevine0@gmail.com>
 * @since 1.0.0
 */
class GameController extends Controller
{

    /**
     * Gets all games.
     *
     * @since 1.0.0
     * @return Object
     */
    public function getGames()
    {
        $games = Game::all();

        return $response->json($games);
    }

    /**
     * Get a single game.
     *
     * @param string $id
     * @return Object
     */
    public function getGame($id)
    {
        $game = Game::where('id', $id)->first();

        return $response->json($game);
    }
}
