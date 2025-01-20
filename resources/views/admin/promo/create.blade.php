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
    <!-- Form untuk menyimpan data promo -->
    <form action="{{ route('admin.promo.store') }}" method="POST">
        @csrf
        <!-- Kode Promo -->
        <div class="form-group">
            <div class="input-container">
                <label for="promo-code">Kode Promo</label>
                <input class="mt-4" type="text" id="promo-code" name="code_promo" placeholder="Masukan Kode Promo" value="{{ old('code_promo') }}">
                @error('code_promo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

        <!-- Nilai Diskon -->
            <div class="input-container">
                <label for="discount-value">Nilai Diskon</label>
                <select class="mt-4" id="discount-value" name="nilai_diskon">
                    <option value="">Masukkan Nilai Diskon</option>
                    <option value="10" {{ old('nilai_diskon') == '10' ? 'selected' : '' }}>10%</option>
                    <option value="20" {{ old('nilai_diskon') == '20' ? 'selected' : '' }}>20%</option>
                    <option value="30" {{ old('nilai_diskon') == '30' ? 'selected' : '' }}>30%</option>
                </select>
                @error('nilai_diskon')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Tanggal Mulai dan Tanggal Berakhir -->
        <div class="form-group">
    <div class="input-container">
        <label for="start-date">Tanggal Mulai</label>
        <input class="mt-4" type="date" id="start-date" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}">
        @error('tanggal_mulai')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-container">
        <label for="end-date">Tanggal Berakhir</label>
        <input class="mt-4" type="date" id="end-date" name="tanggal_berakhir" value="{{ old('tanggal_berakhir') }}">
        @error('tanggal_berakhir')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const startDateInput = document.getElementById('start-date');
        const endDateInput = document.getElementById('end-date');

        startDateInput.addEventListener('change', function () {
            const startDate = startDateInput.value; // Ambil nilai tanggal mulai
            if (startDate) {
                // Atur min date untuk Tanggal Berakhir
                endDateInput.min = startDate;
            }
        });

        endDateInput.addEventListener('change', function () {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            if (endDate <= startDate) {
                alert('Tanggal berakhir harus lebih besar dari tanggal mulai.');
                endDateInput.value = ''; // Reset nilai
            }
        });
    });
</script>


        <!-- Status Promo -->
        <div class="form-group">
            <div class="input-container">
                <label for="status_promo">Status Promo</label>
                <select name="status_promo" id="status_promo" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
                    <option value="Aktif" {{ old('status_promo') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Tidak Aktif" {{ old('status_promo') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
                @error('status_promo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Form Actions -->
        <div class="form-actions">
        <button type="button" class="cancel" onclick="window.history.back();" onmouseover="this.style.backgroundColor='red'; this.style.color='white';" onmouseout="this.style.backgroundColor='#e0e0e0'; this.style.color='#333';">
                Batal
            </button>
            <button type="submit" class="save">Simpan</button>
        </div>
    </form>
</div>

</body>
</html>

</x-admin-layout>
