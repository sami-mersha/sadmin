<x-admin-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Form</title>
    <style>
        .form-container {
            background-color: #ffffff;
            padding: 60px 70px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .form-group {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            width: 100%;
        }

        .form-group label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        .form-group .input-container {
            flex: 1;     /* Input akan menyesuaikan ruang yang tersedia */
        }

        .form-group input, .form-group select {
            width: 100%; /* Agar input/select mengisi lebar kontainer */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
            margin-bottom: 30px;
            height: 70px; /* Set height */
        }

        .form-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .form-actions button {
            padding: 10px 20px;
            font-size: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 220px;
        }

        .form-actions .cancel {
            background-color: #e0e0e0;
            color: #333;
        }

        .form-actions .save {
            background-color: #007bff;
            color: #fff;
        }

        @media (max-width: 768px) {
            .form-group {
                flex-direction: column; /* Berubah ke layout vertikal untuk perangkat kecil */
            }
            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }
            .form-actions button {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <!-- Form untuk menyimpan data tiket -->
    <form action="{{ route('admin.tiket.store') }}" method="POST">
        @csrf

        <!-- Nama Konser -->
        <div class="form-group">
            <div class="input-container">
                <label for="konser_id">Nama Konser</label>
                <select id="konser_id" name="konser_id" class="mt-4">
                    <option value="">Pilih Konser</option>
                    @foreach ($konser as $t)
                        <option value="{{ $t->id }}" {{ old('konser_id') == $t->id ? 'selected' : '' }}>
                            {{ $t->nama }}
                        </option>
                    @endforeach
                </select>
                @error('konser_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

        <!-- Jenis Tiket -->
            <div class="input-container">
                <label for="jenis_tiket">Jenis Tiket</label>
                <select id="jenis_tiket" name="jenis_tiket" class="mt-4">
                    <option value="">Pilih Jenis Tiket</option>
                    <option value="Regular" {{ old('jenis_tiket') == 'Regular' ? 'selected' : '' }}>Regular</option>
                    <option value="VIP" {{ old('jenis_tiket') == 'VIP' ? 'selected' : '' }}>VIP</option>
                    <option value="VVIP" {{ old('jenis_tiket') == 'VVIP' ? 'selected' : '' }}>VVIP</option>
                </select>
                @error('jenis_tiket')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Harga Tiket -->
        <div class="form-group">
            <div class="input-container">
                <label for="harga_tiket">Harga Tiket</label>
                <input type="number" id="harga_tiket" name="harga_tiket" class="mt-4"
                       placeholder="Masukan Harga Tiket" value="{{ old('harga_tiket') }}">
                @error('harga_tiket')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

        <!-- Jumlah Tiket -->
            <div class="input-container">
                <label for="jumlah_tiket">Jumlah Tiket</label>
                <input type="number" id="jumlah_tiket" name="jumlah_tiket" class="mt-4"
                       placeholder="Masukan Jumlah Tiket" value="{{ old('jumlah_tiket') }}">
                @error('jumlah_tiket')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Status Tiket -->
        <div class="form-group">
            <div class="input-container">
                <label for="status_tiket">Status Tiket</label>
                <select id="status_tiket" name="status_tiket" class="mt-4">
                    <option value="Aktif" {{ old('status_tiket') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Tidak Aktif" {{ old('status_tiket') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
                @error('status_tiket')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Form Actions -->
        <div class="form-actions">
            <button type="button" class="cancel" onclick="window.history.back();">Batal</button>
            <button type="submit" class="save">Simpan</button>
        </div>
    </form>
</div>
</body>
</html>

</x-admin-layout>
