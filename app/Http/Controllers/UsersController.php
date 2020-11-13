<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {

        $users = User::query()
            ->simplePaginate(10);

        return view('users.index')->with('users', $users);
    }
}
