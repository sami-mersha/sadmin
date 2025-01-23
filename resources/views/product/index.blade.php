@include('layouts.app')

@extends('layouts.footer')

<script src="https://cdn.tailwindcss.com"></script>
  <!-- Container -->
  <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-40 mb-40">


    <!-- Event Content -->
    <div class="flex flex-col md:flex-row">
      <!-- Image Section -->
      <div class="flex-shrink-0 md:w-1/2 ">
        <img src="./assets/konser3.jpg" alt="Event Image" class="w-full h-full object-cover rounded-lg">
      </div>

      <!-- Event Details -->
      <div class=" px-5 md:w-1/2">
    <h2 class="text-lg font-semibold mb-4">Konser Tiket Sedjiwa</h2>
    <ul class="text-sm text-gray-600 space-y-2">
      <div class="mb-4">
      <li>
        📅 <span class=" text-gray-800">Tanggal</span><br>
        <strong class="text-bold">13 Januari 2024 - 15 Januari 2024</strong>
      </li>
      </div>
      <div class="mb-4">
      <li>
        🕒 <span class=" text-gray-800">Waktu</span><br>
        <strong>16:00 - 23:00</strong>
      </li>
      </div>
      <div class="mb-4">
      <li>
        📍 <span class=" text-gray-800">Lokasi</span><br>
        <strong>Lapangan Kosan 662</strong>
      </li>
      </div>
    </ul>
    <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10 mb-2">
        <a href="{{ route('buy-ticket') }}" class="button">beli sekarang</a>
    </button>
        <!-- Description -->
        <h3 class="mt-6 font-semibold text-gray-700">Deskripsi Event</h3>
        <p class="text-gray-600 mt-2 text-sm leading-relaxed">
          Sedjiwa Fest merupakan festival dengan penggabungan musik lokal dan internasional. Tahun ini membawa tema "To Be Happy" dengan sederet musisi yang siap mengguncang panggung dan memberikan pengalaman tak terlupakan.
        </p>
      </div>
    </div>


    <div class="p-6 md:w-1/2">
        <h2 class="text-lg font-semibold mb-4">Konser Tiket Sedjiwa</h2>
        <ul class="text-sm text-gray-600 space-y-2">
            <div>
              <h5 class="text-orange-800 font-semibold">Stok</h5>
            </div>
            <div>
                <h1 class="text-orange-800 font-extrabold text-2xl">1234</h1>
            </div>
          <div class="mb-4">


    <!-- Reviews Section -->
    <button class="mt-5    bg-blue-600 hover:bg-blue-700 text-white py-1 px-20  rounded-md shadow">
        Reviews
      </button>


        <!-- Review Card -->
        <div class="flex items-start space-x-4 mt-20">
          <div class="bg-gray-300 rounded-full h-12 w-12 flex items-center justify-center">
            <span class="text-gray-700 font-bold text-lg">S</span>
          </div>
          <div>
            <p class="font-medium text-gray-800">Sasti Juni</p>
            <p class="text-yellow-500 text-sm">⭐ 4/5</p>
            <p class="text-gray-600 text-sm mt-1">This icon pack is just what I need for my latest project. Love the playful look!</p>
            <!-- Placeholder for thumbnails -->
            <div class="mt-2 flex space-x-2">
              <div class="h-12 w-12 bg-gray-300 rounded-md"></div>
              <div class="h-12 w-12 bg-gray-300 rounded-md"></div>
              <div class="h-12 w-12 bg-gray-300 rounded-md"></div>
            </div>
          </div>
        </div>

        <!-- Repeat the review card -->
        <div class="flex items-start space-x-4">
          <div class="bg-gray-300 rounded-full h-12 w-12 flex items-center justify-center">
            <span class="text-gray-700 font-bold text-lg">S</span>
          </div>
          <div>
            <p class="font-medium text-gray-800">Sasti Juni</p>
            <p class="text-yellow-500 text-sm">⭐ 4/5</p>
            <p class="text-gray-600 text-sm mt-1">This icon pack is just what I need for my latest project. Love the playful look!</p>
            <!-- Placeholder for thumbnails -->
            <div class="mt-2 flex space-x-2">
              <div class="h-12 w-12 bg-gray-300 rounded-md"></div>
              <div class="h-12 w-12 bg-gray-300 rounded-md"></div>
              <div class="h-12 w-12 bg-gray-300 rounded-md"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
