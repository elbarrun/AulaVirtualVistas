<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\preferences;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ExercisesController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'deliveryDate' => 'required|date',
            'coments' => 'required|string|max:255',
             'deliveryStatus' => 'required|string|max:255',
             'file' => 'required|string|max:255'
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $user = Auth::user();
        $user_id = $user->id;
        $exercises = Exercise:: create([
            'user_id' => $user_id,
           // 'calification' => -1,
            'coments' => $request->get('coments'),
            'date' => ($request->get('date')),
        ]);
        return response()->json(['message'=>'Exercises Created','data'=>$exercises],200);

    }
    public function show(Exercise $exercise, $id)
    {
        $peticion = Exercise::findOrFail($id);
        return view('exercises.show', compact('exercise'));
    }


    public function show_user(Exercise $exercise)
    {
        return response()->json(['message'=>'','data'=>$exercise->user],200);
    }

}
