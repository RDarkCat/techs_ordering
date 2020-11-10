<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index() {

        $countries = Country::query()
            ->simplePaginate(10);

        return view('countries.index')->with('countries', $countries);
    }

    public function show($id)
    {
        $country = Country::query()->find($id);

        if (!empty($country)) {
            return view('countries.one')->with('country', $country);
        } else {
            return redirect()->route('countries.index');
        }
    }
}
