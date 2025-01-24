@include('layouts.app')

@extends('layouts.footer')

<script src="https://cdn.tailwindcss.com"></script>
<!-- Container -->
<div class="max-w-5xl mx-auto bg-white rounded-lg overflow-hidden mt-40 mb-40">


    <!-- Event Content -->
    <div class="flex flex-col md:flex-row">

        <!-- Image Section -->
        <div class="flex-shrink-0 md:w-1/2 ">
            <img src="{{ asset('storage/' . $konser->image) }}"" alt="Event Image"
                class="w-full h-full object-cover rounded-lg">
        </div>

        <!-- Event Details -->
        <div class=" px-5 md:w-1/2">
            <h2 class="text-lg font-semibold mb-4"> {{ $konser->nama }}</h2>
            <ul class="text-sm text-gray-600 space-y-2">
                <div class="mb-4">
                    <li>
                        <div>
                            <i class="fa-solid fa-calendar fa-1x"></i>
                            <span class=" text-gray-800 pl-1">Tanggal</span><br>
                        </div>
                        <strong class="text-bold text-black pl-5"> {{ $konser->tanggal }}</strong>
                    </li>
                </div>
                <div class="mb-4">
                    <div>
                        <li>
                            <div class="flex">
                                <i class="fa-solid fa-clock fa-1x"></i>
                                <span class=" text-gray-800 pl-1">Waktu</span><br>
                            </div>
                            <strong class="text-black pl-5">{{ $konser->jam }}</strong>
                        </li>
                    </div>
                </div>
                <div class="mb-4">
                    <li>
                        <div class="flex">
                                <i class="fa-solid fa-location-dot fa-1x"></i>

                            <span class=" text-gray-800 pl-2">Lokasi</span><br>
                        </div>
                        <strong class=" text-black pl-5">{{ $konser->lokasi->location }}</strong>
                    </li>

                </div>
            </ul>
            <a href="{{ route('productbuy',$konser->id) }}" class="button">
            <button
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-48 py-2.5 text-center mt-10 mb-2">
beli sekarang
            </button>
            </a>
            <!-- Description -->
            <h3 class="mt-6 font-semibold text-gray-700">Deskripsi Event</h3>
            <p class="text-gray-600 mt-2 text-sm leading-relaxed">{{ $konser->deskripsi }}</p>
        </div>
    </div>



    <div class="p-6 md:w-1/2">
        <h2 class="text-lg font-semibold mb-4">{{ $konser->nama }}</h2>
        <ul class="text-sm text-gray-600 space-y-2">
            <div>
                @foreach ($konser->tiket as $kt)
                    <h1 class="text-orange-800 font-extrabold text-2xl">
                        Rp:{{ number_format($kt->harga_tiket, 0, ',', '.') }},00</h1>
            </div>
            @endforeach
            <div class="mb-4">


                <!-- Reviews Section -->

                <button class="flex mt-5   bg-blue-600 hover:bg-blue-700 text-white py-2 px-6  rounded-3xl shadow">
                    <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                    </svg>
                    </div>
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
                        <p class="text-gray-600 text-sm mt-1">This icon pack is just what I need for my latest project.
                            Love the playful look!</p>
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
                        <p class="text-gray-600 text-sm mt-1">This icon pack is just what I need for my latest project.
                            Love the playful look!</p>
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
