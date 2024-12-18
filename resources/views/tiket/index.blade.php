<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center">
            {{ __('Genre') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-6 px-6">
        <div class="flex gap-6">
            <!-- Card untuk menampilkan jumlah genre -->
            <div class="bg-[#D1E9F6] rounded-lg shadow-lg p-6 w-full h-64 md:w-1/4 text-center"
            style="position: sticky; top: 6rem;">
            <i class="fa-solid fa-layer-group text-5xl text-[#4A628A]"></i>
                <h3 class="text-2xl font-semibold text-[#4A628A]">Total Genre</h3>
                <p class="text-5xl font-bold text-[#091057] mt-4">{{ $genre->count() }}</p>
                <p class="text-gray-700 mt-2">Jumlah genre yang tersedia di sistem</p>  
            </div>

            <!-- Card Tabel Genre -->
            <div class="bg-[#D1E9F6] rounded-lg shadow-lg p-6 w-full md:w-3/4">
                <a href="{{ route('genre.create') }}"
                   class="bg-[#4A628A] hover:bg-[#091057] text-white py-2 px-6 rounded-full mb-6 inline-block shadow-md transition duration-200 ease-in-out">
                    Tambah
                </a>
                <!-- Table dalam Card -->
                <div class="overflow-auto custom-scroll max-h-[400px] rounded-lg mt-6 transparent-scrollbar">
                    <table class="min-w-full rounded-lg shadow-md">
                        <thead class="sticky top-0 bg-[#4A628A] text-white">
                            <tr>
                                <th class="px-4 py-2 text-left rounded-tl-lg">No</th>
                                <th class="px-4 py-2 text-left">Nama Genre</th>
                                <th class="px-4 py-2 text-left">Deskripsi</th>
                                <th class="px-4 py-2 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genre as $data)
                                <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-200">
                                    <td class="px-4 py-2 text-gray-700">{{ $data->id }}</td>
                                    <td class="px-4 py-2 text-gray-700">{{ $data->nama_genre }}</td>
                                    <td class="px-4 py-2 text-gray-700">{{ $data->deskripsi }}</td>
                                    <td class="px-4 py-2 text-center space-x-2">
                                        <a href="{{ route('genre.edit', $data->id) }}"
                                           class="text-blue-600 hover:text-blue-800 transition duration-150 ease-in-out">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <form action="{{ route('genre.destroy', $data->id) }}" method="POST"
                                              class="inline-block"
                                              onsubmit="return confirm('Apakah Kamu Yakin Ingin Hapus Data?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="text-red-600 hover:text-red-800 transition duration-150 ease-in-out">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tambahkan CSS untuk scrollbar transparan -->
    <style>

        .custom-scroll::-webkit-scrollbar{
            display: none;
        }
        .custom-scroll{
            -ms-overflow-style: none;
            scrollbar-width :none;
        }
    </style>
        
        <!-- Script for alert timer -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successAlert = document.getElementById('success-alert');
                const errorAlert = document.getElementById('error-alert');

                if (successAlert) {
                    setTimeout(() => {
                        successAlert.style.display = 'none';
                    }, 2000);
                }

                if (errorAlert) {
                    setTimeout(() => {
                        errorAlert.style.display = 'none';
                    }, 2000);
                }
            });
        </script>
    </div>
</x-app-layout>
