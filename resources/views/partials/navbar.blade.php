@include('partials.head')
<nav class="fixed top-0 left-0 z-20 w-full bg-black/40" id="navbar">
    <div class="flex flex-wrap items-center justify-between px-4 py-2">
        <a href="/" class="flex items-center gap-4">
            <img class="w-20" src="{{ asset('logo-white.png') }}" alt="beragam logo">
            <img class="w-20" src="{{ asset('logo-bbi.png') }}" alt="bangg logo">
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:text-green-400focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent ">
                <li>
                    <a href="/"
                        class=" {{ request()->is('/') ? 'bg-green-400 text-white md:text-yellow-300' : '' }} md:hover:underline block py-2 pl-3 pr-4 text-gray-600 md:text-white rounded md:bg-transparent  "
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('province.index') }}"
                        class="{{ request()->is('provinsi') ? 'bg-green-400 text-white md:text-yellow-300' : '' }} md:hover:underline block py-2 pl-3 pr-4 md:bg-transparent text-gray-600 rounded md:text-white">Provinsi</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-600 rounded md:text-white md:hover:underline">Artikel</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-gray-600 rounded md:text-white md:hover:underline">Galeri</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
