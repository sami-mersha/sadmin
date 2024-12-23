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
        <div class="relative flex items-center space-x-3">
            <!-- Profile Icon -->
            <img src="{{ asset('assets/user.png') }}" alt="Profile" class="h-10 w-10 rounded-full cursor-pointer" @click="open = !open">
            <span class="text-white font-medium cursor-pointer" @click="open = !open">Hi, {{ Auth::user()->name }}</span>

            <!-- Dropdown Menu -->
            <div 
                x-show="open" 
                @click.away="open = false" 
                x-transition:enter="transition ease-out duration-200" 
                x-transition:enter-start="opacity-0 transform scale-95" 
                x-transition:enter-end="opacity-100 transform scale-100" 
                x-transition:leave="transition ease-in duration-150" 
                x-transition:leave-start="opacity-100 transform scale-100" 
                x-transition:leave-end="opacity-0 transform scale-95" 
                class="absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-xl z-50"
            >
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    {{ __('Profile') }}
                </a>
                <hr class="border-gray-200 my-1">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
