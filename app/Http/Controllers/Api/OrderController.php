<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrder;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
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
        $itemId = $request->input('item_id');

        if (!$itemId) {
            return response()->json([], 404);
        }

        return response()->json($itemId);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrder $request)
    {
        $parameters = $request->all();
        //$order = new Order();
        //$order->fill($parameters);
        //$order->user_id = 1;
        //$order->save();
        Order::create($parameters); //TODO вернуть, когда будет готова регистрация

        return response()->json(['success_text' => 'Ваш заказ принят']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function ordersOfLessor(Request $request)
    {
        $lessor_id = $request->user()->id;
        
        $orders = DB::table('item_user')
            ->join('promos', function ($join) {
                $join->on('item_user.item_id', '=', 'promos.item_id')
                    ->join('orders', function ($join) {
                        $join->on('promos.id', '=', 'orders.promo_id')
                            ->join('users', 'orders.user_id', '=', 'users.id');
                    });
            })
            ->join('items', 'item_user.item_id', '=', 'items.id')
            ->where('item_user.user_id', $lessor_id)
            ->select(
                'items.id as item_id',
                'items.name as item_name',
                'promos.id as promo_id',
                'promos.price_per_hour',
                'promos.price_per_day',
                'orders.id as order_id',
                'orders.delivery_address',
                'orders.contact_phone',
                'orders.comment as orders_comment',
                'orders.count',
                'orders.created_at as orders_date',
                'users.name as renter_name'
            )
            ->get();

        response()->json([
            'orders' => $orders
        ]);
    }
}
