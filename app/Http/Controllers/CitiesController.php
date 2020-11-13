<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index() {

        $cities = City::query()
            ->simplePaginate(10);

        return view('cities.index')->with('cities', $cities);
    }

    public function show($id)
    {
        $city = City::query()->find($id);

        if (!empty($city)) {
            return view('cities.one')->with('city', $city);
        } else {
            return redirect()->route('cities.index');
        }
    }
}
