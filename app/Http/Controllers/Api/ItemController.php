<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Settlement;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {

        $items = Item::with('characteristic')
            ->simplePaginate(5);

        return response()->json($items);
    }

    public function show($id)
    {
        $item = Item::with('characteristic')->find($id);

        return response()->json($item);        
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

        return response()->json($item->id);
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
            return response()->json([], 404);
        }

        $settlements = Settlement::orderBy('name')->get();
        $tags = Tag::all();
        $tags->groupBy('parent_id');

        return response()->json([
            'settlements' => $settlements,
            'tags' => $tags
        ]);
    }

    public function usersItems(Request $request)
    {
        // $user_id = $request->input('user_id');
        $user_id = 1;

        if (!$user_id) {
            return response()->json([], 404);
        }

        $user = User::find($user_id);
        $items = $user->items()->simplePaginate(5);
        
        return response()->json($items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::with('characteristic')->find($id);
        $settlements = Settlement::orderBy('name')->get();
        $tags = Tag::all();
        $tags->groupBy('parent_id');

        return response()->json([
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

        return response()->json(['items' => $item->id]);
    }

    public function delete(Item $item)
    {
    }
    
    public function likes(Request $request)
    {
        $likes = DB::RAW('SELECT SUM(il.`like`) as likes, i.name
        FROM item_like AS il
        JOIN users AS u ON u.id = il.user_id_from
        JOIN items AS i ON i.id = il.item_id
        GROUP BY il.item_id');
        
        return response()->json($likes);
    }
}
