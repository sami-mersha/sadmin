<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight text-center">
            {{ __('Pengguna') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-6 px-6">
        <!-- Card Wrapper -->
        <div class="bg-[#D1E9F6] rounded-lg shadow-lg p-6 ">
            <!-- Tombol Tambah -->
            <a href="{{ route('pengguna.create') }}"
                class="bg-[#4A628A] hover:bg-[#091057] text-white py-2 px-6 rounded-full mb-6 inline-block shadow-md transition duration-200 ease-in-out">
                Tambah
            </a>

            <!-- Table dalam Card -->
            <div class="overflow-auto custom-scroll max-h-[400px] rounded-lg mt-6 transparent-scrollbar">
                <table class="min-w-full rounded-lg shadow-md ">
                    <thead class="sticky top-0 bg-[#4A628A] text-white">
                        <tr>
                            <th class="px-4 py-2 text-left rounded-tl-lg">No</th>
                            <th class="px-4 py-2 text-left">Nama</th>
                            <th class="px-4 py-2 text-left">Email</th>
                            <th class="px-4 py-2 text-left">Telp</th>
                            <th class="px-4 py-2 text-left">Alamat</th>
                            <th class="px-4 py-2 text-center">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $data)
                            <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-200">
                                <td class="px-4 py-2 text-gray-700">{{ $data->id }}</td>
                                <td class="px-4 py-2 text-gray-700">{{ $data->nama }}</td>
                                <td class="px-4 py-2 text-gray-700">{{ $data->email }}</td>
                                <td class="px-4 py-2 text-gray-700">{{ $data->telp }}</td>
                                <td class="px-4 py-2 text-gray-700">{{ $data->alamat }}</td>
                                <td class="px-4 py-2 text-center space-x-2">
                                    <a href="{{ route('pengguna.edit', $data->id) }}"
                                        class="text-blue-600 hover:text-blue-800 transition duration-150 ease-in-out">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST"
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

    <!-- Script untuk timer alert -->
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
</x-app-layout>
