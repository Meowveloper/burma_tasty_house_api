<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function create(Request $request) {
        logger($request);

        return response()->json([
            'status' => true
        ], 200);
    }
}
