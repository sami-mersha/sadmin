<style>
    input::placeholder {
    color: #a1a1aa; /* Warna abu placeholder */
    font-size: 14px;
    font-weight: 500;
}

button:hover {
    background-color: #2563eb; /* Biru hover */
    transform: scale(1.02); /* Efek zoom */
}

button:active {
    transform: scale(0.98); /* Efek klik */
}

</style>


<header class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-lg bg-white/80 py-4 shadow-md backdrop-blur-lg md:top-6 md:rounded-3xl ">


    <div class="px-6 mb-2">
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
              <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600" href="#">Home</a>
              <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600" href="#">Rekomendasi</a>
              <a class="text-sm font-medium text-gray-900 transition-all duration-200 hover:text-blue-600" href="#">Hubungi Kami</a>
          </div>

          <!-- User Section -->


              <!-- Dropdown Menu -->
              <div x-data="{ open: false }" class="relative flex items-center gap-4">
                @if(Auth::check())
                <button @click="open = !open" class="flex items-center gap-2 text-sm font-medium text-gray-900 focus:outline-none">
                    <img class="h-10 w-10 rounded-full border-2 border-gray-300" src="https://via.placeholder.com/150" alt="User">
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
