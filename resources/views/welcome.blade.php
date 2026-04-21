@extends('layouts.app')

@section('content')

<!-- HERO SLIDER -->
<section class="relative w-full overflow-hidden">

    <div id="slider" class="flex transition-transform duration-700 ease-in-out">

        <!-- SLIDE 1 -->
        <div class="min-w-full h-56 bg-cover bg-center"
            style="background-image:url('{{ asset('slider/1.jpg') }}');">

            <div class="bg-black/40 w-full h-full flex items-center justify-center text-white">
                <div class="text-center px-4">
                    <h1 class="text-2xl font-bold">Kitab Utuh Peta</h1>
                    <p class="text-sm">Sistem Informasi Desa Digital</p>
                </div>
            </div>

        </div>

        <!-- SLIDE 2 -->
        <div class="min-w-full h-56 bg-cover bg-center"
            style="background-image:url('{{ asset('slider/2.jpg') }}');">

            <div class="bg-black/40 w-full h-full flex items-center justify-center text-white">
                <div class="text-center px-4">
                    <h1 class="text-2xl font-bold">Peta Aset Desa</h1>
                    <p class="text-sm">Kelola data aset dengan mudah</p>
                </div>
            </div>

        </div>

        <!-- SLIDE 3 -->
        <div class="min-w-full h-56 bg-cover bg-center"
            style="background-image:url('{{ asset('slider/3.jpg') }}');">

            <div class="bg-black/40 w-full h-full flex items-center justify-center text-white">
                <div class="text-center px-4">
                    <h1 class="text-2xl font-bold">Smart Village</h1>
                    <p class="text-sm">Digitalisasi Desa Modern</p>
                </div>
            </div>

        </div>

    </div>

    <!-- DOT -->
    <div class="absolute bottom-3 left-0 right-0 flex justify-center gap-2">
        <span class="dot w-2 h-2 bg-white rounded-full opacity-50"></span>
        <span class="dot w-2 h-2 bg-white rounded-full opacity-50"></span>
        <span class="dot w-2 h-2 bg-white rounded-full opacity-50"></span>
    </div>

</section>

<!-- MENU UTAMA -->
<section class="py-6 bg-gray-100">
    <div class="px-4">

        <div class="grid grid-cols-2 gap-4">

            @php
            $menus = [
                ['title'=>'Kependudukan','icon'=>'👥','color'=>'bg-blue-500','route'=>'kependudukan'],
                ['title'=>'Aset Desa','icon'=>'🏢','color'=>'bg-purple-500','route'=>'aset'],
                ['title'=>'UMKM','icon'=>'🛒','color'=>'bg-green-500','route'=>'umkm'],
                ['title'=>'Ternak & Tani','icon'=>'🌾','color'=>'bg-yellow-500','route'=>'ternak'],
                ['title'=>'Industri','icon'=>'🏭','color'=>'bg-red-500','route'=>'industri'],
                ['title'=>'Informasi','icon'=>'📢','color'=>'bg-indigo-500','route'=>'informasi'],
            ];
            @endphp

            @foreach($menus as $menu)
            <a href="{{ route($menu['route']) }}"
               class="bg-white rounded-2xl p-4 shadow active:scale-95 transition">

                <div class="flex flex-col items-center">

                    <div class="{{ $menu['color'] }} text-white w-14 h-14 flex items-center justify-center rounded-full text-2xl mb-3 shadow">
                        {{ $menu['icon'] }}
                    </div>

                    <span class="text-sm font-semibold text-center">
                        {{ $menu['title'] }}
                    </span>

                </div>

            </a>
            @endforeach

        </div>

    </div>
</section>

<!-- FITUR -->
<section class="py-6 bg-white">
    <div class="px-4">

        <h2 class="text-lg font-semibold mb-4">
            Layanan Administrasi & Buku Tamu
        </h2>

        <div class="grid grid-cols-2 gap-4">

            @php
            $fitur = [
                ['title'=>'Grafik Tamu','icon'=>'📊','color'=>'bg-blue-400','route'=>'grafik'],
                ['title'=>'Administrasi','icon'=>'📝','color'=>'bg-green-400','url'=>'https://pemdesbutuh.id/layanan/login'],
                ['title'=>'Persyaratan','icon'=>'📄','color'=>'bg-purple-400','route'=>'persyaratan'],
                ['title'=>'Masukan','icon'=>'💬','color'=>'bg-red-400','route'=>'masukan'],
            ];
            @endphp

            @foreach($fitur as $item)
            <a href="{{ $item['url'] ?? route($item['route']) }}"
               class="bg-gray-50 rounded-2xl p-4 shadow active:scale-95 transition">

                <div class="flex flex-col items-center">

                    <div class="{{ $item['color'] }} text-white w-14 h-14 flex items-center justify-center rounded-full text-2xl mb-3 shadow">
                        {{ $item['icon'] }}
                    </div>

                    <span class="text-sm font-semibold text-center">
                        {{ $item['title'] }}
                    </span>

                </div>

            </a>
            @endforeach

        </div>

    </div>
</section>

@endsection


{{-- SCRIPT SLIDER --}}
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    let index = 0;

    const slider = document.getElementById('slider');
    const dots = document.querySelectorAll('.dot');

    if (!slider) return;

    function showSlide(i) {
        slider.style.transform = `translateX(-${i * 100}%)`;

        dots.forEach((dot, idx) => {
            dot.style.opacity = (idx === i) ? "1" : "0.4";
        });
    }

    function nextSlide() {
        index = (index + 1) % 3;
        showSlide(index);
    }

    showSlide(0);
    setInterval(nextSlide, 3000);

});
</script>
@endpush