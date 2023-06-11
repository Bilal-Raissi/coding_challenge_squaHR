<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class token extends Controller
{
    public function generateToken(Request $request)
    {
        $user = $request->user();
        $token = $user->createToken('API Token')->plainTextToken;
        
        return response()->json(['token' => $token]);
    }
}
