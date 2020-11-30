<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Promo;
use App\Models\Settlement;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function tagsByParent(int $parent_id = 0)
    {
        if ($parent_id === 0) { {
                $parent_id = null;
            }
        }

        $tags = Tag::where('parent_id', $parent_id)
            ->where('live', 1)
            ->orderBy('name')
            ->get();

        return view('tags.list', [
            'tags' => $tags,
            'parent_id' => $parent_id
        ]);
    }

    public function promosIndex(Request $request)
    {
        $lessor_id = $request->input('lessor_id');

        $promos = DB::table('promos')
            ->join('items', 'promos.item_id', '=', 'items.id')
            ->join('item_user', 'item_user.item_id', '=', 'promos.item_id')
            ->when($lessor_id, function ($query, $lessor_id) {
                return $query->where('item_user.user_id', $lessor_id);
            })
            ->join('users', 'item_user.user_id', '=', 'users.id')
            ->where('status', 1)
            ->select(
                'items.name as item_name',
                'users.name as lessor_name',
                'promos.created_at',
                'promos.updated_at',
                'promos.id as promo_id'
            )
            ->simplePaginate(10);

        $lessors = DB::table('promos')
            ->join('item_user', 'item_user.item_id', '=', 'promos.item_id')
            ->join('users', 'item_user.user_id', '=', 'users.id')
            ->where('status', 1)
            ->select(
                'users.id as lessor_id',
                'users.name as lessor_name'
            )
            ->distinct()
            ->orderBy('users.name')
            ->get();

        return view('promos.indexAdmin')->with([
            'promos' => $promos,
            'lessors' => $lessors,
            'parameters' => $request->input()
        ]);
    }

    public function itemsIndex(Request $request)
    {
        $lessor_id = $request->input('lessor_id');

        $items = DB::table('items')
            ->join('item_user', 'item_user.item_id', '=', 'items.id')
            ->when($lessor_id, function ($query, $lessor_id) {
                return $query->where('item_user.user_id', $lessor_id);
            })
            ->join('users', 'item_user.user_id', '=', 'users.id')
            ->join('settlements', 'items.settlement_id', '=', 'settlements.id')
            ->select(
                'items.id as item_id',
                'items.name as item_name',
                'users.name as lessor_name',
                'items.created_at',
                'items.updated_at',
                'settlements.name as settlement_name'
            )
            ->whereNull('deleted_at')
            ->simplePaginate(10);

        $lessors = DB::table('items')
            ->join('item_user', 'item_user.item_id', '=', 'items.id')
            ->join('users', 'item_user.user_id', '=', 'users.id')
            ->select(
                'users.id as lessor_id',
                'users.name as lessor_name'
            )
            ->distinct()
            ->orderBy('users.name')
            ->get();

        return view('items.indexAdmin')->with([
            'items' => $items,
            'lessors' => $lessors,
            'parameters' => $request->input()
        ]);
    }
}
