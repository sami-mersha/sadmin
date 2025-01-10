<?php

namespace App\Http\Controllers;

use App\Models\konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konser = konser::all();
        return view('konser.index', compact('konser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('konser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'kuota_tiket' => 'required',
            'image' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'deskripsi.required' => 'Email tidak boleh kosong',
            'tanggal.required' => 'Telp tidak boleh kosong',
            'lokasi.required' => 'lokasi tidak boleh kosong',
            'kuota_tiket.required' => 'tiket tidak boleh kosong',
            'image.required' => 'image tidak boleh kosong',
        ]);

        // Simpan data
        Konser::create($request->all());

        // Redirect jika berhasil
        return redirect()->route('konser.index')->with('success', 'konser berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(konser $konser)
    {
        return view('konser.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(konser $konser)
    {
        return view('konser.edit', compact('konser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, konser $konser)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'kuota_tiket' => 'required',
            'image' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'deskripsi.required' => 'Email tidak boleh kosong',
            'tanggal.required' => 'Telp tidak boleh kosong',
            'lokasi.required' => 'lokasi tidak boleh kosong',
            'kuota_tiket.required' => 'tiket tidak boleh kosong',
            'image.required' => 'image tidak boleh kosong',
        ]);

        $konser->update($request->all());
        return redirect()->route('konser.index')->with('success', 'konsers updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(konser $konser)
    {
        $konser->delete();
        return redirect()->route('konser.index')->with('success', 'konser dihapus dan No diurutkan ulang dengan sukses.');
    }

}
