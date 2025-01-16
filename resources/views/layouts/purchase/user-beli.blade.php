@include('layouts.app')
@extends('layouts.footer')

<div class="grid grid-cols-2 gap-4 p-8 bg-gray-100 mt-40 mb-40">
    <!-- Bagian Kiri -->
    <div class="p-6 bg-white border border-gray-200 rounded-lg">
      <h2 class="mb-4 text-lg font-semibold text-gray-800">Pilih Category Konser</h2>
      <div class="mb-6">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-600">Category</label>
        <select id="category" class="w-full px-4 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded focus:ring focus:ring-indigo-200">
          <option value="" class="text-gray-400">Pilih Kategori</option>
          <option value="vip">VIP</option>
          <option value="reguler">Reguler</option>
        </select>
      </div>
      <div>
        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-600">Atur Jumlah</label>
        <div class="flex items-center space-x-3">
          <button id="decrease" class="px-3 py-1 text-lg font-bold text-gray-600 bg-gray-200 rounded">-</button>
          <input id="jumlah" type="text" value="1" readonly class="w-12 text-center text-gray-800 font-semibold border border-gray-300 rounded">
          <button id="increase" class="px-3 py-1 text-lg font-bold text-gray-600 bg-gray-200 rounded">+</button>
        </div>
      </div>
    </div>

    <!-- Bagian Kanan -->
    <div class="p-6 bg-white border border-gray-200 rounded-lg">
      <h2 class="mb-4 text-lg font-semibold text-gray-800">Tiket Konser Sedjiwa</h2>
      <div class="flex items-start mb-4 space-x-4">
        <img src="https://via.placeholder.com/100" alt="Gambar Tiket" class="w-20 h-20 border border-gray-300 rounded-md">
        <p class="text-sm text-gray-600">
          aohsiwgdsidknwkhd<br>
          dddddddddddddddddddd<br>
          dddddddddddddddddddd
        </p>
      </div>
      <div class="mb-2">
        <div class="flex justify-between">
          <span class="text-sm text-gray-600">Total Biaya Layanan</span>
          <span class="text-sm text-gray-800 font-medium">Rp 10.000</span>
        </div>
      </div>
      <div class="mb-2">
        <div class="flex justify-between">
          <span class="text-sm text-gray-600">Diskon</span>
          <span class="text-sm text-gray-800 font-medium">-Rp 10.000</span>
        </div>
      </div>
      <div class="mb-6">
        <div class="flex justify-between font-semibold">
          <span>Total Pembayaran</span>
          <span>Rp 160.000</span>
        </div>
      </div>
      <button class="w-full px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Bayar Sekarang</button>
    </div>
  </div>
