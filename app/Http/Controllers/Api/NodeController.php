<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Node;
use App\Player;

/**
 * Node Controller
 *
 * @since
 * @author Dan Devine <dandevine0@gmail.coms>
 */
class NodeController extends Controller
{
    /**
     * Gets all nodes.
     *
     * @since 1.0.0
     * @return Object
     */
    public function getNodes()
    {
        $nodes = Node::with('player')->get();

        return response()->json($nodes);
    }

    /**
     * Gets a single node.
     *
     * @param String $id
     * @return Object
     */
    public function getNode($id)
    {
        $node = Node::with('player')->where('id', $id)->first();

        return response()->json($node);
    }
}