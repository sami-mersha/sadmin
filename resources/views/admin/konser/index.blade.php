<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Konser') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-6 px-6">
        <div class="bg-[#D1E9F6] rounded-lg shadow-lg p-6">

            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert" id="error-alert">
                    {{ session('error') }}
                </div>
            @endif

            <div class="flex justify-end mb-4">
                <button class="bg-green-600 text-white font-medium px-4 py-2 rounded-lg" onclick="openModal('addModal')">Tambah Konser</button>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">No</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Nama</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Tanggal</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Lokasi</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Kuota Tiket</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Deskripsi</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Gambar</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konser as $data)
                            <tr class="border-b border-gray-200">
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $loop->iteration + 1 }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $data->nama }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $data->tanggal }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $data->lokasi }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $data->kuota_tiket }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $data->deskripsi }}</td>
                                <td class="px-4 py-2">
                                    <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->judul }}" class="w-16 h-16 object-cover rounded">
                                </td>
                                <td class="px-4 py-2">
                                    <button class="text- font-medium rounded-lg text-sm px-4 py-2" onclick="openModal('editModal', {{ $data->id }})">Edit</button>
                                    <form action="{{ route('admin.konser.destroy', $data->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Kamu Yakin Ingin Hapus Data?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div id="addModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <h3 class="text-lg font-medium text-gray-800 mb-4">Tambah Konser</h3>
            <form action="{{ route('admin.konser.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nama Konser</label>
                    <input type="text" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" name="tanggal" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Lokasi</label>
                    <input type="text" name="lokasi" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Kuota Tiket</label>
                    <input type="number" name="kuota_tiket" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <input type="text" name="deskripsi" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="image" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-lg mr-2" onclick="closeModal('addModal')">Batal</button>
                    <button type="submit" class="bg-green-600 text-white font-medium px-4 py-2 rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit -->
    <div id="editModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <h3 class="text-lg font-medium text-gray-800 mb-4">Edit Konser</h3>
            <form action="{{ route('admin.konser.update', $data ->id)}}" method="POST" enctype="multipart/form-data" id="editForm">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="nama" id="editnama" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" name="tanggal" id="editTanggal" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Lokasi</label>
                    <input type="text" name="lokasi" id="editLokasi" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Tiket</label>
                    <input type="number" name="kuota_tiket" id="editTiket" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">deskripsi</label>
                    <input type="text" name="deskripsi" id="editTiket" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="image" id="editImage" class="w-full px-3 py-2 border border-gray-300 rounded-lg">
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white font-medium px-4 py-2 rounded-lg mr-2" onclick="closeModal('editModal')">Batal</button>
                    <button type="submit" class="bg-yellow-500 text-white font-medium px-4 py-2 rounded-lg">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .custom-scroll::-webkit-scrollbar {
            display: none;
        }

        .custom-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <script>
        function openModal(modalId, dataId = null) {
            const modal = document.getElementById(modalId);
            if (modalId === 'editModal' && dataId) {
                fetch(`/konser/${dataId}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('editForm').action = `/konser/${dataId}`;
                        document.getElementById('editJudul').value = data.judul;
                        document.getElementById('editTanggal').value = data.tanggal;
                        document.getElementById('editHarga').value = data.harga;
                    });
            }
            modal.classList.remove('hidden');
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                setTimeout(() => {
                    errorAlert.style.display = 'none';
                }, 2000);
            }
        });
    </script>
</x-admin-layout>
