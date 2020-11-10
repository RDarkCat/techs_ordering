<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index() {

        $countries = Countries::query()
            ->simplePaginate(10);

        return view('countries.index')->with('countries', $countries);
    }

    public function show($id)
    {
        $country = Countries::query()->find($id);

        if (!empty($country)) {
            return view('countries.one')->with('country', $country);
        } else {
            return redirect()->route('countries.index');
        }
    }
}
