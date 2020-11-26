<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Promo;
use App\Models\Tag;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::with('item')
            ->with('item.characteristic')
            ->where('status', true)
            ->simplePaginate(10);

        return response()->json($promos, 200);
    }

    public function byCategory(Request $request)
    {
        $promos = Promo::where('status', true)->where('item_id', function ($query) use ($request) {
            $query->select('item_id')
                ->where('status', true)
                ->from('items as i')
                ->join('item_category as ic', 'i.id', '=', 'ic.item_id')
                ->join('categories as c', 'c.id', '=', 'ic.category_id')
                ->where('c.id', $request->only(['category']));
        })->simplePaginate(5);

        return response()->json($promos);
    }

    public function byPrice(Request $request)
    {
        $promos = Promo::where('price_per_hour', '>', 1000)
        ->where('price_per_hour', '<', 4000)
        ->where('status', true)
        ->where('item_id', function ($query) use ($request) {
            $query->select('item_id')
            ->from('items as i')
            ->join('item_category as ic', 'i.id', '=', 'ic.item_id')
            ->join('categories as c', 'c.id', '=', 'ic.category_id')
            ->where('c.id', $request->only(['category']));
        })->simplePaginate(5);

        return response()->json($promos);
    }

    public function sortByPrice(Request $request)
    {
        $promos = Promo::where('status', true)
        ->where('item_id', function ($query) use ($request) {
            $query->select('item_id')
            ->from('items as i')
            ->join('item_category as ic', 'i.id', '=', 'ic.item_id')
            ->join('categories as c', 'c.id', '=', 'ic.category_id')
            ->where('c.id', $request->only(['category']));
        })->orderBy('price_per_hour')->simplePaginate(5);

        return response()->json($promos);
    }

    public function show($id)
    {
        $promo = Promo::with('item')
            ->with('item.characteristic')
            ->where('status', true)
            ->find($id);

        if (!empty($promo)) {
            return response()->json($promo, 200);
        } else {
            return response(null, 404);
        }
    }

    public function categories()
    {
        $categories = Category::all()
            ->where('live', true);

        $categories = $this->buildTree($categories);

        if (!empty($categories)) {
            return response()->json($categories, 200);
        } else {
            return response(null, 404);
        }
    }

    public function tags()
    {
        $tags = Tag::all()
            ->where('live', true);

        $tags = $this->buildTree($tags);

        if (!empty($tags)) {
            return response()->json($tags, 200);
        } else {
            return response(null, 404);
        }
    }

    public function buildTree($items)
    {
        $grouped = $items->groupBy('parent_id');

        foreach ($items as $item) {
            if ($grouped->has($item->id)) {
                $item->children = $grouped[$item->id];
            }
        }

        return $items->where('parent_id', null);
    }


}

