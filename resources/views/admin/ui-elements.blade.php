<x-admin-layout>

<style>
.custom-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding-left: 2rem;  /* Menambahkan padding untuk ruang ikon */
}

.custom-select::after {
    content: '\f078';  /* Kode ikon FontAwesome untuk dropdown */
    font-family: 'Font Awesome 5 Free'; /* Pastikan FontAwesome dimuat */
    position: absolute;
    right: 1rem;       /* Ikon di kanan */
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
}

</style>


    <div class="bg-white min-h-screen px-5"> 
        <div class="flex justify-between items-center px-5 py-5">
    <h1 class="text-2xl font-bold">History order</h1>
    <div class="flex items-center space-x-4">
    <select name="konser_id" class="custom-select rounded-md text-gray-500">
    <option>Konser sedjiwa</option>
    <option>Konser lainnya</option>
</select>

    </div>
</div>
<table class="w-full border-collapse border border-gray-300 rounded-lg overflow-hidden">
    <thead class="bg-gray-100 text-gray-700 font-bold rounded-md">
        <tr>
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">Nama user</th>
            <th class="px-4 py-2">Tiket</th>
            <th class="px-4 py-2">Jumlah</th>
            <th class="px-4 py-2">Harga Tiket</th>
            <th class="px-4 py-2">Status</th>
        </tr>
    </thead>

    <tbody>
    
        <tr class="text-gray-700">
            <td class="border-b border-gray-300 px-4 py-2 text-center">423</td>
            <td class="border-b border-gray-300 px-4 py-2 text-center">Sasti juni</td>
            <td class="border-b border-gray-300 px-4 py-2 text-center">Konser sedjiwa</td>
            <td class="border-b border-gray-300 px-4 py-2 text-center">2</td>
            <td class="border-b border-gray-300 px-4 py-2 text-center">Rp.1.120.000</td>
            <td class="border-b border-gray-300 px-4 py-2 text-center">
                <!-- Ganti dengan status menggunakan ikon centang atau silang -->
                <i class="fas fa-check text-green-500" title="Aktif"></i>
                <!-- Atau jika Nonaktif -->
                <!-- <i class="fas fa-times text-red-500" title="Nonaktif"></i> -->
            </td>
        </tr>

    </tbody>
</table>

        </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</x-admin-layout>

