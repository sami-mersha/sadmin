<x-admin-layout>
            <!-- Menampilkan pesan sukses jika ada -->
            @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        });
    </script>
@endif

    <div class="bg-white min-h-screen px-5 rounded-lg">
        <div class="flex justify-between items-center px-5 py-5">
            <h1 class="text-2xl font-bold">Manajemen Tiket</h1>
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
                <a href="{{ route('admin.tiket.create') }}">
                    <button class="bg-blue-700 text-white px-6 py-2 text-lg rounded-xl hover:bg-blue-500">
                        + Tambah Tiket
                    </button>
                </a>
            </div>
        </div>
        <div class="flex justify-end px-5 mb-7"> <!-- Tambahkan flex justify-end -->
                <select class="border border-gray-300 rounded px-2 py-1 text-gray-500 focus:outline-none appearance-none w-28 pr-3">
                    <option>October</option>
                </select>
            </div>

        <table class="w-full border-collapse border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-700 font-bold rounded-md">
                <tr>
                    <th class="px-4 py-2">Nama Konser</th>
                    <th class="px-4 py-2">Jenis Tiket</th>
                    <th class="px-4 py-2">Harga Tiket</th>
                    <th class="px-4 py-2">Jumlah Tiket</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tiket as $t)
                    <tr class="text-gray-700">
                        <td class="border-b border-gray-300 px-4 py-2 text-center">{{ $t->konser->nama ?? '-' }}</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">{{ $t->jenis_tiket }}</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">{{ number_format($t->harga_tiket, 0, ',', '.') }}</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">{{ $t->jumlah_tiket }}</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">
                            <button class="w-full h-8 flex items-center justify-center px-4 py-2 rounded text-white {{ $t->status_tiket == 'Aktif' ? 'bg-yellow-500' : 'bg-red-500' }} hover:opacity-80 focus:outline-none">
                                {{ $t->status_tiket }}
                            </button>
                        </td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">
                            <div class="flex justify-center gap-2">
                                <!-- Tombol Edit -->
                                <a href="{{ route('admin.tiket.edit', $t->id) }}">
                                    <button class="border px-3 py-2 rounded hover:bg-green-600 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 7.125l-2.625-2.625M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </button>
                                </a>
                                <!-- Tombol Delete -->
                                <form id="delete-form-{{ $t->id }}" action="{{ route('admin.tiket.destroy', $t->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                                <button type="button" class="border text-red-700 px-3 py-2 rounded hover:bg-red-600 hover:text-white" onclick="confirmDelete({{ $t->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Tiket ini akan dihapus secara permanen!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        });
    }
</script>

</x-admin-layout>
