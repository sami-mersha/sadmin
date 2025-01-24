    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }


        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            overflow:hidden;
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

                    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

                    </div>

                    <!-- Slider Header -->
                    <div id="targetSection"
                        class="relative py-0 mx-auto w-[90%] max-w-7xl overflow-hidden bg-gray-100 mb-0 mt-40 rounded-lg">
                        <div id="slider"
                            class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide transition-transform duration-500 ease-in-out">

                            <!-- Slide 1 -->
                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd1.png" alt="Slide 1" class="w-full h-auto rounded-lg">

                            </div>

                            <!-- Slide 2 -->
                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd2.png" alt="Slide 2" class="w-full h-auto rounded-lg">
                            </div>

                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd3.png" alt="Slide 2" class="w-full h-auto rounded-lg">
                            </div>

                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd4.png" alt="Slide 2" class="w-full h-auto rounded-lg">
                            </div>

                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd5.png" alt="Slide 2" class="w-full h-auto rounded-lg">
                            </div>

                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd6.png" alt="Slide 2" class="w-full h-auto rounded-lg">
                            </div>

                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd7.png" alt="Slide 2" class="w-full h-auto rounded-lg">
                            </div>

                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd8.png" alt="Slide 2" class="w-full h-auto rounded-lg">
                            </div>

                            <div class="snap-start flex-shrink-0 w-full">
                                <img src="assets/hd9.png" alt="Slide 2" class="w-full h-auto rounded-lg">
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
                        </div>
                    </div>


                    <!-- Script -->
                    <script>

document.querySelector('a[href="#choose"]').addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah aksi default
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth', // Animasi scroll halus
            block: 'start'
        });
    });
                      
    // Saat halaman dimua



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


<div class="container mx-auto px-4 3xl:px-8 py-8 mt-20">
    <div class="grid grid-cols-4 gap-6">
        @foreach ($konsers as $knsr)
            <div class="m-4 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <!-- Menampilkan gambar -->
                @if ($knsr->image)
                    <img src="{{ asset('storage/' . $knsr->image) }}" alt="Gambar {{ $knsr->nama }}"
                        class="w-full h-48 object-cover transition-transform duration-300 ease-in-out">
                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default Gambar"
                        class="w-full h-48 object-cover transition-transform duration-300 ease-in-out">
                @endif

                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-200">
                        {{ $knsr->nama }}</h3>
                    <ul class="event-details text-gray-600 mt-2 space-y-1">
                        <li class="flex items-center text-sm">
                            <i class="fa-solid fa-calendar-days mr-2 text-gray-500"></i>{{ $knsr->tanggal }}</li>
                        <li class="flex items-center text-sm">
                            <i class="fa-solid fa-map-marker-alt mr-2 text-gray-500"></i>{{ $knsr->lokasi->location }}</li>
                    </ul>

                    <div class="flex items-center justify-between mt-4">
                        @foreach ($knsr->tiket as $kt)
                            <div class="flex flex-col justify-between">
                                <p class="text-sm font-bold text-orange-600 mb-2">Stok: {{ $kt->jumlah_tiket }} tiket</p>
                                <p class="text-xl font-bold text-orange-600 mb-2">Rp:{{ number_format($kt->harga_tiket, 0, ',', '.') }},00</p>
                            </div>
                        @endforeach

                        <a href="{{ route('product.show', $knsr->id) }}"
                            class="mt-9 inline-block bg-blue-700 text-white text-center py-2 px-6 rounded-md text-sm hover:bg-blue-800 transition duration-200 h-full flex items-center justify-center">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



                    <center class="flex justify-center">
                        <div>
                        <a href="{{ route('lainya.index') }}" class="block">
    <button
        class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-9 py-3 text-center mt-10 mb-10">
        Lihat lainnya
    </button>
</a>






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
            .scroll-btn {
                position: absolute; /* Mengatur posisi tombol relatif ke container terdekat */
                bottom: -60px; /* Tombol berada 60px di bawah elemen pencarian */
                left: 50%; /* Pusatkan tombol secara horizontal */
                transform: translateX(-50%); /* Menyesuaikan posisi agar benar-benar di tengah */
                display: flex;
                justify-content: center;
                align-items: center;
                width: 70px; /* Lebar tombol */
                height: 70px; /* Tinggi tombol */
                border:2px solid white;
                background-color: transparent;
                color: white; /* Warna teks di tombol */
                font-size: 24px;
                border-radius: 50%; /* Membuat tombol bundar */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Menambah bayangan */
                transition: transform 0.3s ease-in-out, background-color 0.3s;
                cursor: pointer;
                margin-top:20px;
            }

            .scroll-btn:hover {
                background-color: rgba(13, 54, 165, 0.21); /* Biru lebih gelap saat hover */
                transform: translateX(-50%) scale(1.1); /* Menjaga posisi tengah saat diperbesar */
            }

            .scroll-btn i {
                animation: bounce 2s infinite; /* Menambahkan animasi melompat */
            }
            .ri-arrow-down-double-line {
    font-size: 2.5rem; /* Sesuaikan ukuran panah */
}

            /* Animasi untuk ikon */
            @keyframes bounce {
                0%, 100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-10px);
                }
            }

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
