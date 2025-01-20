<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-dark opacity-50 lg:hidden"></div>
    
<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-white lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
            <img src="{{asset('assets/removebg.png')}}" alt="" class="w-10 h-auto py-0">
            <span class="mx-2 text-2xl font-bold" style="font-family: 'Poppins', sans-serif; color: #1E1AB9;">IBSTIK</span>

        </div>
    </div>

    <nav class="mt-10">
    <a class="flex items-center px-6 py-2 {{ Route::is('admin.dashboard') ? 'bg-blue-500 text-white' : 'text-dark hover:bg-gray-200 hover:text-white' }} px-4 py-4 rounded-lg" href="{{ route('admin.dashboard') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="transition-all duration-300">
            <path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z"/>
        </svg>
        <span class="mx-3 font-bold">Dashboard</span>
    </a>

    <a class="flex items-center px-6 py-2 {{ Route::is('admin.konser.index') ? 'bg-blue-500 text-white' : 'text-dark hover:bg-gray-200 hover:text-white' }} px-4 py-4 rounded-lg" href="{{ route('admin.konser.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="transition-all duration-300">
            <path d="M11 24h-9v-12h9v12zm0-18h-11v4h11v-4zm2 18h9v-12h-9v12zm0-18v4h11v-4h-11zm4.369-6c-2.947 0-4.671 3.477-5.369 5h5.345c3.493 0 3.53-5 .024-5zm-.796 3.621h-2.043c.739-1.121 1.439-1.966 2.342-1.966 1.172 0 1.228 1.966-.299 1.966zm-9.918 1.379h5.345c-.698-1.523-2.422-5-5.369-5-3.506 0-3.469 5 .024 5zm.473-3.345c.903 0 1.603.845 2.342 1.966h-2.043c-1.527 0-1.471-1.966-.299-1.966z"/>
        </svg>
        <span class="mx-3 font-bold">Manajemen Konser</span>
    </a>

    <a class="flex items-center px-6 py-2 {{ Route::is('admin.tiket.index') ? 'bg-blue-500 text-white' : 'text-dark hover:bg-gray-200 hover:text-white' }} px-4 py-4 rounded-lg" href="{{ route('admin.tiket.index') }}">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="transition-all duration-300">
            <path fill-rule="evenodd" d="M1.5 6.375c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v3.026a.75.75 0 0 1-.375.65 2.249 2.249 0 0 0 0 3.898.75.75 0 0 1 .375.65v3.026c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 17.625v-3.026a.75.75 0 0 1 .374-.65 2.249 2.249 0 0 0 0-3.898.75.75 0 0 1-.374-.65V6.375Zm15-1.125a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0V6a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0v.75a.75.75 0 0 0 1.5 0v-.75Zm-.75 3a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0v-.75a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-.75ZM6 12a.75.75 0 0 1 .75-.75H12a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 12Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
        </svg>
        <span class="mx-3 font-bold">Manajemen Tiket</span>
    </a>

        <a class="flex items-center px-6 py-2 {{ Route::is('admin.promo.index') ? 'bg-blue-500 text-white' : 'text-dark hover:bg-gray-200 hover:text-white' }} px-4 py-4 rounded-lg" href="{{ route('admin.promo.index') }}" >
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="transition-all duration-300">
            <path d="M12.628 21.412l5.969-5.97 1.458 3.71-12.34 4.848-4.808-12.238 9.721 9.65zm-1.276-21.412h-9.352v9.453l10.625 10.547 9.375-9.375-10.648-10.625zm4.025 9.476c-.415-.415-.865-.617-1.378-.617-.578 0-1.227.241-2.171.804-.682.41-1.118.584-1.456.584-.361 0-1.083-.408-.961-1.218.052-.345.25-.697.572-1.02.652-.651 1.544-.848 2.276-.106l.744-.744c-.476-.476-1.096-.792-1.761-.792-.566 0-1.125.227-1.663.677l-.626-.627-.698.699.653.652c-.569.826-.842 2.021.076 2.938 1.011 1.011 2.188.541 3.413-.232.6-.379 1.083-.563 1.475-.563.589 0 1.18.498 1.078 1.258-.052.386-.26.763-.621 1.122-.451.451-.904.679-1.347.679-.418 0-.747-.192-1.049-.462l-.739.739c.463.458 1.082.753 1.735.753.544 0 1.087-.201 1.612-.597l.54.538.697-.697-.52-.521c.743-.896 1.157-2.209.119-3.247zm-9.678-7.476c.938 0 1.699.761 1.699 1.699 0 .938-.761 1.699-1.699 1.699-.938 0-1.699-.761-1.699-1.699 0-.938.761-1.699 1.699-1.699z"/>
        </svg>
        <span class="mx-3 font-bold">Manajemen Promo</span>
    </a>

    <a class="flex items-center px-6 py-2 {{ Route::is('admin.lokasi.index') ? 'bg-blue-500 text-white' : 'text-dark hover:bg-gray-200 hover:text-white' }} px-4 py-4 rounded-lg" href="{{ route('admin.lokasi.index') }}" >
    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
    </svg>

        <span class="mx-3 font-bold">Lokasi</span>
    </a>

    <div>
    <a id="dropdown-button" class="flex items-center px-6 py-2 {{ Route::is('') ? 'bg-blue-500 text-white' : 'text-dark hover:bg-gray-200 hover:text-white' }} px-4 py-4 rounded-lg cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="transition-all duration-300">
            <path d="M6 14h6v-6c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6zm16 0c0 5.523-4.478 10-10 10s-10-4.477-10-10 4.478-10 10-10 10 4.477 10 10zm-2 0c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8 8-3.589 8-8zm-6-11.819v-2.181h-4v2.181c1.408-.238 2.562-.243 4 0zm6.679 3.554l1.321-1.321-1.414-1.414-1.407 1.407c.536.402 1.038.844 1.5 1.328z"/>
        </svg>
        <span class="mx-3 font-bold">History</span>
        <svg id="dropdown-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </a>

    <!-- Dropdown Menu -->
    <div id="dropdown-menu" class="hidden origin-top-right bg-white rounded-lg border-b border-gray-200 absolute z-10 w-48">
        <a href="{{ route('admin.ui-elements') }}" id="history-order" class="block px-6 py-3 text-dark hover:bg-blue-500 hover:text-white rounded-lg transition-all duration-300">History order</a>

        <!-- Added the new link for ui-elements-review -->
         
        <a href="{{ route('admin.ui-elements-review') }}" class="block px-6 py-3 text-dark hover:bg-blue-500 hover:text-white rounded-lg transition-all duration-300">History Review</a>
    </div>
