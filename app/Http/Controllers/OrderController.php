<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($user)
    {
        // return response()->json(['mes'=>$user]);
        $orders= Order::with(['items.product'])->where('user_id',$user)->get();
        return new OrderResource($orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email'=>"email|required",
            "phoneNumber"=>"required|string",
            "payment"=>"required|string",
            "address"=>'required|string',
            'items' => 'required|array', // Az items egy tömb legyen
            'items.*.product_id' => 'required|exists:products,id', // Minden terméknek léteznie kell a products táblában
            'items.*.amount' => 'required|integer|min:1', // A mennyiség legyen legalább 1
        ]);

        $order = Order::create([
            'user_id' => $request->user_id ?? 0, // A bejelentkezett felhasználó azonosítója
            'email'=>$request->email,
            'phoneNumber'=>$request->phoneNumber,
            'address'=>$request->address,
            'payment'=>$request->payment,
        ]);

        foreach ($validatedData['items'] as $item) {
            OrderItem::create([
                'order_id' => $order->id, // A létrehozott rendelés azonosítója
                'product_id' => $item['product_id'], // A termék azonosítója
                'amount' => $item['amount'], // A mennyiség
            ]);
        }

        return response()->json([
            'message' => 'Rendelés sikeresen létrehozva!',
            'order' => $order->load('items.product'), // A rendelést és a hozzá tartozó tételeket visszaadjuk
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
