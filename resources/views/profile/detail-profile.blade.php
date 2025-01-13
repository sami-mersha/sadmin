<x-app-layout>
    <x-slot name="header">


         <!-- Main Content -->
         <div class="flex mt-40">
            <!-- Sidebar -->
            <aside class="w-1/4 bg-white rounded-md shadow-md p-4">
                <div class="flex items-center space-x-4 mb-6">
                    <img src="https://via.placeholder.com/60" alt="Profile" class="w-16 h-16 rounded-full">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">Sasti Juni</h3>
                        <a href="#" class="text-indigo-600 text-sm">Ubah profil</a>
                    </div>
                </div>
                <nav>
                    <a href="#" class="block text-gray-600 py-2 hover:bg-gray-200 rounded-md">Akun Saya</a>
                    <a href="#" class="block text-gray-600 py-2 hover:bg-gray-200 rounded-md">Pesanan Saya</a>
                </nav>
            </aside>

            <!-- Transaction Section -->
            <section class="w-3/4 ml-6 bg-white rounded-md shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Transaksi</h2>
                <div>
                    <ul class="flex space-x-4 mb-4">
                        <li><a href="#" class="text-indigo-600 border-b-2 border-indigo-600">Pesanan Online</a></li>
                    </ul>

                    <!-- List Pesanan -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b pb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gray-200 rounded-md"></div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">Tiket Konser Sedjiwa</h3>
                                    <p class="text-sm text-gray-600">Varian : VIP</p>
                                    <p class="text-red-600 font-bold">Rp 120.000</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-600">Subtotal Harga (1 Tiket)</p>
                                <p class="font-bold text-gray-800">Rp 120.000</p>
                                <button class="mt-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Review</button>
                            </div>
                        </div>
                        <!-- Duplicate item -->
                        <div class="flex items-center justify-between border-b pb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gray-200 rounded-md"></div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-800">Tiket Konser Sedjiwa</h3>
                                    <p class="text-sm text-gray-600">Varian : VIP</p>
                                    <p class="text-red-600 font-bold">Rp 120.000</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-600">Subtotal Harga (1 Tiket)</p>
                                <p class="font-bold text-gray-800">Rp 120.000</p>
                                <button class="mt-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

        @extends('layouts.footer');

</x-app-layout>
