<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __constructor () {
        $this->middleware(['auth:api']);
    }

    public function index(Request $request) {
        $user = $request->user();

        if(!$user) {
            return response(null, 401);
        }

        return response()->json([
            'email' => $user->email,
            'name' => $user->name
        ]);
    }
}
