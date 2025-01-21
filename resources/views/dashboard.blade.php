    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;


        }

        /* CSS untuk menonaktifkan scroll */
        body.no-scroll {
            overflow: hidden;
        }


        .hero-section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            background: url('assets/frame 4036.png') no-repeat center center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }


        .card {
            border: 1px solid black;
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            width: 300px;
            /* Menentukan lebar card */
            margin: 0 10px;
            /* Memberikan margin kiri dan kanan */
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-content {
            padding: 16px;
        }

        .card-content h4 {
            font-size: 18px;
            font-weight: bold;
            margin: 0 0 8px;
            color: #333;
        }

        .card-content p {
            font-size: 14px;
            color: #666;
            margin: 0 0 12px;
        }

        .card-content .price {
            font-size: 16px;
            font-weight: bold;
            color: #ff5722;
            margin: 0 0 12px;
        }

        .card-content .button {
            background: #007bff;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 20px;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        .card-content .button:hover {
            background: #0056b3;
        }

        .flex justify-center {
            justify-content: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            /* Membuat card-wrap ke baris berikutnya */
            justify-content: center;
            /* Memusatkan card dalam container */
            gap: 20px;
            /* Memberikan jarak antar card */
            padding: 10px;
            /* Padding sekitar container */
        }

        .card {
            width: 300px;

        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 10px;
        }

        /* Custom style for box layout */
        .event-box {
            width: 350px;
            /* Atur lebar box sesuai keinginan */
            padding: 25px;
            margin: 0 auto;
            /* Pusatkan box */
        }

        .event-box img {
            height: 300px;
            height: 30%;
            object-fit: cover;
        }

        .event-details {
            font-size: 14px;
        }

        #slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            /* Menambahkan animasi transisi */
        }

        #slider>div {
            flex-shrink: 0;
            width: 100%;
        }
    </style>

    <x-app-layout>
        <x-slot name="header">

            <div>
                <section class="w-full">

                    <div class="hero-section">

                        <div class="hero-content mt-9 ">
                            <h1 class="text-5xl py-4 font-black">Mulai Petualangan Musikmu di Sini!</h1>
                            <p class="pb-12 text-xl py-3">Temukan Konser Favoritmu di Sini! Dapatkan tiket ke momen tak
                                terlupakan, langsung dari
                                ujung jarimu.</p>
                            <div>
                                <div class="relative pt-20">
                                    <div
                                        class="flex items-center border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-blue-600 p-1 bg-white">
                                        <i class="pl-3 pr-3 fas fa-search text-gray-500"></i>
                                        <input id="search-bar" placeholder="Pilih tiket anda"
                                            class="w-full p-2 rounded-md focus:outline-none border-none text-gray-900">
                                        <div class="px-5">
                                            <button
                                                class="bg-blue-700 text-white px-6 py-1 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-600 text-1xl">
                                                Search
                                            </button>
                                        </div>
                                        <button id="scrollDownBtn"
                                            class="fixed bottom-10 left-1/2 transform  bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7 7 7-7" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>

                    <!-- Slider Header -->
                    <div id="targetSection"
                        class="relative py-0 mx-auto w-[90%] max-w-6xl overflow-hidden bg-gray-100 mb-0 mt-20 rounded-lg">
                        <div id="slider"
                            class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide transition-transform duration-500 ease-in-out">

                            <!-- Slide 1 -->
                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/foto3.jpg" alt="Slide 2" class="w-full h-auto rounded-lg">

                            </div>

                            <!-- Slide 2 -->
                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/foto2.jpg" alt="Slide 1" class="w-full h-auto rounded-lg">
                            </div>

                            <!-- Tambahkan slide lainnya -->
                        </div>

                        <!-- Tombol navigasi -->
                        <button id="prevBtn"
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white text-black rounded-full p-3 shadow hover:scale-110 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button id="nextBtn"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white text-black rounded-full p-3 shadow hover:scale-110 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <!-- Indikator -->
                        <div id="indicators"
                            class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                            <span
                                class="w-3 h-3 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-600 transition-all duration-300"></span>
                            <span
                                class="w-3 h-3 bg-gray-400 rounded-full cursor-pointer hover:bg-gray-600 transition-all duration-300"></span>
                            <!-- Tambahkan lebih banyak titik sesuai jumlah slide -->
                        </div>
                    </div>


                    <!-- Script -->
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Menonaktifkan scroll saat halaman pertama kali dimuat
                            document.body.classList.add("no-scroll");

                            // Menangani klik tombol panah
                            document.getElementById("scrollDownBtn").addEventListener("click", function() {
                                // Menghapus tombol setelah diklik
                                this.style.display =
                                "none"; // atau gunakan this.classList.add('hidden') jika menggunakan Tailwind

                                // Menghapus kelas 'no-scroll' dari body untuk memungkinkan scroll
                                document.body.classList.remove("no-scroll");

                                // Scroll ke bagian bawah
                                const targetSection = document.getElementById("targetSection");
                                targetSection.scrollIntoView({
                                    behavior: "smooth"
                                });
                            });
                        });


                        let currentIndex = 0;
                        const slides = document.querySelectorAll('#slider > div');
                        const totalSlides = slides.length;
                        const prevBtn = document.getElementById('prevBtn');
                        const nextBtn = document.getElementById('nextBtn');
                        const indicators = document.getElementById('indicators');

                        // Fungsi untuk menampilkan slide yang aktif
                        function showSlide(index) {
                            // Pastikan index berada dalam rentang jumlah slide
                            if (index < 0) {
                                currentIndex = totalSlides - 1;
                            } else if (index >= totalSlides) {
                                currentIndex = 0;
                            } else {
                                currentIndex = index;
                            }

                            // Menyembunyikan semua slide
                            slides.forEach(slide => slide.classList.add('hidden'));

                            // Menampilkan slide yang sesuai
                            slides[currentIndex].classList.remove('hidden');

                            // Mengupdate indikator (opsional)
                            const dots = indicators.querySelectorAll('span');
                            dots.forEach((dot, i) => {
                                if (i === currentIndex) {
                                    dot.classList.add('bg-gray-600');
                                    dot.classList.remove('bg-gray-400');
                                } else {
                                    dot.classList.add('bg-gray-400');
                                    dot.classList.remove('bg-gray-600');
                                }
                            });
                        }

                        // Tombol navigasi
                        prevBtn.addEventListener('click', () => showSlide(currentIndex - 1));
                        nextBtn.addEventListener('click', () => showSlide(currentIndex + 1));

                        // Auto Slide
                        setInterval(() => {
                            showSlide(currentIndex + 1); // Geser ke slide berikutnya
                        }, 5000); // Ganti slide setiap 5 detik

                        // Inisialisasi tampilan pertama
                        showSlide(currentIndex);
                    </script>





                    <div class="container mx-auto py-8">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 justify-center">
                            <!-- Box 1 -->
                            @foreach ($konsers as $knsr)
                                <div
                                    class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl m-4">
                                    <!-- Menampilkan gambar -->
                                    @if ($knsr->image)
                                        <img src="{{ asset('storage/' . $knsr->image) }}"
                                            alt="Gambar {{ $knsr->nama }}"
                                            class="w-full h-48 object-cover transition-transform duration-300 ease-in-out">
                                    @else
                                        <img src="{{ asset('images/default.jpg') }}" alt="Default Gambar"
                                            class="w-full h-48 object-cover transition-transform duration-300 ease-in-out">
                                    @endif

                                    <div class="p-6">
                                        <h3
                                            class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-200">
                                            {{ $knsr->nama }}</h3>
                                        <ul class="event-details text-gray-600 mt-2 space-y-1">
                                            <li class="flex items-center text-sm"><i
                                                    class="fa-solid fa-calendar-days mr-2 text-gray-500"></i>
                                                {{ $knsr->tanggal }}</li>
                                            <li class="flex items-center text-sm"><i
                                                    class="fa-solid fa-map-marker-alt mr-2 text-gray-500"></i>
                                                {{ $knsr->lokasi->location }}</li>
                                        </ul>
                                        <p class="text-2xl font-bold text-orange-600 mt-4">Rp 200.000</p>
                                        <a href="{{ route('detail') }}"
                                            class="inline-block bg-blue-700 text-white text-center py-3 mt-6 rounded-md w-full text-lg hover:bg-blue-700 transition duration-200">Detail</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>




                    <center class="flex justify-center">
                        <div>
                            <button
                                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10 mb-2">
                                <a href="{{ route('lainnya') }}" class="button">Lainnya</a>
                            </button>





                    </center>





                    @extends('layouts.footer')


                    <script>
                        const slider = document.getElementById('slider');
                        const prevBtn = document.getElementById('prevBtn');
                        const nextBtn = document.getElementById('nextBtn');

                        let currentIndex = 0;

                        function updateSlider(index) {
                            slider.scrollTo({
                                left: slider.offsetWidth * index,
                                behavior: 'smooth'
                            });
                        }

                        prevBtn.addEventListener('click', () => {
                            currentIndex = (currentIndex - 1 + slider.children.length) % slider.children.length;
                            updateSlider(currentIndex);
                        });

                        nextBtn.addEventListener('click', () => {
                            currentIndex = (currentIndex + 1) % slider.children.length;
                            updateSlider(currentIndex);
                        });
                    </script>

                    <style>
                        .scrollbar-hide {
                            -ms-overflow-style: none;
                            /* IE and Edge */
                            scrollbar-width: none;
                            /* Firefox */
                        }

                        .scrollbar-hide::-webkit-scrollbar {
                            display: none;
                            /* Chrome, Safari, Opera */
                        }

                        .rounded-lg {
                            border-radius: 0.5rem;
                        }

                        .shadow {
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        }

                        .bg-white {
                            background-color: #ffffff;
                        }

                        .event-banner {
                            position: relative;
                            text-align: center;
                            color: white;
                        }

                        .event-photo {
                            width: 100%;
                            height: auto;
                        }

                        .event-text {
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
                        }

                        h1 {
                            font-size: 2.5rem;
                            font-weight: bold;
                        }

                        .event-banner {
                            position: relative;
                            width: 100%;
                            max-width: 800px;
                            margin: auto;
                            border-radius: 15px;
                            overflow: hidden;
                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
                        }

                        .event-photo {
                            width: 100%;
                            height: auto;
                            display: block;
                        }

                        .event-text {
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            text-align: center;
                            color: white;
                            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
                        }

                        .event-text h1 {
                            font-size: 2.5rem;
                            font-weight: bold;
                            margin-bottom: 10px;
                        }

                        .event-text p {
                            font-size: 1.2rem;
                            margin: 5px 0;
                        }

                        .flex.items-center.justify-between {
                            margin-top: 15px;
                            display: flex;
                            justify-content: space-between;
                        }

                        .gambartopevent {

                            width: 300px;
                            heigh: 100px;
                        }
                    </style>
    </x-app-layout>
