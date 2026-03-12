<header class="border-base-content/20 bg-base-100 py-px0.25 fixed top-0 z-10 w-full border-b">
    <nav class="navbar mx-auto max-w-7xl rounded-b-xl px-4 sm:px-6 lg:px-8">
        <div class="w-full lg:flex lg:items-center lg:gap-2">
            <div class="navbar-start items-center justify-between max-lg:w-full">
                <a class="text-base-content flex items-center gap-3 text-xl font-semibold" href="#">
                    <img class="h-10" src="{{ asset('images/SIMBISA-logo.jpeg') }}" alt="LOGO">
                    SIMBISA.AUTO
                </a>

                <!--Toggle Burger Mobile Display-->
                <div class="flex items-center gap-2 lg:hidden">
                    <a href="#contact-us" class="btn btn-dark btn-sm rounded-2xl">Book</a>
                    <button type="button" wire:click="toggleBurger"
                        class="btn btn-outline btn-secondary btn-square lg:hidden rounded-full"
                        aria-label="Toggle navigation">
                        @if (!$isOpen)
                            <x-heroicon-o-bars-3 class="size-5.5"></x-heroicon-o-bars-3>
                        @else
                            <x-heroicon-o-x-mark class="size-5.5"></x-heroicon-o-x-mark>
                        @endif
                    </button>
                </div>
            </div>

            <!--Menu Show Toggle-->
            <div wire:transition
                class="lg:navbar-center transition-height {{ $isOpen ? 'block' : 'hidden' }} grow overflow-hidden font-medium duration-300 lg:flex">
                <div class="text-base-content flex gap-6 text-base max-lg:mt-4 max-lg:flex-col lg:items-center">
                    <a href="#home" class="nav-link hover:border-b-2">
                        BERANDA
                    </a>
                    <a href="#about-us" class="nav-link hover:border-b-2">
                        TENTANG KAMI
                    </a>
                    <a href="#services" class="nav-link hover:border-b-2">
                        LAYANAN
                    </a>
                    <a href="#team" class="nav-link hover:border-b-2">
                        MEKANIK
                    </a>
                    {{-- <a href="#faqs" class="nav-link hover:border-b-2">
                        PERTANYAAN UMUM (FAQS)
                    </a> --}}
                </div>
            </div>

            <!--Button Booking Web Display-->
            <div class="navbar-end max-lg:hidden">
                <a href="#contact-us" class="btn bg-dark rounded-3xl">Book</a>
            </div>
        </div>
    </nav>
</header>