</div>



    </nav>


    <style>
    /* Styling untuk dropdown */
    #dropdown-menu {
        display: none;
        margin-top: 10px;
        position: absolute;
        right: 0;
        width: 200px;
        background-color: white;
        border-radius: 8px;
        z-index: 10;
        opacity: 0;
        transform: translateY(-10px);
        transition: opacity 0.3s, transform 0.3s;
    }

    #dropdown-menu.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    #dropdown-menu a {
        padding: 12px;
        text-decoration: none;
        color: #333;
        font-weight: 600;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    #dropdown-menu a:hover {
        background-color: #3b82f6;
        color: white;
    }

    /* Ikon dropdown */
    #dropdown-icon {
        transition: transform 0.3s ease;
    }

    /* Rotasi ikon dropdown saat dropdown terbuka */
    #dropdown-menu.show + #dropdown-button #dropdown-icon {
        transform: rotate(180deg);
    }

    /* Active State */
    #history-order.active {
        background-color: #3b82f6;
        color: white;
    }
</style>





    
</div>

<script>
    // JavaScript untuk toggle dropdown
    const dropdownButton = document.getElementById('dropdown-button');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const historyOrder = document.getElementById('history-order');

    // Menangani klik untuk membuka dan menutup dropdown
    dropdownButton.addEventListener('click', (event) => {
        event.stopPropagation(); // Mencegah propagasi klik agar tidak menutup dropdown
        dropdownMenu.classList.toggle('show'); // Toggle dropdown
    });

    // Menutup dropdown jika klik di luar tombol atau dropdown
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show'); // Menutup dropdown
        }
    });

    // Menjaga dropdown tetap terbuka ketika History order diklik dan menambahkan class active
    historyOrder.addEventListener('click', (event) => {
        event.stopPropagation(); // Mencegah dropdown menutup saat History order diklik
        historyOrder.classList.toggle('active'); // Toggle class active pada History order
    });

    // Menambahkan hover efek saat dropdown terbuka
    dropdownMenu.addEventListener('mouseover', () => {
        historyOrder.classList.add('hover');
    });

    dropdownMenu.addEventListener('mouseout', () => {
        historyOrder.classList.remove('hover');
    });
</script>