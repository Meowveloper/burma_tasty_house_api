<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request) {
        logger($request->toArray());

        $user = User::where('email', '=', $request->email)->first();

        if(isset($user)) {
            if(Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 'success',
                    'user' => $user,
                    'token' => $user->createToken('api_token')->plainTextToken
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'user'=> null,
                    'token' => null
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'user'=> null,
                'token' => null
            ]);
        }
    }
}
