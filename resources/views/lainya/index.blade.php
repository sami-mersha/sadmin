<x-app-layout>
    <x-slot name="header">
        <div class="flex mt-20">
            <div class="flex bg-gradient-to-r via-white to-pink-100 min-h-screen "> <!-- Tambahkan pt-20 di sini -->
                <!-- Sidebar Filter -->
                <aside class="w-1/4 bg-white rounded-lg p-6 space-y-4 mt-10">
                    <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
</svg>

                    <h2 class="text-xl font-semibold text-gray-800 pl-2">Filter</h2>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold -2 pt-3  text-indigo-700">Lokasi</h3>
                        <ul class="space-y-2">
                            <li class="py-4">
                                <form action="" method="get">
                                <input type="text" placeholder="Cari di DekoVista" name="search" value="{{ request()->get('search') }}"
                                    class="w-full px-4 py-1 text-sm border rounded-lg focus:outline-none focus:ring focus:ring-blue-200 bg-gray-200">
                                    </form>
                            </li>

                            <div class="max-w-md mx-auto">
    <h2 class="text-lg font-semibold mb-4">Pilih Kota</h2>
    <div class="space-y-2">
<!-- Filter Form -->
<form method="GET" action="{{ route('lainya.index') }}" class="mb-5">
    <div class="space-y-3">
        <!-- Tambahkan filter berdasarkan lokasi -->
        @foreach ($locations as $loc)
        <label class="flex items-center space-x-3">
            <input
                type="radio"
                name="city"
                value="{{ $loc->location }}"
                class="hidden peer"
                {{ request('city') == $loc->location ? 'checked' : '' }}
            >
            <div class="w-5 h-5 border-2 border-gray-300 rounded-full peer-checked:border-blue-500 peer-checked:bg-blue-500"></div>
            <span class="font-bold peer-checked:text-blue-500">{{ $loc->location }}</span>
        </label>
        @endforeach
    </div>

    <div class="mt-3 flex space-x-3">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Filter
        </button>
        <!-- Tombol Reset -->
        <a href="{{ route('lainya.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
            Reset
        </a>
    </div>
</form>


    </div>
</div>


                        </ul>
                    </div>
                </aside>

                <!-- Main Content -->
                <div class="container mx-auto px-4 3xl:px-1 py-8">
                    <div class="grid grid-cols-3 gap-6 py-9">
        @if ($isEmpty)
<!-- Jika tidak ada konser pada lokasi -->
<p class="text-red-500 font-semibold ">
Konser tidak ada pada lokasi ini.
</p>
@else
        @foreach ($konsers as $knsr)
            <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <!-- Menampilkan gambar -->
                @if ($knsr->image)
                    <img src="{{ asset('storage/' . $knsr->image) }}" alt="Gambar {{ $knsr->nama }}"
                        class="w-full h-18 object-cover transition-transform duration-300 ease-in-out">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default Gambar"
                        class="w-full h-18 object-cover transition-transform duration-300 ease-in-out">
                @endif

                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-200">
                        {{ $knsr->nama }}</h3>
                    <ul class="event-details text-gray-600 mt-2 space-y-1">
                        <li class="flex items-center text-sm">
                            <i class="fa-solid fa-calendar-days mr-2 text-gray-500"></i>{{ $knsr->tanggal }}</li>
                        <li class="flex items-center text-sm">
                            <i class="fa-solid fa-map-marker-alt mr-2 text-gray-500"></i>{{ $knsr->lokasi->location }}</li>
                    </ul>

                    <div class="flex items-center justify-between mt-4">
                        @foreach ($knsr->tiket as $kt)
                            <div class="flex flex-col justify-between">
                                <p class="text-xs font-bold text-orange-600 mb-2">Stok: {{ $kt->jumlah_tiket }} tiket</p>
                                <p class="text-md font-bold text-orange-600 mb-2">Rp:{{ number_format($kt->harga_tiket, 0, ',', '.') }},00</p>
                            </div>
                        @endforeach

                        <a href="{{ route('product.show', $knsr->id) }}"
                            class="mt-5 inline-block bg-blue-700 text-white text-center py-1 px-4 rounded-md text-sm hover:bg-blue-800 transition duration-200 h-full flex items-center justify-center">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>
            </div>
        </div>
    </x-slot>
    @extends('layouts.footer')
</x-app-layout>
