<?php

namespace App\Http\Controllers;

use App\Models\konser;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $konser = konser::with(['lokasi', 'tiket'])->whereHas('tiket', function ($query) {
            $query->where('jenis_tiket', 'Regular');
        })->with([
                    'tiket' => function ($query) {
                        $query->where('jenis_tiket', 'Regular');
                    }
                ])->findOrFail($id);
        // dd($konser->toArray());
        return view('product.show',compact('konser'));
    }
    public function buy($id)
    {
        $konser = Konser::with('tiket')->findOrFail($id);
        //  dd($konser->toArray());
        return view('product.buy', compact('konser'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
