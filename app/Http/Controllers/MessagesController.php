<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listUsers(Messages $message)
    {
        $users = $message->users;
        return response()->json(['message' => null, 'data' => $users], 200);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_idOrigen' => 'required|string|max:255',
            'grupo' => 'required|string|max:255',
            'privado' => 'required|string|max:255',
            'destacados' => 'required|string|max:255',
            'user_idDestino' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $exercises = Messages:: create([
            'grupo' => $request->get('grupo'),
            'user_idOrigen' => $request->get('user_idOrigen'),
            'privado' => $request->get('privado'),
            'destacados' => $request->get('destacados'),
            'user_idDestino' => $request->get('user_idDestino'),
        ]);
        return response()->json(['message' => 'Messages Created', 'data' => $exercises], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
}
