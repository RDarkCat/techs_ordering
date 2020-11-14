<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {

        $items = Item::query()
            ->simplePaginate(5);

        return view('items.index')->with('items', $items);
    }

    public function show($id)
    {
        $item = Item::query()->find($id);

        if (!empty($item)) {
            return view('item.one')->with('item', $item);
        } else {
            return redirect()->route('items.index');
        }
    }
}
