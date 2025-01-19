<x-admin-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Promo</title>
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
            flex: 1;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
            margin-bottom: 30px;
            height: 70px;
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
                flex-direction: column;
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
    <form action="{{ route('admin.promo.update', $promo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <div class="input-container">
                <label for="promo-code">Kode Promo</label>
                <input class="mt-4" type="text" id="promo-code" name="code_promo" value="{{ $promo->code_promo }}" placeholder="Masukan Code Promo">
            </div>
            <div class="input-container">
                <label for="discount-value">Nilai Diskon</label>
                <select class="mt-4" id="discount-value" name="nilai_diskon">
                    <option value="10" {{ $promo->nilai_diskon == '10' ? 'selected' : '' }}>10%</option>
                    <option value="20" {{ $promo->nilai_diskon == '20' ? 'selected' : '' }}>20%</option>
                    <option value="30" {{ $promo->nilai_diskon == '30' ? 'selected' : '' }}>30%</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="input-container">
                <label for="start-date">Tanggal Mulai</label>
                <input class="mt-4" type="date" id="start-date" name="tanggal_mulai" value="{{ $promo->tanggal_mulai }}" placeholder="Masukan Tanggal Mulai">
            </div>
            <div class="input-container">
                <label for="end-date">Tanggal Berakhir</label>
                <input class="mt-4" type="date" id="end-date" name="tanggal_berakhir" value="{{ $promo->tanggal_berakhir }}" placeholder="Masukan Tanggal Berakhir">
            </div>
        </div>

        <div class="form-group">
            <div class="input-container">
                <label for="status">Status Promo</label>
                <input class="mt-4" type="text" id="status" name="status_promo" value="{{ $promo->status_promo }}" readonly style="width: 100%">
            </div>
        </div>

        <div class="form-actions">
            <button class="cancel" onclick="window.history.back();">Batal</button>
            <button type="submit" class="bg-blue-700 text-white px-6 py-2 text-lg rounded-xl hover:bg-blue-500">Simpan</button>
        </div>
    </form>
</div>

</body>
</html>

</x-admin-layout>
