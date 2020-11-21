<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Media;
use App\Models\Region;
use App\Models\Settlement;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {


        $items = Item::with('characteristic')
            ->simplePaginate(5);

        $regions = Region::all();

        return view('items.index')->with([
            'items' => $items,
            'regions' => $regions
        ]);
    }

    public function byCategory()
    {
    }

    public function show($id)
    {
        $item = Item::with('characteristic')->find($id);

        if (!empty($item)) {
            return view('items.one')->with('item', $item);
        } else {
            return redirect()->route('items.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parameters = $request->input();
        $user_id = $parameters['user_id'];
        if (!$user_id) {
            redirect('home');
        }

        $item = Item::create($parameters);
        $item->saveRelations($parameters, $request->file(), $user_id);

        return redirect(route('items.show', ['items' => $item->id]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id = $request->input('user_id');
        if (!$user_id) {
            redirect('home');
        }

        $settlements = Settlement::orderBy('name')->get();
        $tags = Tag::all();
        $tags->groupBy('parent_id');

        return view('items.new', [
            'settlements' => $settlements,
            'tags' => $tags
        ]);
    }

    public function usersItems(Request $request)
    {
        // $user_id = $request->input('user_id');
        $user_id = 1;

        if (!$user_id) {
            return redirect()->route('home');
        }

        $user = User::find($user_id);
        $items = $user->items()->simplePaginate(5);
        $regions = Region::all();
        return view('items.index', [
            'items' => $items,
            'regions' => $regions
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $item = Item::with('characteristic')->find($id);
        $settlements = Settlement::orderBy('name')->get();
        $tags = Tag::all();
        $tags->groupBy('parent_id');

        return view('items.edit', [
            'item' => $item,
            'settlements' => $settlements,
            'tags' => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $parameters = $request->input();
        $item->fill($parameters);
        $item->save();
        $item->saveRelations($parameters, $request->file());

        return redirect(route('items.show', ['items' => $item->id]));
    }

    public function delete(int $id)
    {
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('items.usersItems');
    }
}
