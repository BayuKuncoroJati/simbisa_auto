<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>{{ $title = 'SIMBISA.AUTO' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/SIMBISA-logo.jpeg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&ampdisplay=swap"
        rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])

    @livewireStyles
</head>

<body>
    <div class="bg-base-100">
        <!-- Header / Hero Section -->
        <section class="relative bg-warning/10 py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang SIMBISA.AUTO</h1>
                <p class="text-lg md:text-xl text-base-content/80 max-w-3xl mx-auto">
                    Simbisa Auto mengusung konsep one stop service, yaitu menyediakan berbagai layanan dalam satu tempat.
                </p>
            </div>
        </section>

        <!-- About Details Section -->
        <section class="py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid gap-12 lg:grid-cols-2 lg:items-center">
                <div>
                    <img src="{{ asset('images/about_us.png') }}" alt="Tentang Kami"
                        class="rounded-xl shadow-lg object-cover w-full h-full" />
                </div>
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-semibold">Perjalanan Kami</h2>
                    <p class="text-base-content/80 text-lg" align="justify">
                        Bengkel Simbisa Auto merupakan usaha di bidang jasa perawatan dan perbaikan kendaraan roda empat
                        yang berlokasi di Jl. Jeruk Raya No. 9A, Jagakarsa, Jakarta Selatan. Bengkel ini didirikan oleh
                        seorang pengusaha otomotif bernama Surya Agung Pratama, yang memiliki ketertarikan dan
                        pengalaman di dunia otomotif sejak lama.
                    </p>
                    <p class="text-base-content/80 text-lg" align="justify">
                        Sejak tahun 2008, Simbisa Auto hadir sebagai bengkel mobil yang mengutamakan kualitas dan
                        kepuasan pelanggan. Dengan pengalaman bertahun-tahun, kami terus memperluas layanan dan
                        meningkatkan standar servis. Seiring berjalannya waktu, bengkel ini terus berkembang dan
                        mengalami peningkatan baik dari segi layanan maupun jumlah tenaga kerja. Dari yang awalnya
                        kecil, kini Simbisa Auto telah memiliki puluhan karyawan dan mampu melayani ratusan kendaraan
                        setiap bulannya.
                    </p>
                </div>
            </div>
        </section>

        <!-- Stats / Achievements -->
        <section class="bg-base-100 py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 text-center">
                    <div class="flex flex-col items-center">
                        <span class="text-warning text-4xl font-bold" id="count1"></span>
                        <p class="text-base-content/80 mt-2">Tahun Operasional</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-warning text-4xl font-bold" id="count2"></span>
                        <p class="text-base-content/80 mt-2">Layanan Bengkel</p>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-warning text-4xl font-bold" id="count3"></span>
                        <p class="text-base-content/80 mt-2">Kendaraan Terlayani</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision Section -->
        <section class="py-16 bg-warning/5">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-12">
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-semibold">Misi & Visi</h2>
                    <p class="text-base-content/80 mt-2 text-lg max-w-2xl mx-auto">
                        Menjadi bengkel pilihan utama dengan layanan profesional, inovatif, dan terpercaya, menjamin
                        keselamatan
                        dan kepuasan setiap pelanggan.
                    </p>
                </div>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4 text-center">
                    <div class="space-y-2">
                        <h3 class="text-xl font-semibold">Misi</h3>
                        <p class="text-base-content/80">Memberikan servis kendaraan presisi dengan teknologi terbaru.
                        </p>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl font-semibold">Inovasi</h3>
                        <p class="text-base-content/80">Terus berinovasi untuk solusi perawatan mobil yang lebih cepat
                            dan efisien.</p>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl font-semibold">Profesional</h3>
                        <p class="text-base-content/80">Mekanik berpengalaman untuk setiap layanan.
                        </p>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl font-semibold">Kepercayaan</h3>
                        <p class="text-base-content/80">Menjadi bengkel yang dipercaya oleh ribuan pelanggan.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @livewireScripts

    <button id="scrollToTopBtn"
        class="btn btn-circle btn-soft bg-rose-100 hover:bg-rose-500 bottom-15 end-15 motion-preset-slide-right motion-duration-800 motion-delay-100 fixed absolute z-[3] hidden"
        aria-label="Circle Soft Icon Button"><x-heroicon-c-chevron-up
            class="size-10 shrink-0 text-white"></x-heroicon-c-chevron-up></span></button>
</body>

</html>
