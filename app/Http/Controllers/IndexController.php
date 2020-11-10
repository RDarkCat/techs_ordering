<?php

namespace App\Http\Controllers;

use App\Models\Machines;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $machines = Machines::all()->random(3);

        return view('index')->with('machines', $machines);
    }
}
