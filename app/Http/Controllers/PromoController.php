<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Promo;
use App\Models\Region;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index() {

        $promos = Promo::with('item')
            ->with('item.characteristic')
            ->where('status', true)
            ->simplePaginate(5);

        $regions = Region::all();

        return view('promos.index')->with([
            'regions' => $regions,
            'promos' => $promos
        ]);
    }

    public function byCategory() {

    }

    public function show($id)
    {
        $promo = Promo::with('item')
            ->with('item.characteristic')
            ->find($id);

        if (!empty($promo)) {
            return view('promos.one')->with('promo', $promo);
        } else {
            return redirect()->route('promos.index');
        }
    }
}
