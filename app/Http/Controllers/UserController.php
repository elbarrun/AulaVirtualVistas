<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'c_password' => 'required|same:password',

        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);
        return response()->json(['message'=>'User Created','data'=>$user],200);
    }
    public function show(User $user)
    {
        return response()->json(['message'=>'','data'=>$user],200);
    }

    public function listMessagues(User $user)
    {
        $messages = $user->Messages;
        return response()->json(['message'=>null,'data'=>$messages],200);
    }

    public function show_preferences(User $user)
    {
        return response()->json(['message'=>'','data'=>$user->preferences],200);
    }

    public function show_exercises(User $user)
    {
        return response()->json(['message'=>'','data'=>$user->exercises],200);
    }
    public function bookEvent(Request $request, User $user, Messages $messages)
    {
        $note = '';
        if($request->note){
            $note = $request->note;
        }
        if($user->messages()->save($messages, array('note' => $note))){
            return response()->json(['message'=>'User Event
Created','data'=>$messages],200);
        }
        return response()->json(['message'=>'Error','data'=>null],400);
    }

    public function origen(User $user)
    {
        return response()->json(['message'=>'','data'=>$user->messages],200);
    }
    public function destino(User $user)
    {
        return response()->json(['message'=>'','data'=>$user->messages],200);
    }
}
