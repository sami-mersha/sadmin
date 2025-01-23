<x-app-layout>
    <x-slot name="header">
        <div class="flex mt-40">
            <div class="flex bg-gradient-to-r via-white to-pink-100 min-h-screen p-6 "> <!-- Tambahkan pt-20 di sini -->
                <!-- Sidebar Filter -->
                <aside class="w-1/4 bg-white rounded-lg shadow-md p-6 space-y-4">
                    <h2 class="text-xl font-semibold text-gray-800">Filter</h2>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Lokasi</h3>
                        <ul class="space-y-2">
                            <li>
                                <input type="text" placeholder="Cari di DekoVista"
                                    class="w-full px-4 py-2 text-sm border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
                            </li>
                            <li><label><input type="checkbox" class="mr-2">Jember</label></li>
                            <li><label><input type="checkbox" class="mr-2">Pasuruan</label></li>
                            <li><label><input type="checkbox" class="mr-2">Banyuwangi</label></li>
                            <li><label><input type="checkbox" class="mr-2">Probolinggo</label></li>
                            <li><label><input type="checkbox" class="mr-2">Trenggalek</label></li>
                        </ul>
                    </div>
                </aside>

                <!-- Main Content -->
                <div class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
                    <!-- Card Event -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x200" alt="Event Thumbnail" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="text-sm text-gray-600 space-y-1 mt-2">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Lokasi Acara</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-lg font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="{{ route('product.index') }}"
                                class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-full hover:bg-blue-700 transition">
                                Detail
                            </a>

                        </div>
                    </div>

                    <!-- Duplikasi Card -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x200" alt="Event Thumbnail" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="text-sm text-gray-600 space-y-1 mt-2">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Lokasi Acara</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-lg font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="{{ route('product.index') }}"
                            class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-full hover:bg-blue-700 transition">
                            Detail
                        </a>
                        </div>
                    </div>
                    <!-- Tambahkan Card Lagi Jika Diperlukan -->
                </div>
            </div>
        </div>
    </x-slot>
    @extends('layouts.footer')
</x-app-layout>
