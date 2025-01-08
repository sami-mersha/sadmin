<header class="flex items-center justify-between px-8 py-4 bg-white border-b-8 border-white">

    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

    </div>
    
    <div class="flex items-center">
    <div class="relative mx-4 lg:mx-0">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

            <input class="mr-8 w-32 pl-10 pr-4 rounded-full form-input sm:w-64 focus:border-indigo-600" type="text" placeholder="Search">
        </div>
        
        <img class="h-10 w-10 rounded-full border-2 border-gray-300" src="https://via.placeholder.com/150" alt="User">
        <div x-data="{ dropdownOpen: false }"  class="relative">
        
            <button @click="dropdownOpen = ! dropdownOpen" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 text-gray-400  white:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                {{-- <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80" alt="Your avatar"> --}}
                {{-- <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="Layer_7" data-name="Layer 7"> <g> <path d="M25.1,41H4a2,2,0,0,1-2-2V31.1l1-.6A25.6,25.6,0,0,1,16,27a26.7,26.7,0,0,1,7.5,1.1,21.2,21.2,0,0,0-.5,4.4A18.4,18.4,0,0,0,25.1,41Z"></path> <path d="M16,23a9,9,0,1,0-9-9A9,9,0,0,0,16,23Z"></path> <path d="M46,34.1V31.9L42.4,31l-.5-1.1,2-3.2-1.6-1.6-3.2,2L38,26.6,37.1,23H34.9L34,26.6l-1.1.5-3.2-2-1.6,1.6,2,3.2L29.6,31l-3.6.9v2.2l3.6.9.5,1.1-2,3.2,1.6,1.6,3.2-2,1.1.5.9,3.6h2.2l.9-3.6,1.1-.5,3.2,2,1.6-1.6-2-3.2.5-1.1ZM36,36a3,3,0,1,1,3-3A2.9,2.9,0,0,1,36,36Z"></path> </g> </g> </g> </g></svg> --}}
                {{-- <div>{{ Auth::user()->name }}</div> --}}
                <div>{{ explode(' ', Auth::user()->name)[0] }}</div>                
                <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#545454" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#5c5c5c"></path> </g>
                </svg>
            </button>
            

            <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

            <div x-cloak x-show="dropdownOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-gray rounded-md shadow-xl">
                {{-- <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a> --}}
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Setting</a>
                {{-- <a href="/login" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a> --}}

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            </div>
        </div>
                
    </div>
</header>