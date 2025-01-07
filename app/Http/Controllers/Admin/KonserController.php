<?php

namespace App\Http\Controllers\Admin;

use App\Models\konser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KonserController extends Controller
{
    public function index()
    {
        $konser = konser::all();
        return view('admin.konser.index', compact('konser'));
    }

    public function create()
    {
        return view('admin.konser.create');
    }

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

        $path = $request->file('image')->store('images', 'public');

        // Simpan data
        Konser::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'kuota_tiket' => $request->kuota_tiket,
            'image' => $path,
        ]);

        // Redirect jika berhasil
        return redirect()->route('admin.konser.index')->with('success', 'konser berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $konser=Konser::findOrfail($id);
        return view('admin.konser.edit', compact('konser'));
    }

    public function update(Request $request, $id)
    {

        // dd($request);
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',
            'kuota_tiket' => 'required',
            'image' => 'nullable',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'deskripsi.required' => 'Email tidak boleh kosong',
            'tanggal.required' => 'Telp tidak boleh kosong',
            'lokasi.required' => 'lokasi tidak boleh kosong',
            'kuota_tiket.required' => 'tiket tidak boleh kosong',
        ]);

        $konser = konser::findOrFail($id);

        $data = $request->all();
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($konser->image && Storage::disk('public')->exists($konser->image)) {
                Storage::disk('public')->delete($konser->image);
            }

            // Store the new image
            $path = $request->file('image')->store('images', 'public');
            // $hewan->image = $path;
            $data['image'] = $path;
        }
        $konser->update($data);
        return redirect()->route('admin.konser.index')->with('success', 'konser berhasil diperbarui.');
    }

    public function destroy($id)
    {
       $konser=Konser::findOrFail($id);
        // Hapus gambar jika ada
        if ($konser->image && Storage::disk('public')->exists($konser->image)) {
            Storage::disk('public')->delete($konser->image);
        }
        $konser->delete();


        return redirect()->route('admin.konser.index')->with('success', 'hewan dihapus dan ID diurutkan ulang dengan sukses.');
    }


}
