<x-app-layout>
    <x-slot name="header">
        <!-- Slider Header -->
        <div class="relative w-full overflow-hidden bg-white">
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

        <h1 class="text-black text-1xl font-bold mt-20">
            <span class="bg-gradient-to-rt" id="event">
                <span>Event Bulan Ini</span>
            </span>
        </h1>
        <div class="flex flex-col md:flex-row items-center md:justify-between bg-white shadow-lg rounded-lg overflow-hidden mx-4 md:mx-8 mt-8">
            <!-- Bagian Gambar -->
            <div class="relative w-full md:w-2/3">
                <img src="assets/e96c4c47ea7ff8533527af1e8edf3aa5.jpg" alt="Event Banner" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-4"></div>
            </div>

            <!-- Bagian Teks -->
            <div class="w-full md:w-1/3 bg-white p-6">
                <h2 class="text-2xl font-bold text-gray-800">Musik seru, vibes keren!</h2>
                <p class="mt-4 text-gray-600">
                    Siapkan energi, ajak teman, dan nikmati malam penuh hits favoritmu! Tiket tersedia sekarang, buruan amankan tempatmu!
                </p>
            </div>
        </div>

       <div class="bg-blue-900 text-white py-8 mt-20 h-80 w-full" style="background: linear-gradient(180deg, rgb(22, 3, 40), rgb(72, 8, 136));">
    <div class="text-start text-2xl font-bold ml-20 mb-0">
        <h2>Top Event!</h2>
    </div>
    <div class="flex justify-center items-center space-x-4 h-full w-full">
        <!-- Card 1 -->
        <div class="relative flex flex-row items-center space-x-4">
            <div class="gambartopevent">
                <img src="assets/konser1.jpg" alt="Event 1" class="w-full">
            </div>
        </div>
        <!-- Card 2 -->
        <div class="relative flex flex-row items-center space-x-4">
            <div class="gambartopevent">
                <img src="assets/konser2.jpg" alt="Event 2" class="w-full">
            </div>
        </div>
        <!-- Card 3 -->
        <div class="relative flex flex-row items-center space-x-4">
            <div class="gambartopevent">
                <img src="assets/konser3.jpg" alt="Event 3" class="w-full">
            </div>
        </div>
    </div>
</div>


    </x-slot>

    <!-- Section Event Terdekat -->
    <div class="bg-white py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-6">Event Terdekat</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

                <!-- Card Event -->
                <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                    <img src="assets/foto3.jpg" alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-4">
                    <h5 class="text-lg font-medium text-gray-800 mb-2">Rekomendasi Event</h5>
                    <p class="text-sm text-gray-500 mb-2">18 Januari 2025</p>
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                        <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Detail</button>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                    <img src="assets/foto3.jpg" alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-4">
                    <h5 class="text-lg font-medium text-gray-800 mb-2">Rekomendasi Event</h5>
                    <p class="text-sm text-gray-500 mb-2">18 Januari 2025</p>
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                        <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Detail</button>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                    <img src="assets/foto3.jpg" alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-4">
                    <h5 class="text-lg font-medium text-gray-800 mb-2">Rekomendasi Event</h5>
                    <p class="text-sm text-gray-500 mb-2">18 Januari 2025</p>
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                        <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Detail</button>
                    </div>
                </div>

                <!-- Tambahkan card lainnya -->
                <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                    <img src="assets/foto3.jpg" alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-4">
                    <h5 class="text-lg font-medium text-gray-800 mb-2">Rekomendasi Event</h5>
                    <p class="text-sm text-gray-500 mb-2">18 Januari 2025</p>
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                        <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Detail</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="flex justify-center items-center mt-5">
    <img src="./assets/image3.png" alt="Gambar" class="max-w-full max-h-full">
</div>


    <!-- Informasi untuk Event Creator -->
    <div class="container mx-auto px-1 py-20 flex flex-col md:flex-row items-center md:justify-between" style="background-color: white;">


        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Kolom Kiri -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                    Informasi yang perlu kamu ketahui sebagai event creator
                </h2>
                <p class="text-gray-600">
                    Beberapa artikel yang perlu kamu ketahui sebelum membuat event di Artatix agar eventmu menjadi berkesan untuk semua penonton!
                </p>
            </div>

            <!-- Kolom Kanan -->
            <div class="space-y-6">
                <!-- Card 1 -->
                <div class="flex items-center space-x-4 bg-white shadow-lg rounded-lg p-4">
                    <img src="assets/feast.jpg" alt="Event 1" class="w-24 h-16 rounded-lg object-cover">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                        <p class="text-sm text-gray-500 flex items-center">
                            <span class="material-icons text-gray-400 mr-2">event</span> 18 Januari 2025
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-center space-x-4 bg-white shadow-lg rounded-lg p-4">
                    <img src="assets/feast.jpg" alt="Event 2" class="w-24 h-16 rounded-lg object-cover">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                        <p class="text-sm text-gray-500 flex items-center">
                            <span class="material-icons text-gray-400 mr-2">event</span> 18 Januari 2025
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-center space-x-4 bg-white shadow-lg rounded-lg p-4">
                    <img src="assets/feast.jpg" alt="Event 3" class="w-24 h-16 rounded-lg object-cover">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Rekomendasi Event</h3>
                        <p class="text-sm text-gray-500 flex items-center">
                            <span class="material-icons text-gray-400 mr-2">event</span> 18 Januari 2025
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

