<nav class="bg-white dark:bg-[#1b1b18] shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-xl font-bold text-[#1b1b18] dark:text-white">Kitab Utuh Peta</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ url('/') }}" class="text-[#1b1b18] dark:text-white hover:text-gray-600 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Welcome</a>
                <a href="{{ url('/about') }}" class="text-[#1b1b18] dark:text-white hover:text-gray-600 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Tentang</a>
                <a href="{{ url('/contact') }}" class="text-[#1b1b18] dark:text-white hover:text-gray-600 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Hubungi Kami</a>
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="text-[#1b1b18] dark:text-white hover:text-gray-600 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">Log In</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">Register</a>
                @endif
            </div>
        </div>
    </div>
</nav>
