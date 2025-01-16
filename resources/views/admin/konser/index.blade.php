<x-admin-layout>
    <div class="bg-white min-h-screen px-5"> 
        
        <div class="flex justify-between items-center px-5 py-5">
            <h1 class="text-2xl font-bold">Manajemen Konser</h1>
            <div class="flex items-center space-x-4">
                <select class="border border-gray-300 rounded px-2 py-1 text-gray-500 focus:outline-none appearance-none w-28 pr-3">
                    <option>October</option>
                </select>
                <a href="{{ route('admin.konser.create') }}">
                    <button class="bg-blue-700 text-white px-6 py-2 text-lg rounded-xl hover:bg-blue-500">
                        + Tambah Konser
                    </button>
                </a>
            </div>
        </div>

        <table class="w-full border-collapse border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-700 font-bold rounded-md">
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama Konser</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2">Lokasi</th>
                    <th class="px-4 py-2">Detail</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($konsers as $key => $konser)
                    <tr class="text-gray-700">
                        <td class="border-b border-gray-300 px-4 py-2 text-center">{{ $key + 1 }}</td>
                        <td class="border-b border-gray-300 px-4 py-2">{{ $konser->nama }}</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">{{ $konser->tanggal }}</td>
                        <td class="border-b border-gray-300 px-4 py-2">{{ $konser->lokasi }}</td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">
                            <a href="{{ route('konsers.show', $konser->id) }}">
                                <button class="w-full h-8 flex items-center justify-center px-4 py-2 rounded text-gray-600 bg-indigo-200 hover:opacity-80 focus:outline-none">
                                    Detail
                                </button>
                            </a>
                        </td>
                        <td class="border-b border-gray-300 px-4 py-2 text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('konsers.edit', $konser->id) }}">
                                    <button class="border px-3 py-2 rounded hover:bg-green-600 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </button>
                                </a>
                                <form action="{{ route('konsers.destroy', $konser->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus konser ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border text-red-700 px-3 py-2 rounded hover:bg-red-600 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if(session('success'))
            <div class="mt-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif
    </div>
</x-admin-layout>
