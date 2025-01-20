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
        width: 300px;            /* Menentukan lebar card */
        margin: 0 10px;          /* Memberikan margin kiri dan kanan */
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
        justify-content:  center;
        }

        .container {
        display: flex;
        flex-wrap: wrap;         /* Membuat card-wrap ke baris berikutnya */
        justify-content: center; /* Memusatkan card dalam container */
        gap: 20px;               /* Memberikan jarak antar card */
        padding: 10px;           /* Padding sekitar container */
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
                     width: 350px; /* Atur lebar box sesuai keinginan */
                     padding: 25px;
                        margin: 0 auto; /* Pusatkan box */
                    }
        .event-box img {
            height: 300px;
            height: 30%;
            object-fit: cover;
        }
        .event-details {
            font-size: 14px;
        }

    </style>

    <x-app-layout>
        <x-slot name="header">

        <div>
            <section class="w-full">

                <div class="hero-section">

                    <div class="hero-content mt-9 ">
                        <h1>Mulai Petualangan Musikmu di Sini!</h1>
                        <p>Temukan Konser Favoritmu di Sini! Dapatkan tiket ke momen tak terlupakan, langsung dari ujung jarimu.</p>
                        <div>
                            <label
                class="mt-20 relative bg-white w-full max-w-4xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-2xl gap-2 shadow-2xl focus-within:border-gray-300"
                for="search-bar">
                <input id="search-bar" placeholder="Pilih tiket anda"
                    class="px-1  py-2 w-full rounded-md flex-1 outline-none bg-white text-gray-700 ">
                <button
                    class="w-full md:w-auto px-6 py-3 bg-blue-600 text-white fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all disabled:opacity-70">
                    <span class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                        Search
                    </span>
                </button>
            </label>
                        </div>
                    </div>
                </div>

            <!-- Slider Header -->
            <div class="relative w-full overflow-hidden bg-white mb-40 mt-48">
                <div id="slider" class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: thin;">

                    <!-- Slide 1 -->
                    <div class="snap-start flex-shrink-0 w-full " id="home">
                        <img src="assets/foto2.jpg" alt="Slide 1" class="w-full h-auto rounded-lg">
                    </div>
                    <!-- Slide 2 -->
                    <div class="snap-start flex-shrink-0 w-full">
                        <img src="assets/foto3.jpg" alt="Slide 2" class="w-full h-auto rounded-lg">
                    </div>
                    <!-- Tambahkan slide lainnya -->
                </div>
                <!-- Tombol navigasi -->
                <button id="prevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-black rounded-full p-2 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="nextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-black rounded-full p-2 shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>



            <div class="container mx-auto py-8 ">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Box 1 -->
                    <div class="bg-white border rounded-lg shadow-md overflow-hidden event-box mr-5">
                        <img src="https://via.placeholder.com/400x200" alt="Event Thumbnail">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="event-details text-gray-600 mt-2 space-y-1">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Jember</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-xl font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="#" class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-md text-sm hover:bg-blue-700 transition">Detail</a>
                        </div>
                    </div>
                    <!-- Box 2 -->
                    <div class="bg-white border rounded-lg shadow-md overflow-hidden event-box">
                        <img src="https://via.placeholder.com/400x200" alt="Event Thumbnail">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="event-details text-gray-600 mt-2 space-y-1">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Jember</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-xl font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="#" class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-md text-sm hover:bg-blue-700 transition">Detail</a>
                        </div>
                    </div>
                    <!-- Box 3 -->
                    <div class="bg-white border rounded-lg shadow-md overflow-hidden event-box">
                        <img src="https://via.placeholder.com/400x200" alt="Event Thumbnail">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="event-details text-gray-600 mt-2 space-y-1">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Jember</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-xl font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="#" class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-md text-sm hover:bg-blue-700 transition">Detail</a>
                        </div>
                    </div>


                    <!-- Box 4 -->
                    <div class="bg-white border rounded-lg shadow-md overflow-hidden event-box mt-24">
                        <img src="https://via.placeholder.com/400x200" alt="Event Thumbnail">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="event-details text-gray-600 mt-2 space-y-1">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Jember</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-xl font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="#" class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-md text-sm hover:bg-blue-700 transition">Detail</a>
                        </div>
                    </div>
                    <!-- Box 5 -->
                    <div class="bg-white border rounded-lg shadow-md overflow-hidden event-box mt-24">
                        <img src="https://via.placeholder.com/400x200" alt="Event Thumbnail">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="event-details text-gray-600 mt-2 space-y-1">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Jember</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-xl font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="#" class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-md text-sm hover:bg-blue-700 transition">Detail</a>
                        </div>
                    </div>
                    <!-- Box 6 -->
                    <div class="bg-white border rounded-lg shadow-md overflow-hidden event-box mt-24">
                        <img src="https://via.placeholder.com/400x200" alt="Event Thumbnail" class="w-full h-60 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                            <ul class="event-details text-gray-600 mt-2 space-y-1">
                                <li><i class="fa-solid fa-calendar-days mr-2"></i> 18 Januari 2025</li>
                                <li><i class="fa-solid fa-map-marker-alt mr-2"></i> Jember</li>
                                <li class="text-red-600"><i class="fa-solid fa-ticket-alt mr-2"></i> Stok: 120 Tiket</li>
                            </ul>
                            <p class="text-xl font-bold text-orange-600 mt-4">Rp 200.000</p>
                            <a href="#" class="block bg-blue-600 text-white text-center py-2 mt-4 rounded-md text-sm hover:bg-blue-700 transition">Detail</a>
                        </div>
                    </div>




                </div>
            </div>




    <center class="flex justify-center">
    <div>
        <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-10 mb-2">
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
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
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

    .gambartopevent{

    width: 300px;
    heigh: 100px;
    }



    </style>
    </x-app-layout>

