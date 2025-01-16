<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konser = Konser::all();
        return view('admin.konser.index', compact('konser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.konser.create');
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
        'image' => 'nullable|string|max:255',
    ], [
        'nama.required' => 'Nama tidak boleh kosong',
        'tanggal.required' => 'Tanggal tidak boleh kosong',
        'jam.required' => 'Jam tidak boleh kosong',
        'jam.date_format' => 'Jam harus dalam format Y-m-d H:i:s',
        'lokasi.required' => 'Lokasi tidak boleh kosong',
        'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        'image.required' => 'Image tidak boleh kosong',

    ]);


    Konser::create([
        'nama' => $request->nama,
        'tanggal' => $request->tanggal,
        'jam' => $request->jam,
        'lokasi' => $request->lokasi,
        'deskripsi' => $request->deskripsi,
        'image' => $request->image,
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
            'image' => 'nullable|string|max:255',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'jam.required' => 'Jam tidak boleh kosong',
            'jam.date_format' => 'Jam harus dalam format Y-m-d H:i:s',
            'lokasi.required' => 'Lokasi tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'image.required' => 'Image tidak boleh kosong',
        ]);


        $konser = Konser::findOrFail($id);


        $konser->update([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'image' => $request->image,
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
