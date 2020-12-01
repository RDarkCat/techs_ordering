<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $parent_id = $request->input('parent_id');

        if (!$parent_id) {
            $parent_id = null;
        }

        $parents = Tag::orderBy('name')
            ->get();

        return view('tags.tagCreation', [
            'parent_id' => $parent_id,
            'parents' => $parents
        ]);
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

        $tag = Tag::create($parameters);
        
        return redirect(route('adminPanel.tags.edit', ['tag' => $tag->id]))
            ->with('success_text', 'Тэг создан');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        $parents = Tag::where('id', '<>', $tag->id)
            ->orderBy('name')
            ->get();
        return view('tags.tagUnit', ['tag' => $tag, 'parents' => $parents]);
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
        $tag = Tag::find($id);
        $tag->fill($request->input());
        $tag->save();

        return redirect(route('adminPanel.tags.edit', ['tag' => $tag->id]))
            ->with('success_text', 'Тэг сохранён');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(Tag $tag)
    {
        $tag->live = 0;
        $tag->save();

        return redirect(route('adminPanel.tagsByParent', ['parent_id' => $tag->parent_id]))
            ->with('success_text', 'Тэг помечен как неактивный');
    }
}
