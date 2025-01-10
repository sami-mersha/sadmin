<?php

namespace App\Http\Controllers;

use App\Models\order;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = order::all(); 
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiket.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData =$request->validate([
            'user_id' => 'required|exists:user,id',
            'tiket_id' => 'required|exists:tiket,id',
            'jumlah_tiket' => 'required|integer|min:0',
            'harga_total' => 'required|decimal|min:0',
            'promo' => 'required|string|max:255',
        ]);

        $order = new Order();
        $order->user_id = $validatedData['user_id'];
        $order->tiket_id = $validatedData['tiket_id'];
        $order->jumlah_tiket = $validatedData['jumlah_tiket'];
        $order->harga_total = $validatedData['harga_total'];
        $order->promo = $validatedData['promo'];
        $order->save();

        return redirect()->route('order.index')->with('success', 'orders updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        return view('order.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        return view('order.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'tiket_id' => 'required|exists:tikets,id',
            'jumlah_tiket' => 'required|integer|min:1',
            'harga_total' => '  bbryyrequired|numeric|min:0',
            'promo' => 'nullable|string|max:255',
        ]);

        $order->user_id = $validatedData['user_id'];
        $order->tiket_id = $validatedData['tiket_id'];
        $order->jumlah_tiket = $validatedData['jumlah_tiket'];
        $order->harga_total = $validatedData['harga_total'];
        $order->promo = $validatedData['promo'] ?? null;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
    try{
        $order->delete();
        return redirect()->back()->with('success','deleted');
    }catch(Exception){
        return redirect()->back()->with('Error', ['Data cannot be deleted due to an error']);
    }
    }
}
