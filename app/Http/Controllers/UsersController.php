<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {

        $users = Users::query()
            ->simplePaginate(10);

        return view('users.index')->with('users', $users);
    }
}
