<nav class="bg-gradient-to-r from-purple-600 to-indigo-600 shadow-md sticky top-0 z-50 text-white">

    <div class="max-w-7xl mx-auto px-4">

        <div class="flex justify-between items-center h-16">

            <!-- LOGO -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('Kitabutuhpeta.png') }}" class="h-10 w-auto">
            </a>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex space-x-6">
                <a href="{{ url('/') }}" class="text-sm font-medium hover:opacity-80">Beranda</a>
                <a href="{{ url('/about') }}" class="text-sm font-medium hover:opacity-80">Tentang</a>
                <a href="{{ url('/contact') }}" class="text-sm font-medium hover:opacity-80">Hubungi Kami</a>
            </div>

            <!-- HAMBURGER -->
            <button id="menuBtn" class="md:hidden text-2xl">
                ☰
            </button>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden md:hidden bg-gradient-to-r from-purple-600 to-indigo-600 text-white">

        <a href="{{ url('/') }}" class="block px-4 py-3 border-b">Beranda</a>
        <a href="{{ url('/about') }}" class="block px-4 py-3 border-b">Tentang</a>
        <a href="{{ url('/contact') }}" class="block px-4 py-3">Hubungi Kami</a>

    </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function () {

    let btn = document.getElementById("menuBtn");
    let menu = document.getElementById("mobileMenu");

    btn.addEventListener("click", function () {
        menu.classList.toggle("hidden");
    });

});
</script>