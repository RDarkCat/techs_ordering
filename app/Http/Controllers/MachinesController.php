<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachinesController extends Controller
{
    public function index() {

        $machines = Machine::query()
            ->simplePaginate(5);

        return view('machines.index')->with('machines', $machines);
    }

    public function show($id)
    {
        $machine = Machine::query()->find($id);

        if (!empty($machine)) {
            return view('machines.one')->with('machine', $machine);
        } else {
            return redirect()->route('machines.index');
        }
    }
}
