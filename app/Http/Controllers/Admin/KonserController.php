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
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:Y-m-d H:i:s',
            'lokasi' => 'required|string|max:255',
            'kuota_tiket' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'detail' => 'required|exists:details,id',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'jam.required' => 'Jam tidak boleh kosong',
            'jam.date_format' => 'Jam harus dalam format Y-m-d H:i:s',
            'lokasi.required' => 'Lokasi tidak boleh kosong',
            'kuota_tiket.required' => 'Kuota tiket tidak boleh kosong',
            'kuota_tiket.min' => 'Kuota tiket minimal 1',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'Format gambar harus jpeg, png, atau jpg',
            'image.max' => 'Ukuran gambar maksimal 2MB',
            'detail.required' => 'Detail tidak boleh kosong',
            'detail.exists' => 'Detail harus merujuk pada ID yang valid di tabel details',
        ]);


        $path = $request->file('image') ? $request->file('image')->store('images', 'public') : null;


        Konser::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi,
            'kuota_tiket' => $request->kuota_tiket,
            'image' => $path,
            'detail' => $request->detail,
        ]);


        return redirect()->route('admin.konser.index')->with('success', 'Konser berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $konser = Konser::findOrFail($id);
        return view('admin.konser.edit', compact('konser'));
    }

    public function update(Request $request, $id)
{
    
    $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:1000',
        'tanggal' => 'required|date',
        'jam' => 'required|date_format:Y-m-d H:i:s',
        'lokasi' => 'required|string|max:255',
        'kuota_tiket' => 'required|integer|min:1',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'detail' => 'required|exists:details,id',
    ], [
        'nama.required' => 'Nama tidak boleh kosong',
        'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        'tanggal.required' => 'Tanggal tidak boleh kosong',
        'jam.required' => 'Jam tidak boleh kosong',
        'jam.date_format' => 'Jam harus dalam format Y-m-d H:i:s',
        'lokasi.required' => 'Lokasi tidak boleh kosong',
        'kuota_tiket.required' => 'Kuota tiket tidak boleh kosong',
        'kuota_tiket.min' => 'Kuota tiket minimal 1',
        'image.image' => 'File harus berupa gambar',
        'image.mimes' => 'Format gambar harus jpeg, png, atau jpg',
        'image.max' => 'Ukuran gambar maksimal 2MB',
        'detail.required' => 'Detail tidak boleh kosong',
        'detail.exists' => 'Detail harus merujuk pada ID yang valid di tabel details',
    ]);


    $konser = Konser::findOrFail($id);


    $data = $request->all();


    if ($request->hasFile('image')) {

        if ($konser->image && Storage::disk('public')->exists($konser->image)) {
            Storage::disk('public')->delete($konser->image);
        }


        $path = $request->file('image')->store('images', 'public');
        $data['image'] = $path;
    }


    $konser->update([
        'nama' => $data['nama'],
        'deskripsi' => $data['deskripsi'],
        'tanggal' => $data['tanggal'],
        'jam' => $data['jam'],
        'lokasi' => $data['lokasi'],
        'kuota_tiket' => $data['kuota_tiket'],
        'image' => $data['image'] ?? $konser->image,
        'detail' => $data['detail'],
    ]);


    return redirect()->route('admin.konser.index')->with('success', 'Konser berhasil diperbarui.');
}


    public function destroy($id)
    {
        $konser = Konser::findOrFail($id);
        // Hapus gambar jika ada
        if ($konser->image && Storage::disk('public')->exists($konser->image)) {
            Storage::disk('public')->delete($konser->image);
        }
        $konser->delete();


        return redirect()->route('admin.konser.index')->with('success', 'hewan dihapus dan ID diurutkan ulang dengan sukses.');
    }
}
