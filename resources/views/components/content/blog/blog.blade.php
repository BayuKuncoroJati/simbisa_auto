<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>{{ $title = 'SIMBISA.AUTO Blog' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/SIMBISA-logo.jpeg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <div class="bg-base-100">
            {{-- Dinamis konten blog sesuai $card --}}
            @if ($card === 'card1')
                @include('components.content.blog.blog-card.blog-card-1')
            @elseif($card === 'card2')
                @include('components.content.blog.blog-card.blog-card-2')
            @elseif($card === 'card3')
                @include('components.content.blog.blog-card.blog-card-3')
            @endif
    </div>

    @livewireScripts

    <button id="scrollToTopBtn"
        class="btn btn-circle btn-soft bg-rose-100 hover:bg-rose-500 bottom-15 end-15 motion-preset-slide-right motion-duration-800 motion-delay-100 fixed absolute z-[3] hidden"
        aria-label="Circle Soft Icon Button">
        <x-heroicon-c-chevron-up class="size-10 shrink-0 text-white"></x-heroicon-c-chevron-up>
    </button>
</body>

</html>
