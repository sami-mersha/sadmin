<header class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-lg bg-white/80 py-4 shadow-md backdrop-blur-lg md:top-6 md:rounded-3xl">
    <div class="px-6">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a aria-current="page" class="flex items-center" href="/">
                    <img class="h-8 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Logo">
                    <p class="ml-3 text-lg font-semibold text-gray-900">VIBSTIK</p>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex md:items-center md:gap-6">
                <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600" href="#">Home</a>
                <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600" href="#">Rekomendasi</a>
                <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600" href="#">Hubungi Kami</a>
            </div>

            <!-- User Section -->
            <!-- User Section -->
<div class="flex items-center gap-4">
    <img class="h-10 w-10 rounded-full border-2 border-gray-300" src="https://via.placeholder.com/150" alt="User">
    <p class="text-sm font-medium text-gray-900">Hi, Sasti Juni</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800">Logout</button>
    </form>
</div>

        </div>
    </div>
</header>

<section class="w-full">
    <div class="relative w-full min-h-screen bg-[url('https://images.unsplash.com/photo-1449844908441-8829872d2607?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxob21lfGVufDB8MHx8fDE3MTA0MDE1NDZ8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center flex flex-col justify-center items-center text-white">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <!-- Hero Content -->
        <div class="relative z-10 text-center">
            <h1 class="text-4xl font-bold md:text-5xl">Mulai Petualangan Musikmu di Sini!</h1>
            <p class="mt-4 text-lg md:text-xl">Temukan Konser Favoritmu di Sini! Dapatkan tiket ke momen tak terlupakan, langsung dari ujung jarimu.</p>
        </div>
        <!-- Search Bar -->
        <div class="relative z-10 w-3/4 mt-8 md:w-1/2">
            <form class="flex items-center bg-white rounded-full shadow-md">
                <input type="text" class="w-full px-4 py-2 text-gray-900 rounded-l-full focus:outline-none" placeholder="Pilih tiket anda">
                <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded-full hover:bg-blue-500">Search</button>
            </form>
        </div>
    </div>
</section>

