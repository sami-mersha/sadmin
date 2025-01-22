<?php

namespace App\Http\Controllers\Admin;

use App\Models\Konser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\lokasi;
use Illuminate\Support\Facades\Storage;


class KonserController extends Controller
{
    public function index()
    {
        $search = request()->input('search');
        if ($search){
            $konsers = konser::where('nama','like','%'.$search.'%')->get();
        }else {
            $konsers = Konser::with('lokasi')->get();
        }
        // dd($konsers->toArray()); // Load relasi promo
        return view('admin.konser.index', compact('konsers'));
    }



    public function create()
    {
        $lokasi = lokasi::all();
        return view('admin.konser.create',compact('lokasi'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255|unique:konsers,nama',
            'deskripsi' => 'required|string|max:1000',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i', // Ubah validasi jam
            'lokasi_id' => 'required|exists:lokasis,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            
            'nama.required' => 'Nama tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'jam.required' => 'Jam tidak boleh kosong',
            'jam.date_format' => 'Jam harus dalam format H:i',
            'lokasi.required' => 'Lokasi tidak boleh kosong',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'Format gambar harus jpeg, png, atau jpg',
            'image.max' => 'Ukuran gambar maksimal 2MB',
        ]);


        $path = $request->file('image') ? $request->file('image')->store('images', 'public') : null;


        Konser::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi_id' => $request->lokasi_id,
            'image' => $path,
        ]);


        return redirect()->route('admin.konser.index')->with('success', 'Konser berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // return redirect()->route('admin.konser.edit');
        $konser = Konser::findOrFail($id);
        $lokasi = Lokasi::all();
        return view('admin.konser.edit', compact('konser', 'lokasi'));
    }

    public function update(Request $request, $id)
{

    $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:1000',
        'tanggal' => 'required|date',
        'jam' => 'required', // Ubah validasi jam
        'lokasi_id' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ], [
        'nama.required' => 'Nama tidak boleh kosong',
        'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        'tanggal.required' => 'Tanggal tidak boleh kosong',
        'jam.required' => 'Jam tidak boleh kosong',
        'jam.date_format' => 'Jam harus dalam format H:i',
        'lokasi.required' => 'Lokasi tidak boleh kosong',
        'image.image' => 'File harus berupa gambar',
        'image.mimes' => 'Format gambar harus jpeg, png, atau jpg',
        'image.max' => 'Ukuran gambar maksimal 2MB',
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
        'lokasi_id' => $data['lokasi_id'],
        'image' => $data['image'] ?? $konser->image,
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


        return redirect()->route('admin.konser.index')->with('success', 'konser sukses dihapus.');
    }
}
