<x-admin-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Konser</title>
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

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f9f9f9;
            margin-bottom: 30px;
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
    <form action="{{ route('admin.konser.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="input-container">
                <label for="nama">Nama Konser</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Konser" required>
            </div>
            <div class="input-container">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" required>
            </div>
        </div>

        <div class="form-group">
            <div class="input-container">
                <label for="jam">Jam</label>
                <input type="time" name="jam" id="jam" required>
            </div>
            <div class="input-container">
                <label for="lokasi_id">Lokasi</label>
                <select name="lokasi_id" id="lokasi_id" required>
                    <option value="" disabled selected>Pilih Lokasi</option>
                    @foreach ($lokasi as $lk)
                        <option value="{{ $lk->id }}" {{ old('konser_id') == $lk->id ? 'selected' : '' }}>
                            {{ $lk->location }}
                        </option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="input-container">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="input-container">
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image" accept="image/*">
            </div>
        </div>

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
