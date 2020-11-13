<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $machines = Machine::all()->random(3);

        return view('index')->with('machines', $machines);
    }
}
