<x-app-layout>
    <x-slot name="header">
        <!-- Slider Header -->
        <div class="relative w-full overflow-hidden bg-white">
            <div id="slider" class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide">
                <!-- Slide 1 -->
                <div class="snap-start flex-shrink-0 w-full">
                    <img src="assets/foto2.jpg" alt="Slide 1" class="w-full h-auto">
                </div>
                <!-- Slide 2 -->
                <div class="snap-start flex-shrink-0 w-full">
                    <img src="assets/foto3.jpg" alt="Slide 2" class="w-full h-auto">
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
                    <p class="text-sm text-gray-500 mb-4">18 Januari 2025</p>
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                        <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Beli</button>
                    </div>

                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                    <img src="assets/foto3.jpg" alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-4">
                    <h5 class="text-lg font-medium text-gray-800 mb-2">Rekomendasi Event</h5>
                    <p class="text-sm text-gray-500 mb-2">18 Januari 2025</p>
                    <p class="text-sm text-gray-500 mb-4">18 Januari 2025</p>
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                        <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Beli</button>
                    </div>
                <!-- Tambahkan card lainnya -->
            </div>
            <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
                <img src="assets/foto3.jpg" alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-4">
                <h5 class="text-lg font-medium text-gray-800 mb-2">Rekomendasi Event</h5>
                <p class="text-sm text-gray-500 mb-2">18 Januari 2025</p>
                <p class="text-sm text-gray-500 mb-4">18 Januari 2025</p>
                <div class="flex items-center justify-between">
                    <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                    <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Beli</button>
                </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg shadow p-4">
            <img src="assets/foto3.jpg" alt="Event 1" class="w-full h-32 object-cover rounded-lg mb-4">
            <h5 class="text-lg font-medium text-gray-800 mb-2">Rekomendasi Event</h5>
            <p class="text-sm text-gray-500 mb-2">18 Januari 2025</p>
            <p class="text-sm text-gray-500 mb-4">18 Januari 2025</p>
            <div class="flex items-center justify-between">
                <p class="text-xl font-bold text-red-600">Rp 200.000</p>
                <button class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Beli</button>
            </div>
    </div>

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
    </style>
</x-app-layout>
