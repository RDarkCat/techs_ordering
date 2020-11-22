<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $items = Item::all()->random(3);

        return view('welcome')->with('items', $items);
    }
}
