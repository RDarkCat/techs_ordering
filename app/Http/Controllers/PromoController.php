<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Promo;
use App\Models\Category;
use App\Models\Region;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::with('item')
            ->with('item.characteristic')
            ->where('status', true)
            ->simplePaginate(5);

        $regions = Region::all();
        $categories = Category::all();
        
        return view('promos.index')->with([
            'regions' => $regions,
            'promos' => $promos,
            'categories' => $categories
        ]);
    }

    public function byCategory(Request $request)
    {
        $items = Item::with('category')->find($request->only(['category']))->first();

        dd($items, Promo::where('item_id', '=', $items->id));
        
        return view('promos.index')->with([
            'promos' => $items,
        ]);
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
