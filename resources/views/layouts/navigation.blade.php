<nav class="bg-white dark:bg-gray-800 shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo / App Name -->
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-indigo-600">
            {{ config('app.name', 'Laravel Dashboard') }}
        </a>

        <!-- Desktop Menu -->
        <div class="hidden sm:flex items-center space-x-4">
            <a href="{{ route('dashboard') }}" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 transition">
                Dashboard
            </a>

            <!-- User Info & Logout -->
            <span class="text-gray-600 dark:text-gray-300">{{ Auth::user()->name }}</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>

        <!-- Mobile Hamburger -->
        <div class="sm:hidden flex items-center">
            <button @click="open = !open" class="p-2 rounded-md text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-900 transition">
                <svg :class="{'hidden': open, 'block': !open}" class="block h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg :class="{'hidden': !open, 'block': open}" class="hidden h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="sm:hidden px-6 pt-4 pb-3 space-y-1 bg-white dark:bg-gray-800">
        <a href="{{ route('dashboard') }}" class="block text-gray-600 dark:text-gray-300 hover:text-indigo-600 transition">Dashboard</a>
        <span class="block text-gray-600 dark:text-gray-300">{{ Auth::user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition mt-2">
                Logout
            </button>
        </form>
    </div>
</nav>
