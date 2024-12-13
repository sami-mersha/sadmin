<nav x-data="{ open: false }" class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-5 lg:px-1">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center ">
                    <img src="{{ asset('assets/removebg.png') }}" alt="Logo" class="h-9 w-8">
                    <h1 class="font-bold text-xl text-black font-serif">IBSTIC</h1>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex space-x-8">
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="text-blue-500 hover:text-blue-600">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('rekomendasi')" class="text-blue-500 hover:text-blue-600">
                    {{ __('Rekomendasi') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('hubungi.kami')" class="text-blue-500 hover:text-blue-600">
                    {{ __('Hubungi Kami') }}
                </x-nav-link>
            </div>

            <!-- Profile Dropdown -->
            <div class="relative">
            <button @click="open = !open" class="flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 focus:outline-none">
    <img src="{{ asset('assets/user.png') }}" alt="Profile" class="h-8 w-8 rounded-full">
    <span class="ml-2">Hi, {{ Auth::user()->name }}</span>
    <svg class="ml-1 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
</button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-50">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        {{ __('Profile') }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
