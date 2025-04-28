<header class="sticky top-0 bg-blue-500 text-white z-50">
    <div class="header-container w-full flex items-center justify-between px-4 h-16">
        <button class="menu-button sm:hidden flex items-center justify-center w-10 h-10 rounded-md bg-blue-600 hover:bg-blue-700 active:bg-blue-800" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <a href="{{ url('/') }}" class="logo absolute left-1/2 transform -translate-x-1/2 sm:static sm:translate-x-0">
            <img src="{{ asset('images/white-logo.png') }}" alt="Logo" class="h-16">
        </a>

        <nav class="nav-links hidden sm:flex space-x-4">
            <a href="{{ url('/') }}" class="hover:underline">Home</a>
            <a href="{{ url('/login') }}" class="hover:underline">Login</a>
        </nav>
    </div>

    <div class="mobile-menu hidden fixed inset-0 bg-blue-600 bg-opacity-90 flex flex-col items-center justify-center space-y-4 text-lg font-medium transition-all duration-300 ease-in-out" id="mobileMenu">
        <a href="{{ url('/') }}" class="text-white hover:text-gray-300">Home</a>
        <a href="{{ url('/login') }}" class="text-white hover:text-gray-300">Login</a>
        <button class="text-white hover:text-gray-300" onclick="toggleMenu()">Cerrar</button>
    </div>
</header>
