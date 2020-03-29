<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Round;

/**
 * Controller for rounds
 *
 * @since
 * @author Dan Devine <dandevine0@gmail.com>
 */
class RoundController extends Controller
{

    /**
     * Gets all rounds.
     *
     * @return Object
     */
    public function getRounds()
    {
        $rounds = Round::all();

        return $response->json($rounds);
    }

    /**
     * Gets a single round.
     *
     * @param String $id
     * @return Object
     */
    public function getRound($id)
    {
        $round = Round::with('id', $id)->first();

        return $response->json($round);
    }
}
