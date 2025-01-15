<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tiket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TiketController extends Controller
{
    public function index()
    {
        $tiket = Tiket::with('konser')->get();
        return view('admin.tiket.index', compact('tiket'));
    }

    public function create()
    {
        return view('admin.tiket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'konser_id' => 'required|exists:konser,id',
            'jenis_tiket' => 'required|string|max:255',
            'harga_tiket' => 'required|integer|min:0',
            'jumlah_tiket' => 'required|integer|min:1',
        ]);

        Tiket::create([
            'konser_id' => $request->konser_id,
            'jenis_tiket' => $request->jenis_tiket,
            'harga_tiket' => $request->harga_tiket,
            'jumlah_tiket' => $request->jumlah_tiket,
        ]);

        return redirect()->route('admin.tiket.index')->with('success', 'Tiket berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('admin.tiket.edit', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'konser_id' => 'required|exists:konser,id',
            'jenis_tiket' => 'required|string|max:255',
            'harga_tiket' => 'required|integer|min:0',
            'jumlah_tiket' => 'required|integer|min:1',
        ]);

        $tiket = Tiket::findOrFail($id);
        $tiket->update([
            'konser_id' => $request->konser_id,
            'jenis_tiket' => $request->jenis_tiket,
            'harga_tiket' => $request->harga_tiket,
            'jumlah_tiket' => $request->jumlah_tiket,
        ]);

        return redirect()->route('admin.tiket.index')->with('success', 'Tiket berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();

        return redirect()->route('admin.tiket.index')->with('success', 'Tiket berhasil dihapus.');
    }
}
