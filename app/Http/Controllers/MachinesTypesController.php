<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use App\Models\MachineType;
use Illuminate\Http\Request;

class MachinesTypesController extends Controller
{
    public function index() {

        $machinesTypes = MachineType::query()
            ->simplePaginate(10);

        return view('machinesTypes.index')->with('machinesTypes', $machinesTypes);
    }

    public function show($id)
    {
        $machineType = MachineType::query()->find($id);

        if (!empty($machineType)) {
            return view('machinesTypes.one')->with('machineType', $machineType);
        } else {
            return redirect()->route('machinesTypes');
        }
    }
}
