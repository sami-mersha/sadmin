@include('layouts.app')
@extends('layouts.footer')

<div class="max-w-5xl  mx-auto grid grid-cols-2 bg-white mt-40 mb-40">

    <!-- Bagian Kiri -->
    <div class="mr-4 bg-white rounded-lg">

  <!-- Container untuk Pilih Category -->
  <div class="mb-6 p-2 rounded-sm" style="box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1), 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.06);">
  <label for="category" class="block mb-2 text-md font-medium text-black-600">Pilih kategori konser</label>
  <select id="category" class="w-full px-4 py-2 text-sm font-medium text-black-600 border border-white rounded focus:ring focus:ring-indigo-200 mb-3">
    <option value="" class="text-gray-400">Kategori</option>
    <option value="vip">VIP</option>
    <option value="reguler">Reguler</option>
  </select>
</div>


  <!-- Container untuk Atur Jumlah -->
   
  <div class="p-4 rounded-sm" style="box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1), 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.06);">
  <div class="flex items-center justify-between">
    <label for="jumlah" class="text-sm font-medium text-gray-600">Atur Jumlah</label>
    <div class="flex items-center space-x-3">
      <button id="decrease" class="text-lg font-bold text-gray-600 border border-gray-600 rounded">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
</svg>

      </button>
      <input id="jumlah" type="text" value="1" readonly class="w-12 text-center text-gray-800 font-semibold border border-white rounded">
      <button id="increase" class=" text-lg font-bold text-gray-600 border border-gray-600 rounded">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
</svg>

      </button>
    </div>
  </div>
</div>



</div>


    <!-- Bagian Kanan -->
    <div class="p-6 bg-white border border-gray-200 rounded-lg" style="box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1), 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.06);">
    <div  class="w-auto h-60 border border-gray-300 rounded-md">
    <img src="assets/hd2.png" alt="Gambar HD2" class="rounded-md w-full h-full">
    </div>
    <h2 class="mb-6 mt-4 text-lg font-semibold text-gray-800">Tiket Konser Sedjiwa</h2>
      <div class="flex items-start mb-5 space-x-4">
  <!-- Informasi Tanggal -->
  <div class="flex-1 mb-6">
    <div class="flex items-center space-x-2">
      <i class="fa-solid fa-calendar-days text-blue-500"></i>
      <span class="text-gray-800">Tanggal</span>
    </div>
    <strong class="text-black pl-5 block">1 Januari 2025</strong>
  </div>

  <!-- Informasi Waktu -->
  <div class="flex-1">
    <div class="flex items-center space-x-2">
      <i class="fa-solid fa-clock text-blue-500"></i>
      <span class="text-gray-800">Waktu</span>
    </div>
    <strong class="text-black pl-5 block">19:00 WIB</strong>
  </div>

  <!-- Informasi Lokasi -->
  <div class="flex-1">
    <div class="flex items-center space-x-2">
      <i class="fa-solid fa-location-dot text-blue-500"></i>
      <span class="text-gray-800">Lokasi</span>
    </div>
    <strong class="text-black pl-5 block">Jakarta</strong>
  </div>
</div>

      <div class="mb-2">
        <div class="flex justify-between">
          <span class="text-md text-black-600">Harga tiket</span>
          <span class="text-sm text-black-800 font-medium">Rp 10.000</span>
        </div>
        <hr class="border-t-2 border-gray-300 my-2">
      </div>
      <div class="mb-2">
        <div class="flex justify-between">
          <span class="text-md text-black-600">Diskon</span>
          <span class="text-sm text-black-800 font-medium">-Rp 10.000</span>
        </div>
        <hr class="border-t-2 border-gray-300 my-2">

      </div>
      <div class="mb-6">
        <div class="flex justify-between font-semibold">
          <span>Total Pembayaran</span>
          <span>Rp 160.000</span>
        </div>
      </div>
      <button class="mt-4 w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-indigo-700">Bayar Sekarang</button>
    </div>
  </div>
