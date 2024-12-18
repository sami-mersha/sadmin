<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Daftar Film') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-6 px-6">
        <div class="bg-[#D1E9F6] rounded-lg shadow-lg p-6">
            <!-- Tombol Tambah -->
            <a href="{{ route('film.create') }}"
                class="bg-[#4A628A] hover:bg-[#091057] text-white py-2 px-6 rounded-full mb-6 inline-block shadow-md transition duration-200 ease-in-out">
                Tambah
            </a>

            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert"
                    id="error-alert">
                    {{ session('error') }}
                </div>
            @endif

            <div
                class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 overflow-auto custom-scroll max-h-[450px] transparent-scrollbar">
                @foreach ($film as $data)
                    <div
                        class="w-full max-w-xs bg-[#BCD2DE] border border-gray-200 rounded-lg  transform hover:scale-105 hover:shadow-xl transition duration-300 bg-[#BCD2DE]">
                        <!-- Gambar Film -->
                        <div class="relative">
                            <img src="{{ asset('storage/' . $data->image) }}" alt="Film Poster"
                                class="w-full h-72 object-cover object-top rounded-t-lg">

                            <!-- Dropdown Button -->
                            <div class="absolute top-3 right-3">
                                <button id="dropdownButton{{ $data->id }}"
                                    data-dropdown-toggle="dropdown{{ $data->id }}"
                                    class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <circle cx="5" cy="12" r="2" />
                                        <circle cx="12" cy="12" r="2" />
                                        <circle cx="19" cy="12" r="2" />
                                    </svg>
                                </button>
                                <!-- Transparent Dropdown Menu -->
                                <div id="dropdown{{ $data->id }}"
                                    class="hidden absolute right-0 z-10 text-base list-none bg-transparent divide-y divide-gray-100 rounded-lg ">
                                    <ul>
                                        <li class="flex items-center justify-center p-2">
                                            <a href="{{ route('film.edit', $data->id) }}"
                                                class="text-blue-600 hover:text-blue-800 transition duration-100 ease-in-out">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </li>
                                        <li class="flex items-center justify-center p-2">
                                            <form action="{{ route('film.destroy', $data->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Kamu Yakin Ingin Hapus Data?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-800 transition duration-150 ease-in-out">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Konten Film -->

                        <!-- Informasi Film dalam Grid -->
                        <div class="p-5 flex flex-col justify-between flex-grow">
                            <div>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">{{ $data->judul }}
                                </h5>

                                <hr class="my-4 border-t border-[#7AB2D3]">
                            </div>

                            <!-- Tombol Detail -->
                            <div class="flex justify-start">
                                <a href="{{ route('film.show', $data->id) }}" class="btn btn-info btn-sm">Show</a>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Tambahkan CSS untuk scrollbar transparan -->
    <style>
        .custom-scroll::-webkit-scrollbar {
            display: none;
        }

        .custom-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <!-- Alert timer script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                setTimeout(() => {
                    errorAlert.style.display = 'none';
                }, 2000);
            }
        });
    </script>
</x-app-layout>
