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

    /**
     * Updates a node
     * @note not in use yet
     * @todo implemet editing functionality on frontend
     *
     * @param Request $request
     * @return void
     */
    public function updateNode(Request $request)
    {
        $node = Node::where('id', $request->id)->first();
        $node->content = $request->content;
        $node->save();

        return response()->json($node);
    }

    /**
     * Creates a node
     *
     * @param Request $request
     * @return void
     */
    public function createNode(Request $request)
    {
        $node = new Node;

        $node->parent     = $request->parent;
        $node->content    = $request->content;
        $node->is_active  = true;
        $node->player_id  = 1;
        $node->game_id    = 1;

        $node->save();

        return response()->json($node);
    }
}