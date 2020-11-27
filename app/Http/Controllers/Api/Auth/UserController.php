<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __constructor ()
    {
        $this->middleware(['auth:api']);
    }

    public function index(Request $request)
    {
        $user = $request->user();

        if(!$user) {
            return response(null, 401);
        }

        return response()->json([
            'email' => $user->email,
            'name' => $user->name
        ]);
    }
    
    public function likes()
    {
        $likes = DB::RAW('SELECT SUM(ul.`like`) AS likes, i.name
        FROM user_like AS ul 
        JOIN users AS u ON u.id = ul.user_id_from
        JOIN users AS i ON i.id = ul.user_id
        GROUP BY ul.user_id');
        
        return response()->json($likes);
    }
}
