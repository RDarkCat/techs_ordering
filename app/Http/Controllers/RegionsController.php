<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    public function index() {

        $regions = Regions::query()
            ->simplePaginate(10);

        return view('regions.index')->with('regions', $regions);
    }

    public function show($id)
    {
        $region = Regions::query()->find($id);

        if (!empty($region)) {
            return view('regions.one')->with('region', $region);
        } else {
            return redirect()->route('regions.index');
        }
    }
}
