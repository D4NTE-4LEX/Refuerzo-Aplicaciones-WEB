<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="{{ url('/home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 mr-4">
            </a>
            <span class="text-xl font-bold text-gray-800">Home</span>
        </div>
        <div class="relative">
            <button id="userMenuButton" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none">
                {{ Auth::user()->name }}
            </button>
            <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
