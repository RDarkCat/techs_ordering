<?php

namespace App\Http\Controllers;

use App\Models\Machines;
use Illuminate\Http\Request;

class MachinesController extends Controller
{
    public function index() {

        $machines = Machines::query()
            ->simplePaginate(5);

        return view('machines.index')->with('machines', $machines);
    }

    public function show($id)
    {
        $machine = Machines::query()->find($id);

        if (!empty($machine)) {
            return view('machines.one')->with('machine', $machine);
        } else {
            return redirect()->route('machines.index');
        }
    }
}
