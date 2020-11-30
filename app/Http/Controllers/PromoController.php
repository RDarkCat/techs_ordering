<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Category;
use App\Models\Region;
use App\Models\User;
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

    public function byPrice(Request $request)
    {
        $promos = Promo::where('price_per_hour', '>', 1000)->where('price_per_hour', '<', 4000)->where('status', true)->where('item_id', function ($query) use ($request) {
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

    public function sortByPrice(Request $request)
    {
        $promos = Promo::where('status', true)->where('item_id', function ($query) use ($request) {
            $query->select('item_id')
                ->from('items as i')
                ->join('item_category as ic', 'i.id', '=', 'ic.item_id')
                ->join('categories as c', 'c.id', '=', 'ic.category_id')
                ->where('c.id', $request->only(['category']));
        })->orderBy('price_per_hour')->simplePaginate(5);

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Promo $promo)
    {
        $lessor = $promo->item->lessor->first();

        return view('promos.promoUnit', [
            'promo' => $promo,
            'lessor' => $lessor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $promo = Promo::find($id);
        $promo->fill($request->input());
        $promo->save();

        return redirect(route('adminPanel.promos.edit', ['promo' => $promo->id]))
            ->with('success_text', 'Объявление сохранёно');
    }

    public function delete(Promo $promo)
    {
        $promo->status = 0;
        $promo->save();

        return redirect(route('adminPanel.promosIndex'))
            ->with('success_text', 'Объявление помечено как неактивное');
    }
}
