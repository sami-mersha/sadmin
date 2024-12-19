<nav x-data="{ open: false }" class="shadow mb-0" style="background: linear-gradient(180deg, rgb(22, 3, 40), rgb(72, 8, 136)); height: 5rem; margin: 0; padding: 0;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="{{ route('dashboard') }}" class="flex items-center">
                <img src="{{ asset('assets/removebg.png') }}" alt="Logo" class="h-10 w-10">
                <h1 class="font-bold text-xl text-white ml-2 font-serif">IBSTIK</h1>
            </a>
        </div>

        <!-- Search Bar -->
        <div class="relative flex-grow max-w-sm mx-4">
            <input 
                type="text" 
                placeholder="Cari di DekoVista" 
                class="w-full px-4 py-3 rounded-lg bg-gray-100 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>

        <!-- Navigation Links -->
        <div class="hidden sm:flex space-x-10">
            <a href="#home" class="text-white hover:text-blue-400 font-medium">
                Home
            </a>
            <a href="#rekomendasi" class="text-white hover:text-blue-400 font-medium">
                Rekomendasi
            </a>
            <a href="#hubungi-kami" class="text-white hover:text-blue-400 font-medium">
                Hubungi Kami
            </a>
        </div>

        <!-- Profile -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('assets/user.png') }}" alt="Profile" class="h-10 w-10 rounded-full">
            <span class="text-white font-medium">Hi, {{ Auth::user()->name }}</span>
        </div>
    </div>
</nav>
