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
        'nama' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'jam' => 'required|date_format:Y-m-d H:i:s',
        'lokasi' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:1000',
        'kuota_tiket' => 'required|integer|min:1',
        'image' => 'nullable|string|max:255',
        'detail' => 'required|exists:details,id',
    ], [
        'nama.required' => 'Nama tidak boleh kosong',
        'tanggal.required' => 'Tanggal tidak boleh kosong',
        'jam.required' => 'Jam tidak boleh kosong',
        'jam.date_format' => 'Jam harus dalam format Y-m-d H:i:s',
        'lokasi.required' => 'Lokasi tidak boleh kosong',
        'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        'kuota_tiket.required' => 'Kuota tiket tidak boleh kosong',
        'kuota_tiket.min' => 'Kuota tiket minimal 1',
        'image.required' => 'Image tidak boleh kosong',
        'detail.required' => 'Detail tidak boleh kosong',
        'detail.exists' => 'Detail harus merujuk pada ID yang valid di tabel details',
    ]);


    Konser::create([
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'jam' => $request->jam,
        'lokasi' => $request->lokasi,
        'deskripsi' => $request->deskripsi,
        'kuota_tiket' => $request->kuota_tiket,
        'image' => $request->image,
        'detail' => $request->detail,
    ]);


    return redirect()->route('konser.index')->with('success', 'Konser berhasil ditambahkan.');
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
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:Y-m-d H:i:s',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'kuota_tiket' => 'required|integer|min:1',
            'image' => 'nullable|string|max:255',
            'detail' => 'required|exists:details,id',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'jam.required' => 'Jam tidak boleh kosong',
            'jam.date_format' => 'Jam harus dalam format Y-m-d H:i:s',
            'lokasi.required' => 'Lokasi tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'kuota_tiket.required' => 'Kuota tiket tidak boleh kosong',
            'kuota_tiket.min' => 'Kuota tiket minimal 1',
            'image.required' => 'Image tidak boleh kosong',
            'detail.required' => 'Detail tidak boleh kosong',
            'detail.exists' => 'Detail harus merujuk pada ID yang valid di tabel details',
        ]);


        $konser = Konser::findOrFail($id);


        $konser->update([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'kuota_tiket' => $request->kuota_tiket,
            'image' => $request->image,
            'detail' => $request->detail,
        ]);


        return redirect()->route('konser.index')->with('success', 'Konser berhasil diperbarui.');
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
