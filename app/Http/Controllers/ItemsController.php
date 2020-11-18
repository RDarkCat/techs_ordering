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
        $item = Item::create($parameters);
        $item->characteristic()->create($parameters);

        foreach($parameters['tag_ids'] as $tag_id)
        {
            $item->tags()->attach($tag_id);
        }

        foreach ($request->file() as $images) {
            foreach ($images as $image) {
                $path = $image->store('items_files');
                $media = new Media();
                $media->item_id = $item->id;
                $media->filename = $path;

                $metadata = '{"name":"' . $image->getClientOriginalName() . '", "extension" :"' . $image->extension() . '"}';
                $media->metadata = $metadata;

                $media->save();
            }
        }

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

    public function itemsOfUser(int $user_id)
    {
        $user = User::find($user_id);
        $items = $user->items();
        dd($user);
    }
}
