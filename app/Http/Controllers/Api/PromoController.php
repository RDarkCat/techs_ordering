<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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

        return response()->json($promos);
    }

    public function byCategory(Request $request)
    {
        $promos = Promo::where('status', true)->where('item_id', function ($query) use ($request) {
            $query->select('item_id')
            ->from('items as i')
            ->join('item_category as ic', 'i.id', '=', 'ic.item_id')
            ->join('categories as c', 'c.id', '=', 'ic.category_id')
            ->where('c.id', $request->only(['category']));
        })->simplePaginate(5);

        $regions = Region::all();
        $categories = Category::all();

        return view('promos.index')->with([
            'regions' => $regions,
            'promos' => $promos,
            'categories' => $categories
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

