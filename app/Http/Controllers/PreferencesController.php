<?php

namespace App\Http\Controllers;

use App\Models\preferences;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PreferencesController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|string|max:255',
            'language' => 'required|string|max:255',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $preferences = preferences::create([
            'user_id' => $request->get('user_id'),
            'language' => $request->get('language'),
        ]);
        return response()->json(['message'=>'User Created','data'=>$preferences],200);


    }
    public function show(preferences $preferences)
    {
        return response()->json(['message'=>'','data'=>$preferences],200);
    }
    public function show_user(preferences $preferences)
    {
        return response()->json(['message'=>'','data'=>$preferences->user],200);
    }
}
