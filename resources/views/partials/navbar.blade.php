<nav class="bg-gradient-to-r from-emerald-500 to-green-600 shadow sticky top-0 z-50 text-white">
    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between h-16">

            <!-- LOGO -->
                <a href="/" class="flex items-center gap-3">
                <img src="{{ asset('Kitabutuhpeta.png') }}" class="h-9 w-auto">
                <span class="hidden sm:inline-block text-white font-semibold">KitabUtuhPeta</span>
            </a>

            <!-- DESKTOP MENU -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ url('/') }}" class="text-sm text-white hover:opacity-90 flex items-center gap-2">
                    <span class="material-icons text-base">home</span>
                    Beranda
                </a>
                <a href="{{ url('/about') }}" class="text-sm text-white hover:opacity-90 flex items-center gap-2">
                    <span class="material-icons text-base">info</span>
                    Tentang
                </a>
                <a href="{{ url('/contact') }}" class="text-sm text-white hover:opacity-90 flex items-center gap-2">
                    <span class="material-icons text-base">call</span>
                    Hubungi Kami
                </a>
            </div>

            <!-- ACTIONS -->
            <div class="flex items-center gap-2">
                <button class="hidden md:inline-flex p-2 rounded-full hover:bg-purple-700 text-white">
                    <span class="material-icons">search</span>
                </button>

                <a href="{{ url('/profile') }}" class="hidden md:inline-flex items-center gap-2 text-white hover:opacity-90">
                    <span class="material-icons text-2xl">account_circle</span>
                </a>

                <!-- HAMBURGER -->
                <button id="menuBtn" aria-label="Open menu" class="md:hidden p-2 rounded-md text-white hover:bg-purple-700/20">
                    <span class="material-icons">menu</span>
                </button>
            </div>

        </div>
    </div>

    <!-- MOBILE DRAWER -->
    <div id="mobileMenu" class="fixed inset-0 z-40 hidden">
        <div id="menuBackdrop" class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

        <div class="absolute top-0 right-0 w-72 h-full bg-white shadow-lg p-4 overflow-auto">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('Kitabutuhpeta.png') }}" class="h-8 w-auto">
                    <span class="text-gray-800 font-semibold">KitabUtuhPeta</span>
                </div>
                <button id="menuClose" aria-label="Close menu" class="p-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <span class="material-icons">close</span>
                </button>
            </div>

            <nav class="flex flex-col gap-2">
                <a href="{{ url('/') }}" class="px-3 py-2 rounded-lg hover:bg-gray-100 flex items-center gap-3 text-gray-700">
                    <span class="material-icons text-emerald-600">home</span>
                    Beranda
                </a>
                <a href="{{ url('/about') }}" class="px-3 py-2 rounded-lg hover:bg-gray-100 flex items-center gap-3 text-gray-700">
                    <span class="material-icons text-emerald-600">info</span>
                    Tentang
                </a>
                <a href="{{ url('/contact') }}" class="px-3 py-2 rounded-lg hover:bg-gray-100 flex items-center gap-3 text-gray-700">
                    <span class="material-icons text-emerald-600">call</span>
                    Hubungi Kami
                </a>
            </nav>

            <div class="mt-6 border-t pt-4">
                <a href="{{ url('/profile') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">
                    <span class="material-icons">account_circle</span>
                    Profil
                </a>
            </div>
        </div>
    </div>

</nav>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const btn = document.getElementById("menuBtn");
    const closeBtn = document.getElementById("menuClose");
    const mobileMenu = document.getElementById("mobileMenu");
    const backdrop = document.getElementById("menuBackdrop");

    function openMenu() {
        mobileMenu.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeMenu() {
        mobileMenu.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    if (btn) btn.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (backdrop) backdrop.addEventListener('click', closeMenu);

    // close on ESC
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
    });

});
</script>