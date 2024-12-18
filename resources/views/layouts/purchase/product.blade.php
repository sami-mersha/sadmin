@include('layouts.app')

@extends('layouts.footer')

<script src="https://cdn.tailwindcss.com"></script>
  <!-- Container -->
  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
    <!-- Header Section -->
    <div class="relative mb-40">
      <img src="https://via.placeholder.com/1000x400" alt="Event Banner" class="w-full object-cover h-64">
      <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t from-black/80 to-transparent text-white w-full">
        <h1 class="text-2xl font-bold">Konser 12 Tahun NDX AKA</h1>
        <p class="text-sm">Yogyakarta | NDX AKA</p>
      </div>
    </div>

    <!-- Event Details -->
    <div class="p-6">
      <h2 class="text-lg font-semibold mb-4">Konser Tiket Sedjiwa</h2>
      <ul class="text-sm text-gray-600 space-y-1">
        <li>📅 <strong>13 Januari 2024</strong></li>
        <li>🕒 <strong>16:00 - 23:00</strong></li>
        <li>📍 <strong>Lapangan Kosan 662</strong></li>
      </ul>
      <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md shadow">
        Beli Tiket
      </button>

      <!-- Description -->
      <h3 class="mt-6 font-semibold text-gray-700">Deskripsi Event</h3>
      <p class="text-gray-600 mt-2 text-sm leading-relaxed">
        Sedjiwa Fest merupakan festival dengan penggabungan musik lokal dan internasional. Tahun ini membawa tema "To Be Happy" dengan sederet musisi yang siap mengguncang panggung dan memberikan pengalaman tak terlupakan.
      </p>
    </div>

    <!-- Reviews Section -->
    <div class="border-t mt-4 px-6 py-4">
      <h3 class="font-semibold text-gray-700 mb-4">Reviews</h3>
      <div class="space-y-6">
        <!-- Review Card -->
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
  <!-- Container -->
  <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden mt-8">
    <!-- Header Section -->
    <div class="relative">
      <img src="https://via.placeholder.com/1000x400" alt="Event Banner" class="w-full object-cover h-64">
      <div class="absolute bottom-0 left-0 p-4 bg-gradient-to-t from-black/80 to-transparent text-white w-full">
        <h1 class="text-2xl font-bold">Konser 12 Tahun NDX AKA</h1>
        <p class="text-sm">Yogyakarta | NDX AKA</p>
      </div>
    </div>

    <!-- Event Details -->
    <div class="p-6">
      <h2 class="text-lg font-semibold mb-4">Konser Tiket Sedjiwa</h2>
      <ul class="text-sm text-gray-600 space-y-1">
        <li>📅 <strong>13 Januari 2024</strong></li>
        <li>🕒 <strong>16:00 - 23:00</strong></li>
        <li>📍 <strong>Lapangan Kosan 662</strong></li>
      </ul>
      <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md shadow">
        Beli Tiket
      </button>

      <!-- Description -->
      <h3 class="mt-6 font-semibold text-gray-700">Deskripsi Event</h3>
      <p class="text-gray-600 mt-2 text-sm leading-relaxed">
        Sedjiwa Fest merupakan festival dengan penggabungan musik lokal dan internasional. Tahun ini membawa tema "To Be Happy" dengan sederet musisi yang siap mengguncang panggung dan memberikan pengalaman tak terlupakan.
      </p>
    </div>

    <!-- Reviews Section -->
    <div class="border-t mt-4 px-6 py-4">
      <h3 class="font-semibold text-gray-700 mb-4">Reviews</h3>
      <div class="space-y-6">
        <!-- Review Card -->
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


