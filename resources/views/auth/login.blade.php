<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ke Vibestic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow:hidden;
            
          /* Hindari scroll horizontal */
        }
        .gambarkiri img,
        .kanan_luar,
        .dalam_atas,
        .dalam_bawah {
            position: absolute;
        }
        .gambarkiri .kiri_luar_atas {
    position: absolute; /* Tetap gunakan absolute */
    top: 0px; /* Jarak dari atas */
    left: 0; /* Jarak dari kiri */
    width: 447px; /* Lebar gambar */
    height: 297px; /* Tinggi gambar */
    object-fit: cover; /* Pastikan gambar tidak terdistorsi */
}


        .gambarkiri .kiri_luar_bawah {
            position: absolute; /* Tetap gunakan absolute */
    bottom: 0px; /* Jarak dari atas */
    left: 0; /* Jarak dari kiri */
    width: 373px; /* Lebar gambar */
    height: 135px; /* Tinggi gambar */
    object-fit: cover; /* Pastikan gambar tidak terdistorsi */
        }

        .dalam_atas {
            top: 0;
            right: 0;
            max-width: 610px;
        }

        .dalam_bawah {
            bottom: 0;
            right: 0;
            max-width: 660px;
        }

        .kanan_luar {
            top: 10%;
            right: 0%;
            max-width: 189px;
            z-index: -1;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Gambar Luar Kiri -->
    <div class="gambarkiri">
        <img src="./assets/luar body kiri atas.png" alt="vector" class="kiri_luar_atas" />
        <img src="./assets/bawah kiri luar body.png" alt="vector" class="kiri_luar_bawah" />
    </div>

    <!-- Container Utama -->
    <div class="relative bg-white rounded-3xl shadow-2xl flex w-[1150px] h-[550px] overflow-hidden z-100 ">

        <!-- Kolom Kiri -->
        <div class="w-1/2 flex flex-col justify-center px-10">
            <!-- Logo -->
            <div class="flex justify-center mb-4">
                <img src="./assets/logorumah.png" alt="Logo" class="w-12 h-12">
            </div>
            <!-- Judul -->
            <h2 class="text-center text-2xl font-bold mb-6">Login Ke Vibestic</h2>
            <!-- Form -->
            <form action="#" class="space-y-6">
                <!-- Input Email -->
                <div class="relative">
                    <input type="email" placeholder="Email" 
                           class="w-full border border-gray-300 rounded-lg py-3 pl-12 pr-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <div class="absolute inset-y-0 left-4 flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.94 4.5A2.5 2.5 0 0 1 5.5 2h9a2.5 2.5 0 0 1 2.5 2.5v11a.5.5 0 0 1-.854.354l-4.646-4.647a.5.5 0 0 0-.708 0L3.354 15.854A.5.5 0 0 1 2.5 15V4.5z"/>
                        </svg>
                    </div>
                </div>
                <!-- Input Password -->
                <div class="relative">
                    <input type="password" placeholder="Password" 
                           class="w-full border border-gray-300 rounded-lg py-3 pl-12 pr-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <div class="absolute inset-y-0 left-4 flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2 8a6 6 0 1112 0v3a2 2 0 002 2h1a1 1 0 010 2H3a1 1 0 010-2h1a2 2 0 002-2V8a6 6 0 0112 0zm8 0a4 4 0 10-8 0v3a4 4 0 008 0V8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <!-- Tombol Sign In -->
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white py-3 rounded-lg font-semibold shadow-md">
                    Sign In
                </button>
            </form>
            <!-- Link Register -->
            <p class="text-center text-gray-600 text-sm mt-4">
                Kamu Belum Punya Akun ? 
                <a href="#" class="text-blue-500 font-semibold hover:underline">Register!!</a>
            </p>
        </div>

        <!-- Kolom Kanan -->
        <div class="w-1/2 flex flex-col justify-center text-black px-8 relative">
            <img src="./assets/atas dalam card.png" alt="vector" class="dalam_atas" />
            <h2 class="text-2xl font-bold mb-4">Welcome Back !</h2>
            <p class="text-sm leading-relaxed">
                Selamat datang di halaman login,<br>
                jika belom register silahkan masuk ke halaman register
            </p>
            <div class="absolute bottom-0 w-full">
                <svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" class="w-full">
                    <path d="M0,0V46.29c47.6,21.59,95.2,43.17,144,43.1,48.8-.07,97.6-21.77,146.4-21.28s97.6,23.7,146.4,32.1c48.8,8.4,97.6,3.4,146.4-8.5S727.6,61.59,776,53.1c48.4-8.5,97.6-2.3,146.4,5.4s97.6,18.2,146.4,21.3c48.8,3.1,97.6-1.7,146.4-8.5,48.8-6.8,97.6-15.8,146.4-23.7V0Z" fill="#ffffff"></path>
                </svg>
            </div>
            <img src="./assets/bawah dalam card.png" alt="vector" class="dalam_bawah" />
        </div>
    </div>

    <img src="./assets/samping kanan luar body.png" alt="vector" class="kanan_luar" />
</body>
</html>
