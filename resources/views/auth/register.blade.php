<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title>Register Ke Vibestic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow:hidden;
        }
        .gambarkiri img,
        .kanan_luar,
        .dalam_atas,
        .dalam_bawah {
            position: absolute;
        }
        .gambarkiri .kiri_luar_atas {
            position: absolute;
            top: 0px;
            left: 0;
            width: 447px;
            height: 297px;
            object-fit: cover;
        }
        .gambarkiri .kiri_luar_bawah {
            position: absolute;
            bottom: 0px;
            left: 0;
            width: 373px;
            height: 135px;
            object-fit: cover;
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
<body class="bg-gray -100 flex items-center justify-center min-h-screen">

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
            <h2 class="text-center text-2xl font-bold mb-6">Register for Vibestic</h2>
            <!-- Form -->
            <form action="{{route('register')}}" class="space-y-6" method="post">
                @csrf
                <!-- Input Username -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-4 flex items-center">
                        <img src="assets/people.png" alt="Username Icon" class="w-6 h-6 text-gray-400" />
                    </div>
                    <input type="text" placeholder="Username"
                           class="w-full border border-gray-300 rounded-lg py-3 pl-12 pr-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           name="name">
                </div>
                <!-- Input Email -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-4 flex items-center">
                        <img src="assets/diskette.png" alt="Email Icon" class="w-6 h-6 text-gray-400" />
                    </div>
                    <input type="email" placeholder="Email"
                           class="w-full border border-gray-300 rounded-lg py-3 pl-12 pr-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           name="email">
                </div>
                <!-- Input Password -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-4 flex items-center">
                        <img src="assets/unlock.png" alt="Password Icon" class="w-6 h-6 text-gray-400" />
                    </div>
                    <input type="password" placeholder="Password"
                           class="w-full border border-gray-300 rounded-lg py-3 pl-12 pr-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           name="password">
                </div>
                <!-- Input Confirm Password -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-4 flex items-center">
                        <img src="assets/lock.png" alt="Confirm Password Icon" class="w-6 h-6 text-gray-400" />
                    </div>
                    <input type="password" placeholder="Confirm Password"
                           class="w-full border border-gray-300 rounded-lg py-3 pl-12 pr-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                           name="password_confirmation">
                </div>
                <!-- Tombol Register -->
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white py-3 rounded-lg font-semibold shadow-md">
                    Register
                </button>
            </form>
            <!-- Link Login -->
            <p class="text-center text-gray-600 text-sm mt-4">
                Already have an account?
                <a href="#" class="text-blue-500 font-semibold hover:underline">Login!</a>
            </p>
        </div>

        <!-- Kolom Kanan -->
        <div class="w-1/2 flex flex-col justify-center text-black px-8 relative">
            <img src="./assets/atas dalam card.png" alt="vector" class="dalam_atas" />
            <h2 class="text-2xl font-bold mb-4">Welcome to Vibestic!</h2>
            <p class="text-sm leading-relaxed">
                Sign up and join our vibrant community.<br>
                Create an account to explore all the exciting features.
            </p>
            <div class="absolute bottom-0 w-full">
                <svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" class="w-full">
                    <path d="M0,0V46.29c47.6,21.59,95.2 ,43.17,144,43.1,48.8-.07,97.6-21.77,146.4-21.28s97.6,23.7,146.4,32.1c48.8,8.4,97.6,3.4,146.4-8.5S727.6,61.59,776,53.1c48.4-8.5,97.6-2.3,146.4,5.4s97.6,18.2,146.4,21.3c48.8,3.1,97.6-1.7,146.4-8.5,48.8-6.8,97.6-15.8,146.4-23.7V0Z" fill="#ffffff"></path>
                </svg>
            </div>
            <img src="./assets/bawah dalam card.png" alt="vector" class="dalam_bawah" />
        </div>
    </div>

    <img src="./assets/samping kanan luar body.png" alt="vector" class="kanan_luar" />
</body>
</html>
