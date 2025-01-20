<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Rekomendasi') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-6 px-6">
        <div class="bg-[#D1E9F6] rounded-lg shadow-lg p-6">

            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert" id="error-alert">
                    {{ session('error') }}
                </div>
            @endif

            @if (isset($konser) && $konser->count() > 0)
                <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($konser as $data)
                        <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                            <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->judul }}" class="w-full h-32 object-cover rounded-lg mb-4">
                            <h5 class="text-lg font-medium text-gray-800 mb-2">{{ $data->judul }}</h5>
                            <p class="text-sm text-gray-500 mb-2">{{ $data->tanggal }}</p>
                            <div class="flex items-center justify-between">
                                <p class="text-xl font-bold text-red-600">Rp {{ number_format($data->harga, 0, ',', '.') }}</p>
                                <a href="{{ route('konser.show', $data->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500">Tidak ada konser tersedia.</p>
            @endif
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
