<?php

namespace App\Http\Controllers;

use App\Models\konser;
use App\Models\lokasi;
use Illuminate\Http\Request;

class LainyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $city = $request->input('city'); // Lokasi yang dipilih
        $search = $request->input('search'); // Nama konser yang dicari

        $konsers = Konser::with(['lokasi', 'tiket'])->whereHas('tiket', function ($query) {
            $query->where('jenis_tiket', 'Regular');
        });

        if ($search) {
            $konsers->where('nama', 'like', '%' . $search . '%');
        }

        if ($city) {
            $konsers->whereHas('lokasi', function ($query) use ($city) {
                $query->where('location', $city);
            });
        }

        $konsers = $konsers->get();

        $locations = Lokasi::select('location')->distinct()->get();
        $isEmpty = $city && $konsers->isEmpty();

        return view('lainya.index', compact('konsers', 'locations', 'city', 'isEmpty'));
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
        //
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
