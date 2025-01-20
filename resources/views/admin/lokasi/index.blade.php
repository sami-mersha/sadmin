<x-admin-layout>
    @if(session('success'))
        <div id="success-message" class="bg-green-500 text-white text-center py-2 mb-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white min-h-screen px-5 rounded-lg"> 
        <div class="flex justify-between items-center px-5 py-5">
            <h1 class="text-2xl font-bold">Manajemen Lokasi</h1>

            <div class="flex items-center space-x-4">
                <div class="relative mx-4 lg:mx-0">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                            <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <input id="search-input" class="w-32 pl-10 pr-4 rounded-full form-input sm:w-64 focus:border-indigo-600" 
                        type="text" placeholder="Search for something">
                </div>
                <a href="{{ route('admin.lokasi.create') }}">
                    <button class="bg-blue-700 text-white px-6 py-2 text-lg rounded-xl hover:bg-blue-500">
                        + Tambah Lokasi
                    </button>
                </a>
            </div>
        </div>

        <table class="w-full border-collapse border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-700 font-bold rounded-md">
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama Lokasi</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                    <tr class="text-gray-700">
                        <td class="border-b border-gray-300 px-4 py-2 text-center">1</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">Malang</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">sek udong</td>
                    </tr>
            </tbody>
        </table>

    </div>

    <script>
        window.onload = function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.transition = "opacity 1s ease-out";
                    successMessage.style.opacity = 0;
                    setTimeout(function() {
                        successMessage.style.display = "none";
                    }, 1000);
                }, 3000);
            }
        };
    </script>
</x-admin-layout>
