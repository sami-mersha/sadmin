<x-admin-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi</title>
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

        .form-group input {
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
    <form action="{{ route('admin.lokasi.update', $lokasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="input-container">
                <label for="location">Nama Lokasi</label>
                <input 
                    type="text" 
                    name="location" 
                    id="location" 
                    value="{{ old('location', $lokasi->location) }}" 
                    placeholder="Masukkan nama lokasi" 
                    required>
                @error('location')
                    <p style="color:red; font-size:12px;">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-actions">
            <button type="button" class="cancel" 
                onclick="window.location='{{ route('admin.lokasi.index') }}';"
                onmouseover="this.style.backgroundColor='red'; this.style.color='white';" 
                onmouseout="this.style.backgroundColor='#e0e0e0'; this.style.color='#333';">
                Batal
            </button>
            <button type="submit" class="save">Simpan</button>
        </div>
    </form>
</div>
</body>
</html>
</x-admin-layout>
