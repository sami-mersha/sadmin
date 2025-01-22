<style>
    input::placeholder {
    color: #a1a1aa; /* Warna abu placeholder */
    font-size: 14px;
    font-weight: 500;
}

button:active {
    transform: scale(0.98); /* Efek klik */
}

</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<header class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-lg bg-white/80 py-2 shadow-md backdrop-blur-lg md:top-6 md:rounded-3xl ">


    <div class="px-10 mb-2">
      <div class="flex items-center justify-between">
          <!-- Logo Section -->
          <div class="flex items-center">
              <a href="{{ route('dashboard') }}" class="flex items-center">
                  <img src="{{ asset('assets/removebg.png') }}" alt="Logo" class="h-10 w-10">
                  <h1 class="font-bold text-xl text-black mt-1">IBSTIK</h1>
              </a>
          </div>

          <!-- Navigation Links -->
          <div class="hidden md:flex md:items-center md:gap-6">
    <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600 hover:scale-110 transform" href="#">Home</a>
    <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600 hover:scale-110 transform" href="#">Rekomendasi</a>
    <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600 hover:scale-110 transform" href="#">Hubungi Kami</a>
</div>


          <!-- User Section -->


              <!-- Dropdown Menu -->
              <div x-data="{ open: false }" class="relative flex items-center gap-4">
                @if(Auth::check())
                <button @click="open = !open" class="flex items-center gap-2 text-sm font-medium text-gray-900 focus:outline-none transition-all duration-200 hover:text-blue-600 hover:scale-110 transform">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
</svg>


                    Hi, {{ Auth::user()->name }}
                </button>
            @else
                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-900">Login</a>
            @endif


                <!-- Dropdown Menu -->
                <ul
                    x-show="open"
                    @click.outside="open = false"
                    x-transition
                    class="absolute right-0 z-10 mt-2 w-48 overflow-hidden rounded-lg border border-slate-200 bg-white p-2 shadow-lg"
                >
                <li class="cursor-pointer text-gray-800 px-4 py-2 text-sm hover:bg-gray-100">
                  <a href="{{ route('profile.edit') }}">Profile</a>
              </li>

                    <li class="cursor-pointer text-gray-800 px-4 py-2 text-sm hover:bg-gray-100">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="cursor-pointer text-gray-800 px-4 py-2 text-sm hover:bg-gray-100">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
          </div>
      </div>
  </div>
</header>



  </div>
</section>
