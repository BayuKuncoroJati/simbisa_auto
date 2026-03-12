<main>
    <!-- Hero section -->
    <section id="home">
        <div
            class="gap-18 md:pt-45 lg:gap-35 lg:pt-47.5 flex h-full flex-col justify-between bg-cover bg-center bg-no-repeat py-8 pt-40 sm:py-16 md:gap-24 lg:py-24 bg-radial-[at_50%_10%] from-amber-100 via-amber-100 to-yellow-50 to-85%">
            <div
                class="mx-auto flex max-w-[1280px] flex-col items-center gap-6 justify-self-center px-4 text-center sm:px-6 lg:px-8">
                <div class="bg-base-200 border-base-content/20 w-fit rounded-full border px-3 py-1">
                    <span>Komitmen memberikan layanan servis mobil berkualitas sejak tahun 2018. 🚙🛠️</span>
                </div>
                <h1
                    class="text-base-content z-1 relative text-5xl font-bold leading-[1.15] max-md:text-2xl md:max-w-3xl">
                    <span>
                        Keep Your Engine Strong,
                        <br />
                        Keep Your Journey Long.
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="348" height="10" viewBox="0 0 348 10" fill="none"
                        class="-z-1 left-25 absolute -bottom-1.5 max-lg:left-4 max-md:hidden">
                        <path
                            d="M1.85645 8.23715C62.4821 3.49284 119.04 1.88864 180.031 1.88864C225.103 1.88864 275.146 1.32978 319.673 4.85546C328.6 5.24983 336.734 6.33887 346.695 7.60269"
                            stroke="url(#paint0_linear_17052_181397)" stroke-width="4" stroke-linecap="round" />
                        <defs>
                            <linearGradient id="paint0_linear_17052_181397" x1="29.7873" y1="1.85626" x2="45.2975"
                                y2="100.0000" gradientUnits="userSpaceOnUse">
                                <stop stop-color="var(--color-warning)" />
                                <stop offset="1" stop-color="var(--color-warning-content)" />
                            </linearGradient>
                        </defs>
                    </svg>
                </h1>
                <p class="text-base-content/80 max-w-3xl">Selamat datang di pusat layanan servis mobil kami, tempat
                    kualitas, ketelitian, dan kepercayaan bertemu.
                    Baik kunjungan pertama maupun yang kesekian kalinya, setiap kendaraan kami tangani dengan standar
                    terbaik untuk memberikan performa maksimal dan kenyamanan berkendara.</p>
                <a href="#contact-us" class="btn btn-warning btn-gradient btn-lg rounded-3xl">
                    Rasakan Kualitas Servis Terbaik
                    <x-heroicon-c-arrow-long-right class="size-5.5"></x-heroicon-c-arrow-long-right>
                </a>
            </div>
            <img src="{{ asset('images/cars-hero.png') }}" alt="Dishes" class="min-h-67 w-full object-cover" />
        </div>
    </section>

    <!-- About us -->
    <section id="about-us">
        <div class="bg-base-100 py-8 sm:py-16 lg:py-24">
            <div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-12 md:gap-16 lg:gap-24">
                    <!-- Header section -->
                    <div class="space-y-4 text-center">
                        <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">Tentang Kami
                        </h2>
                        <p class="text-base-content/80 text-xl">Perjalanan pencapaian kami menjadi bukti nyata komitmen,
                            kerja sama tim, dan dedikasi dalam memberikan layanan terbaik. Bersama, kami menghadapi
                            setiap tantangan, menyelesaikan berbagai permasalahan kendaraan dengan presisi, serta terus
                            tumbuh menjadi pusat servis mobil yang terpercaya dan berkualitas.</p>
                        <a href="/about-us" class="btn btn-warning btn-lg btn-gradient">
                            Baca selengkapnya
                            <x-heroicon-c-arrow-long-right class="size-5.5"></x-heroicon-c-arrow-long-right>
                        </a>
                    </div>
                    <!-- Video player and stats -->
                    <div class="lg:h-161 relative mb-8 h-full w-full rounded-xl max-lg:space-y-6 sm:mb-16 lg:mb-24">
                        <img src="{{ asset('images/about_us.png') }}" alt="about-us"
                            class="h-full w-full rounded-xl object-cover" />
                        <!-- Stats card overlapping the video section -->
                        <div
                            class="bg-base-100 border-base-content/20 rounded-box lg:-bottom-25 intersect:motion-preset-fade intersect:motion-opacity-0 intersect:motion-duration-800 grid gap-10 border px-10 py-8 sm:max-lg:grid-cols-2 lg:absolute lg:left-1/2 lg:w-3/4 lg:-translate-x-1/2 lg:grid-cols-3 xl:w-max">
                            <!-- Stats items - Pengalaman -->
                            <div class="flex flex-col items-center justify-center gap-6">
                                <!-- Document icon SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42"
                                    viewBox="0 0 43 42" fill="none" class="text-warning">
                                    <path
                                        d="M21.5 17.5C25.366 17.5 28.5 14.366 28.5 10.5C28.5 6.63401 25.366 3.5 21.5 3.5C17.634 3.5 14.5 6.63401 14.5 10.5C14.5 14.366 17.634 17.5 21.5 17.5Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M29.375 38.5C26.4877 38.5 25.0439 38.5 24.147 37.603C23.25 36.7061 23.25 35.2623 23.25 32.375C23.25 29.4877 23.25 28.0439 24.147 27.147C25.0439 26.25 26.4877 26.25 29.375 26.25C32.2623 26.25 33.7061 26.25 34.603 27.147C35.5 28.0439 35.5 29.4877 35.5 32.375C35.5 35.2623 35.5 36.7061 34.603 37.603C33.7061 38.5 32.2623 38.5 29.375 38.5ZM32.819 31.0552C33.2177 30.6565 33.2177 30.0102 32.819 29.6116C32.4204 29.2128 31.7741 29.2128 31.3754 29.6116L28.0139 32.973L27.3746 32.3337C26.9759 31.9351 26.3296 31.9351 25.931 32.3337C25.5323 32.7324 25.5323 33.3788 25.931 33.7774L27.292 35.1384C27.6906 35.5372 28.3371 35.5372 28.7357 35.1384L32.819 31.0552Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path opacity="0.5"
                                        d="M32.1657 26.3046C31.4223 26.25 30.5102 26.25 29.375 26.25C26.4877 26.25 25.0439 26.25 24.1471 27.147C23.25 28.0439 23.25 29.4877 23.25 32.375C23.25 34.416 23.25 35.7357 23.5669 36.6508C22.8949 36.7161 22.2044 36.75 21.5 36.75C14.7345 36.75 9.25 33.6159 9.25 29.75C9.25 25.8841 14.7345 22.75 21.5 22.75C26.0735 22.75 30.0617 24.1822 32.1657 26.3046Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                </svg>
                                <div class="space-y-2 text-center">
                                    <span class="text-warning text-3xl font-semibold" id="count1"></span>
                                    <p class="text-base-content/80">Tahun Operasional</p>
                                </div>
                            </div>

                            <!-- Stats items - Layanan -->
                            <div class="flex flex-col items-center justify-center gap-6">
                                <!-- Projects icon SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42"
                                    viewBox="0 0 43 42" fill="none" class="text-warning">
                                    <path opacity="0.5"
                                        d="M13.1788 3.5H29.8212C31.8493 3.5 32.8633 3.5 33.681 3.78457C35.2319 4.32418 36.4494 5.57758 36.9735 7.17405C37.25 8.01596 37.25 9.05984 37.25 11.1476V35.6549C37.25 37.1567 35.5262 37.9536 34.4358 36.9558C33.7951 36.3695 32.8299 36.3695 32.1892 36.9558L31.3438 37.7295C30.2209 38.7569 28.5291 38.7569 27.4062 37.7295C26.2834 36.702 24.5916 36.702 23.4688 37.7295C22.3459 38.7569 20.654 38.7569 19.5312 37.7295C18.4085 36.702 16.7165 36.702 15.5938 37.7295C14.471 38.7569 12.779 38.7569 11.6562 37.7295L10.8108 36.9558C10.1702 36.3695 9.2048 36.3695 8.56417 36.9558C7.47375 37.9536 5.75 37.1567 5.75 35.6549V11.1476C5.75 9.05984 5.75 8.01596 6.02641 7.17405C6.55059 5.57758 7.76814 4.32418 9.31893 3.78457C10.1367 3.5 11.1507 3.5 13.1788 3.5Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M12.75 11.8125C12.0251 11.8125 11.4375 12.4001 11.4375 13.125C11.4375 13.8499 12.0251 14.4375 12.75 14.4375H13.625C14.3499 14.4375 14.9375 13.8499 14.9375 13.125C14.9375 12.4001 14.3499 11.8125 13.625 11.8125H12.75Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M18.875 11.8125C18.1502 11.8125 17.5625 12.4001 17.5625 13.125C17.5625 13.8499 18.1502 14.4375 18.875 14.4375H30.25C30.9748 14.4375 31.5625 13.8499 31.5625 13.125C31.5625 12.4001 30.9748 11.8125 30.25 11.8125H18.875Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M12.75 17.9375C12.0251 17.9375 11.4375 18.5252 11.4375 19.25C11.4375 19.9748 12.0251 20.5625 12.75 20.5625H13.625C14.3499 20.5625 14.9375 19.9748 14.9375 19.25C14.9375 18.5252 14.3499 17.9375 13.625 17.9375H12.75Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M18.875 17.9375C18.1502 17.9375 17.5625 18.5252 17.5625 19.25C17.5625 19.9748 18.1502 20.5625 18.875 20.5625H30.25C30.9748 20.5625 31.5625 19.9748 31.5625 19.25C31.5625 18.5252 30.9748 17.9375 30.25 17.9375H18.875Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M12.75 24.0625C12.0251 24.0625 11.4375 24.6502 11.4375 25.375C11.4375 26.0998 12.0251 26.6875 12.75 26.6875H13.625C14.3499 26.6875 14.9375 26.0998 14.9375 25.375C14.9375 24.6502 14.3499 24.0625 13.625 24.0625H12.75Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M18.875 24.0625C18.1502 24.0625 17.5625 24.6502 17.5625 25.375C17.5625 26.0998 18.1502 26.6875 18.875 26.6875H30.25C30.9748 26.6875 31.5625 26.0998 31.5625 25.375C31.5625 24.6502 30.9748 24.0625 30.25 24.0625H18.875Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                </svg>
                                <div class="space-y-2 text-center">
                                    <span class="text-warning text-3xl font-semibold" id="count2"></span>
                                    <p class="text-base-content/80">Layanan Bengkel</p>
                                </div>
                            </div>

                            <!-- Stats items - Happy Customer -->
                            <div class="flex flex-col items-center justify-center gap-6">
                                <!-- Award icon SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42"
                                    viewBox="0 0 43 42" fill="none" class="text-warning">
                                    <path
                                        d="M19.6207 4.13037C20.2392 4.50845 20.434 5.31631 20.056 5.93477C19.7816 6.38356 19.8503 6.96187 20.2222 7.33381L20.3935 7.5051C21.4238 8.53526 21.8035 10.0486 21.3819 11.4431C21.1723 12.137 20.4397 12.5295 19.7459 12.3197C19.052 12.11 18.6596 11.3775 18.8693 10.6836C19.0109 10.2153 18.8833 9.70716 18.5373 9.36126L18.3662 9.18997C17.1367 7.96056 16.9094 6.04903 17.8163 4.56561C18.1943 3.94714 19.0021 3.75228 19.6207 4.13037Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M35.4549 12.3319C35.2125 12.4252 34.9978 12.6399 34.5685 13.0694C34.1391 13.4988 33.9244 13.7135 33.8309 13.9558C33.7217 14.2392 33.7217 14.5532 33.8309 14.8366C33.9244 15.0789 34.1391 15.2936 34.5685 15.723C34.9978 16.1524 35.2125 16.3671 35.4549 16.4605C35.7382 16.5697 36.0522 16.5697 36.3357 16.4605C36.5779 16.3671 36.7926 16.1524 37.2221 15.723C37.6515 15.2936 37.8662 15.0789 37.9595 14.8366C38.0687 14.5532 38.0687 14.2392 37.9595 13.9558C37.8662 13.7135 37.6515 13.4988 37.2221 13.0694C36.7926 12.6399 36.5779 12.4252 36.3357 12.3319C36.0522 12.2227 35.7382 12.2227 35.4549 12.3319Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M37.9639 21.9793C37.3309 21.7026 36.5947 21.8188 36.0779 22.2771C34.6616 23.5329 32.6008 23.7417 30.9616 22.7953L30.589 22.5802C29.9613 22.2178 29.7462 21.4151 30.1087 20.7874C30.4711 20.1596 31.2738 19.9444 31.9015 20.307L32.2741 20.5219C32.9347 20.9034 33.7655 20.8192 34.3363 20.3131C35.6187 19.176 37.445 18.8876 39.0155 19.5741L39.5256 19.7972C40.1897 20.0875 40.4928 20.8614 40.2023 21.5255C39.912 22.1898 39.1381 22.4927 38.474 22.2024L37.9639 21.9793Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path opacity="0.7"
                                        d="M24.2318 7.69384C24.5837 7.34198 24.7596 7.16605 24.9629 7.10157C25.1351 7.04704 25.3198 7.04704 25.4918 7.10157C25.6953 7.16605 25.8712 7.34198 26.2231 7.69384C26.5749 8.04567 26.7507 8.2216 26.8153 8.42502C26.8699 8.59708 26.8699 8.78179 26.8153 8.95384C26.7507 9.15726 26.5749 9.33318 26.2231 9.68502C25.8712 10.0369 25.6953 10.2128 25.4918 10.2773C25.3198 10.3318 25.1351 10.3318 24.9629 10.2773C24.7596 10.2128 24.5837 10.0369 24.2318 9.68504C23.88 9.33318 23.704 9.15726 23.6396 8.95384C23.585 8.78179 23.585 8.59708 23.6396 8.42502C23.704 8.2216 23.88 8.04567 24.2318 7.69384Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path opacity="0.7"
                                        d="M33.8502 26.7984C34.2168 26.4318 34.8111 26.4318 35.1775 26.7984C35.5442 27.1649 35.5442 27.7592 35.1775 28.1258C34.8111 28.4924 34.2168 28.4924 33.8502 28.1258C33.4835 27.7592 33.4835 27.1649 33.8502 26.7984Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <g opacity="0.5">
                                        <path
                                            d="M12.6216 6.89639C12.9882 6.52982 13.5825 6.52982 13.9491 6.89639C14.3157 7.26296 14.3157 7.8573 13.9491 8.22387C13.5825 8.59044 12.9882 8.59044 12.6216 8.22387C12.255 7.8573 12.255 7.26296 12.6216 6.89639Z"
                                            fill="currentColor" fill-opacity="0.5" />
                                        <path
                                            d="M31.4554 8.2628C32.1663 8.40497 32.6272 9.09643 32.4851 9.80723L32.2331 11.0671C31.8863 12.801 30.637 14.2162 28.9596 14.7754C28.1756 15.0367 27.592 15.6979 27.4299 16.5082L27.1779 17.768C27.0356 18.4789 26.3442 18.9398 25.6334 18.7976C24.9227 18.6555 24.4617 17.964 24.6038 17.2532L24.8558 15.9934C25.2025 14.2594 26.4518 12.8443 28.1294 12.2851C28.9132 12.0238 29.497 11.3625 29.6591 10.5523L29.9111 9.29241C30.0532 8.58161 30.7446 8.12065 31.4554 8.2628Z"
                                            fill="currentColor" fill-opacity="0.5" />
                                    </g>
                                    <path opacity="0.2"
                                        d="M31.1246 17.0477C31.491 16.6812 32.0855 16.6812 32.452 17.0477C32.8186 17.4143 32.8186 18.0087 32.452 18.3752C32.0855 18.7418 31.491 18.7418 31.1246 18.3752C30.758 18.0087 30.758 17.4143 31.1246 17.0477Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path opacity="0.5"
                                        d="M7.52088 27.5831L10.4775 18.7133C11.818 14.6917 12.4883 12.6809 14.0742 12.3065C15.6602 11.9321 17.1589 13.4309 20.1565 16.4284L26.0697 22.3415C29.0671 25.3391 30.566 26.8378 30.1915 28.4238C29.8172 30.0097 27.8064 30.6799 23.7847 32.0206L14.9149 34.9772C10.0755 36.5904 7.65572 37.397 6.37843 36.1196C5.10114 34.8423 5.90771 32.4226 7.52088 27.5831Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M15.9002 13.1324L15.9888 12.7036C15.3008 12.3 14.6942 12.1602 14.0744 12.3065C13.8216 12.3662 13.5921 12.4674 13.3794 12.6117L14.5982 12.8635C13.7607 12.6905 13.4762 12.6316 13.3794 12.6117C13.3591 12.6255 13.3387 12.6399 13.3186 12.6545L13.3094 12.7004C13.2967 12.7632 13.2785 12.8551 13.2555 12.9732C13.2095 13.2094 13.1446 13.551 13.0679 13.9766C12.9146 14.8271 12.7139 16.0157 12.5239 17.37C12.1474 20.0531 11.7987 23.4813 11.9783 26.2209C12.087 27.8785 12.4319 29.935 12.7397 31.5416C12.895 32.3526 13.0437 33.0633 13.1537 33.5716C13.2087 33.8259 13.2541 34.03 13.2858 34.1712L13.3228 34.3341L13.3327 34.3772L13.3361 34.3919C13.3361 34.392 13.3365 34.3933 14.6148 34.0958L13.3361 34.3919L13.5758 35.4221C14.0003 35.2821 14.4463 35.1333 14.915 34.9772L16.0773 34.5898L15.8904 33.7865L15.8815 33.7479L15.8467 33.5944C15.8164 33.4598 15.7726 33.2631 15.7193 33.0167C15.6127 32.5237 15.4684 31.8341 15.3178 31.0478C15.0137 29.4605 14.6952 27.5364 14.5977 26.0491C14.4366 23.5924 14.7513 20.3866 15.1234 17.7348C15.3077 16.4216 15.5025 15.2675 15.6513 14.4421C15.7256 14.0297 15.7883 13.7002 15.8322 13.4747C15.8541 13.3619 15.8713 13.2753 15.883 13.2173L15.8961 13.1523L15.8993 13.1366L15.9002 13.1324Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                    <path
                                        d="M23.3193 32.176L20.8288 33.006L20.6671 32.5195L21.9128 32.1057C20.6671 32.5195 20.6673 32.5197 20.6671 32.5195L20.6656 32.5146L20.6621 32.5041L20.6496 32.466C20.639 32.4333 20.6237 32.3862 20.6047 32.326C20.5665 32.2054 20.5124 32.0323 20.448 31.8169C20.3192 31.3869 20.1477 30.7855 19.9759 30.0974C19.6397 28.7513 19.2734 26.9622 19.2734 25.4716C19.2734 23.9809 19.6397 22.1919 19.9759 20.8458C20.1477 20.1577 20.3192 19.5562 20.448 19.1263C20.5124 18.9108 20.5665 18.7378 20.6047 18.6172C20.6237 18.557 20.639 18.5099 20.6496 18.4772L20.6621 18.439L20.6656 18.4284L20.6666 18.4252C20.6666 18.4252 20.6671 18.4236 21.9128 18.8375L20.6666 18.4252L21.0376 17.309L23.1147 19.386C23.1122 19.3942 23.1094 19.4026 23.1066 19.4113C23.0723 19.5195 23.0226 19.6787 22.9628 19.8789C22.8427 20.28 22.6826 20.8416 22.5227 21.4818C22.1954 22.7922 21.8984 24.3203 21.8984 25.4716C21.8984 26.6229 22.1954 28.151 22.5227 29.4614C22.6826 30.1016 22.8427 30.6631 22.9628 31.0642C23.0226 31.2644 23.0723 31.4237 23.1066 31.5318C23.1238 31.5859 23.1371 31.6272 23.146 31.6542L23.1556 31.6841L23.1579 31.6907L23.3193 32.176Z"
                                        fill="currentColor" fill-opacity="0.5" />
                                </svg>
                                <div class="space-y-2 text-center">
                                    <span class="text-warning text-3xl font-semibold" id="count3"></span>
                                    <p class="text-base-content/80">Kendaraan Terlayani</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Component -->
    <section id="services">
        <div class="py-8 sm:py-16 lg:py-24 bg-amber-50">
            <div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="mb-12 space-y-4 text-center sm:mb-16 lg:mb-24">
                    <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">Servis Profesional,
                        Hasil Maksimal
                    </h2>
                    <p class="text-base-content/80 text-xl">Dari layanan servis berkualitas hingga proses yang cepat
                        dan
                        transparan, kami siap memberikan pengalaman terbaik untuk kendaraan Anda. Datang langsung ke
                        bengkel, lakukan booking, atau konsultasikan kebutuhan mobil Anda — kami siap membantu dengan
                        solusi yang tepat.</p>
                </div>
                <!-- Blog Grid -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Blog Card 1 -->
                    <div class="card card-border shadow-none">
                        <figure>
                            <img src="{{ asset('images/service 1.png') }}" alt="Servis 1" />
                        </figure>
                        <div class="card-body gap-3">
                            <h5 class="card-title text-xl">Servis dan Perbaikan Mesin Mobil</h5>
                            <p class="mb-5" align="justify">
                                Layanan untuk memeriksa, merawat, dan memperbaiki mesin mobil agar tetap optimal, aman,
                                dan efisien.
                            </p>
                            <div class="card-actions">
                                <a href="/blog/card1" class="btn btn-warning btn-gradient">
                                    Baca Selengkapnya
                                    <x-heroicon-c-arrow-long-right class="size-5.5"></x-heroicon-c-arrow-long-right>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 2 -->
                    <div class="card card-border shadow-none">
                        <figure>
                            <img src="{{ asset('images/service 2.png') }}" alt="Servis 2" />
                        </figure>
                        <div class="card-body gap-3">
                            <h5 class="card-title text-xl">Body Repair</h5>
                            <p class="mb-5" align="justify">
                                Layanan perbaikan bodi mobil, termasuk penyok, goresan, dan cat, agar tampilan kendaraan
                                kembali mulus dan rapi.
                            </p>
                            <div class="card-actions">
                                <a href="/blog/card2" class="btn btn-warning btn-gradient">
                                    Baca Selengkapnya
                                    <x-heroicon-c-arrow-long-right class="size-5.5"></x-heroicon-c-arrow-long-right>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 3 -->
                    <div class="card card-border shadow-none">
                        <figure>
                            <img src="{{ asset('images/service 3.png') }}" alt="Servis 3" />
                        </figure>
                        <div class="card-body gap-3">
                            <h5 class="card-title text-xl">Salon dan Detailing Kendaraan</h5>
                            <p class="mb-5" align="justify">
                                Layanan pembersihan dan perawatan menyeluruh interior dan eksterior mobil agar selalu
                                bersih, rapi, dan terlindungi.
                            </p>
                            <div class="card-actions">
                                <a href="/blog/card3" class="btn btn-warning btn-gradient">
                                    Baca Selengkapnya
                                    <x-heroicon-c-arrow-long-right class="size-5.5"></x-heroicon-c-arrow-long-right>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <div class="bg-base-100 py-8 sm:py-16 lg:py-24">
        <div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
            <div class="from-error/30 to-warning/30 p-0.25 overflow-hidden rounded-3xl bg-gradient-to-r">
                <div class="bg-base-100 rounded-3xl p-0.5">
                    <div class="from-error/6 to-warning/6 relative rounded-3xl bg-gradient-to-r to-50% p-8 lg:p-16">
                        <div
                            class="flex justify-between gap-8 max-md:flex-col max-sm:items-center max-sm:text-center md:items-center">
                            <div class="max-w-xs space-y-4 lg:max-w-lg">
                                <h2 class="text-base-content text-xl font-bold md:text-3xl">Jadwalkan Servis Anda Hari
                                    Ini</h2>
                                <p class="text-base-content/80">Percayakan perawatan kendaraan Anda kepada kami. Dari
                                    servis berkala hingga perbaikan menyeluruh yang ditangani teknisi berpengalaman,
                                    setiap pekerjaan dilakukan dengan teliti dan standar kualitas terbaik. Tanpa perlu
                                    menunggu lama — solusi untuk kendaraan Anda hanya satu langkah dari sekarang.</p>
                                <a class="btn btn-gradient btn-warning" href="#contact-us">
                                    Jadwalkan Servis
                                    <x-heroicon-c-arrow-long-right class="size-5.5"></x-heroicon-c-arrow-long-right>
                                </a>
                            </div>
                            <img src="{{ asset('images/alphard.png') }}" alt="alphard"
                                class="rtl:rotate-y-180 absolute end-0 top-0 h-full max-w-md rounded-br-3xl max-md:hidden" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team -->
    <section id="team">
        <div class="bg-base-100 py-8 sm:py-16 lg:py-24">
            <div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
                <div class="mb-12 text-center sm:mb-16 lg:mb-24">
                    <h2 class="text-base-content mb-4 text-2xl font-semibold md:text-3xl lg:text-4xl">Kenali Mekanik
                        Profesional Kami</h2>
                    <p class="text-base-content/80 text-xl">Kenali para mekanik di balik layanan servis kami dan peran
                        mereka dalam menjaga performa kendaraan Anda tetap optimal.</p>
                </div>
                <!-- Team Members -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <!-- Team Member 1 -->
                    <div class="card card-border hover:border-warning h-max shadow-none">
                        <figure class="bg-base-200 pt-10.5">
                            <img src="{{ asset('images/chef-1.png') }}" alt="Cheyenne Workman" class="h-60 w-auto" />
                        </figure>
                        <div class="card-body gap-3 p-5">
                            <h3 class="text-base-content text-lg font-medium">Cheyenne Workman</h3>
                            <div class="divider"></div>
                            <div>
                                <p class="text-base-content/80 mb-1 font-medium">Head Chef</p>
                                <p class="text-base-content/80">A visionary leader driving innovation and
                                    collaboration.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="card card-border hover:border-warning h-max shadow-none">
                        <figure class="bg-base-200 pt-10.5">
                            <img src="{{ asset('images/chef-2.png') }}" alt="Corey Rosser" class="h-60 w-auto" />
                        </figure>
                        <div class="card-body gap-3 p-5">
                            <h3 class="text-base-content text-lg font-medium">Corey Rosser</h3>
                            <div class="divider"></div>
                            <div>
                                <p class="text-base-content/80 mb-1 font-medium">Kitchen Manager</p>
                                <p class="text-base-content/80">Leading teams to build smart, scalable
                                    solutions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="card card-border hover:border-warning h-max shadow-none">
                        <figure class="bg-base-200 pt-10.5">
                            <img src="{{ asset('images/chef-3.png') }}" alt="Marilyn Westervelt"
                                class="h-60 w-auto" />
                        </figure>
                        <div class="card-body gap-3 p-5">
                            <h3 class="text-base-content text-lg font-medium">Marilyn Westervelt</h3>
                            <div class="divider"></div>
                            <div>
                                <p class="text-base-content/80 mb-1 font-medium">Sous Chef</p>
                                <p class="text-base-content/80">Crafting intuitive and engaging user
                                    experiences.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="card card-border hover:border-warning h-max shadow-none">
                        <figure class="bg-base-200 pt-10.5">
                            <img src="{{ asset('images/chef-4.png') }}" alt="Ryan Passaquindici Arcand"
                                class="h-60 w-auto" />
                        </figure>
                        <div class="card-body gap-3 p-5">
                            <h3 class="text-base-content text-lg font-medium">Ryan Passaquindici Arcand</h3>
                            <div class="divider"></div>
                            <div>
                                <p class="text-base-content/80 mb-1 font-medium">Culinary Director</p>
                                <p class="text-base-content/80">Bringing designs to life with seamless
                                    interfaces.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form -->
    <section id="contact-us">
        <div class="bg-amber-50 py-8 sm:py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <!-- Heading Section -->
                <div class="mb-12 text-center text-white sm:mb-16 lg:mb-24">
                    <h2 class="text-base-content mb-4 text-2xl font-semibold md:text-3xl md:text-6xl lg:text-4xl">
                        Jadwalkan Servis Anda Sekarang</h2>
                    <p class="text-base-content/80 text-xl">Apapun kebutuhan kendaraan Anda, kami siap memberikan
                        layanan servis yang praktis dan profesional.
                    </p>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        Jadwal servis anda berhasil dibuat. Silahkan menunggu konfirmasi selanjutnya dari admin!
                        <span>Halaman ini akan di refresh dalam<b>5</b>detik,</span>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-error" role="alert">
                        Oops! Jadwal pada jam tersebut sudah penuh. Silahkan pilih di jam lain.
                    </div>
                @endif

                <div class="card shadow-md">
                    <div class="card-body grid gap-10 lg:grid-cols-7">
                        <!-- Form Section -->
                        <div class="lg:col-span-4">
                            <h2 class="text-base-content mb-6 text-3xl font-semibold">Formulir Penjadwalan Servis</h2>

                            <form class="space-y-6" action="#" method="POST" wire:submit="createBookingUser">
                                @csrf

                                {{-- Field Biodata customer --}}
                                <div class="flex gap-6 max-md:flex-col">

                                    {{-- Field Nama --}}
                                    <div class="w-full">
                                        <label class="label-text" for="nama">Nama Lengkap</label>
                                        <div class="input input-lg">
                                            <input wire:model="nama" type="text" name="nama"
                                                class="grow @error('title') border-red-500 @enderror"
                                                placeholder="John Doe" />
                                        </div>
                                        @error('nama')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- Field Email --}}
                                    <div class="w-full">
                                        <label class="label-text" for="email">Alamat Email</label>
                                        <div class="input input-lg">
                                            <input wire:model="email" type="text" name="email" class="grow"
                                                placeholder="cth@gmail.com" />
                                        </div>
                                        @error('email')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- Field Phone --}}
                                    <div class="w-full">
                                        <label class="label-text" for="phone">Nomor Handphone</label>
                                        <div class="input input-lg">
                                            <input wire:model="phone" type="number" name="phone" class="grow"
                                                placeholder="081234567890" />
                                        </div>
                                        @error('phone')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                </div>

                                {{-- Field Model kendaraan & Nomor Polisi --}}
                                <div class="flex gap-6 max-md:flex-col">

                                    {{-- Field model kendaraan --}}
                                    <div class="w-full">
                                        <label class="label-text" for="id_kendaraan">Model Kendaraan</label>
                                        <div class="select select-lg pl-0">
                                            <select wire:model="model_kendaraan" name="model_kendaraan">
                                                <option value="" disabled selected>Model Kendaraan
                                                </option>

                                                @foreach ($cars as $car)
                                                    <option value="{{ $car->id_kendaraan }}">{{ $car->model }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('model_kendaraan')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- Field Jenis Servis --}}
                                    <div class="w-full">
                                        <label class="label-text" for="id_jenis_servis">Jenis Servis</label>
                                        <div class="select select-lg pl-0">
                                            <select wire:model="id_jenis_servis" name="id_jenis_servis">
                                                <option value="" disabled selected>Jenis Servis
                                                </option>

                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id_jenis_servis }}">
                                                        {{ $service->nama_servis }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('id_jenis_servis')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- Field nomor polisi --}}
                                    <div class="w-full">
                                        <label class="label-text" for="nomor_plat">Nomor Polisi</label>
                                        <div class="input input-lg">
                                            <input wire:model="nomor_plat" type="text" name="nomor_plat"
                                                class="grow" placeholder="B1234XXX" />
                                        </div>
                                        @error('nomor_plat')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                </div>

                                {{-- Field Tanggal & Jam Booking --}}
                                <div class="flex gap-6 max-md:flex-col">

                                    {{-- Field tanggal booking --}}
                                    <div class="w-full">
                                        <label class="label-text" for="tanggal">Tanggal Booking</label>
                                        <div class="input input-lg">
                                            <input wire:model="tanggal" type="text"
                                                class="flatpickr-date grow flatpickr-input"
                                                placeholder="Tanggal Booking" id="flatpickr-date" />
                                        </div>
                                        @error('tanggal')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    {{-- Field jam booking --}}
                                    <div class="w-full">
                                        <label class="label-text" for="jam">Jam Booking</label>
                                        <div class="select select-lg pl-0">
                                            <select wire:model="jam" name="jam">
                                                <option value="" disabled selected>Daftar Waktu Yang Tersedia
                                                </option>

                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>

                                            </select>
                                        </div>
                                        @error('jam')
                                            <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                                style="left: 12;">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                </div>

                                {{-- Field keluhan kendaraan --}}
                                <div>
                                    <label class="label-text" for="catatan_keluhan">Keluhan Kendaraan</label>
                                    <div class="textarea">
                                        <textarea wire:model="catatan_keluhan" name="catatan_keluhan" class="grow resize-none" aria-label="Textarea"
                                            placeholder="Tulis keluhan kendaraan anda ..."></textarea>
                                    </div>
                                    @error('catatan_keluhan')
                                        <p class="absolute mt-1 text-xs text-red-600 dark:text-red-500 font-medium"
                                            style="left: 12;">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-warning btn-gradient w-full">Buat
                                    Jadwal</button>
                            </form>

                        </div>
                        <!-- Contact Information -->
                        <div class="space-y-6 lg:col-span-3">
                            <div class="border-base-content/20 rounded-box border p-6 text-center">
                                <h3 class="text-base-content mb-4 text-xl font-semibold">Email/No.Telp</h3>
                                <p class="text-base-content/80 mb-2 break-all">simbisamotor@gmail.com</p>
                                <p class="text-base-content/80">+62 813-8377-1754</p>
                            </div>
                            <div class="border-base-content/20 rounded-box border p-6 text-center">
                                <h3 class="text-base-content mb-4 text-xl font-semibold">Lokasi Kami</h3>
                                <p class="text-base-content/80">Jl. Jeruk Raya No. 9A,</p>
                                <p class="text-base-content/80">Jagakarsa,</p>
                                <p class="text-base-content/80">Jakarta Selatan, Indonesia</p>
                            </div>
                            <p class="text-base-content text-center font-medium">
                                Jam Operasional Admin
                                <span class="text-warning">07.00 - 17.00 WIB</span>
                                Setiap Hari
                            </p>
                            <p class="text-base-content text-center font-medium">
                            <p class="text-rose-500" align="justify">Catatan: Admin akan segera melakukan konfirmasi
                                ke nomor handphone customer yang melakukan booking melalui whatsapp. Apabila konfirmasi
                                tidak dilakukan pada batas jam operasional admin, penjadwalan tidak akan
                                diproses/ditolak!
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    {{-- <section id="faqs">
        <div class="bg-base-100 py-8 sm:py-16 lg:py-24">
            <div class="mx-auto max-w-[1280px] px-4 sm:px-6 lg:px-8">
                <span
                    class="intersect:motion-preset-slide-right intersect:motion-duration-800 intersect:motion-opacity-0 intersect:motion-delay-600 absolute start-[15%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="102" height="120" viewBox="0 0 102 120"
                        fill="none">
                        <g opacity="0.06">
                            <path
                                d="M28.7216 21.3499C28.9372 20.7851 41.4433 1.58331 65.1497 9.79441C81.0958 15.3176 91.1148 31.322 85.0343 47.2497C80.8081 58.3201 70.4601 62.4098 58.4869 63.5065C54.2254 63.9489 52.9117 67.0751 51.4887 70.8027L49.0737 77.1288L31.533 71.0533L36.2336 58.7402C38.131 53.77 39.8962 49.7767 45.9306 48.1581C54.097 45.9987 60.2859 47.7587 63.3477 39.7382C65.4177 34.316 63.0568 29.1498 58.273 27.4928C50.6191 24.8418 44.3109 30.3308 41.287 34.7831L28.7216 21.3499ZM45.1012 97.6235C42.3843 104.74 34.7635 108.623 27.9601 106.267C21.2626 103.947 18.0403 96.308 20.7571 89.1915C23.517 81.9618 31.1379 78.0787 37.8354 80.3985C44.6389 82.7549 47.8611 90.3941 45.1012 97.6235Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path d="M44.7303 82.2389L38.3477 79.918L29.1259 105.278L35.5086 107.599L44.7303 82.2389Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path
                                d="M35.1044 23.6722C35.32 23.1074 47.8261 3.90558 71.5325 12.1167C87.4786 17.6399 97.4976 33.6442 91.4171 49.572C87.1909 60.6423 76.8429 64.7321 64.8694 65.8287C60.608 66.2711 59.2942 69.3973 57.8712 73.1249L55.4562 79.4509L37.9155 73.3754L42.6161 61.0624C44.5135 56.0921 46.2788 52.0989 52.3131 50.4803C60.4795 48.3208 66.6684 50.0808 69.7303 42.0604C71.8002 36.6382 69.4394 31.472 64.6555 29.815C57.0017 27.164 50.6934 32.653 47.6696 37.1053L35.1044 23.6722ZM51.4838 99.9456C48.7669 107.062 41.1461 110.945 34.3426 108.589C27.6451 106.269 24.4228 98.6302 27.1396 91.5137C29.8996 84.284 37.5205 80.4008 44.218 82.7206C51.0217 85.0772 54.2436 92.7162 51.4838 99.9456Z"
                                fill="var(--color-warning)" />
                            <path d="M26.8203 20.9316L33.203 23.2526L46.623 37.0351L40.2406 34.7143L26.8203 20.9316Z"
                                fill="var(--color-warning)" fill-opacity="0.4" />
                        </g>
                    </svg>
                </span>
                <span
                    class="intersect:motion-preset-slide-right intersect:motion-duration-800 intersect:motion-opacity-0 intersect:motion-delay-1200 absolute end-[15%] sm:max-md:end-[5%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="166" height="181" viewBox="0 0 166 181"
                        fill="none">
                        <g opacity="0.06">
                            <path
                                d="M32.038 72.3179C31.7026 71.5655 25.451 41.3586 57.0249 28.2981C78.263 19.513 103.808 26.4121 113.264 47.6299C119.836 62.3771 113.524 75.6814 102.682 87.4734C98.8736 91.7219 100.61 95.994 102.823 100.96L106.579 109.387L83.2168 119.05L75.9067 102.648C72.9559 96.0267 70.8247 90.4919 75.2515 83.4928C81.2727 74.0516 89.142 70.2619 84.3804 59.5776C81.1613 52.3546 73.7841 49.3467 67.4126 51.9823C57.2187 56.1989 56.2869 67.2777 57.6131 74.3927L32.038 72.3179ZM122.577 133.245C126.802 142.725 123.002 153.386 113.94 157.134C105.02 160.824 94.3791 156.137 90.1541 146.656C85.8619 137.026 89.6625 126.364 98.5827 122.674C107.644 118.926 118.285 123.614 122.577 133.245Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path d="M106.263 118.478L97.7661 122.126L112.262 155.888L120.76 152.24L106.263 118.478Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path
                                d="M40.5389 68.6694C40.2036 67.9171 33.952 37.7101 65.5259 24.6497C86.764 15.8645 112.309 22.7637 121.765 43.9815C128.337 58.7287 122.025 72.033 111.183 83.8251C107.374 88.0736 109.111 92.3457 111.324 97.3113L115.079 105.738L91.7174 115.402L84.4073 98.9994C81.4566 92.3784 79.3253 86.8436 83.7521 79.8445C89.7733 70.4033 97.6427 66.6136 92.8811 55.9293C89.662 48.7063 82.2847 45.6984 75.9132 48.334C65.7193 52.5506 64.7875 63.6294 66.1137 70.7444L40.5389 68.6694ZM131.078 129.596C135.303 139.077 131.502 149.738 122.441 153.486C113.521 157.176 102.88 152.488 98.6547 143.008C94.3625 133.377 98.1631 122.716 107.083 119.026C116.145 115.278 126.786 119.966 131.078 129.596Z"
                                fill="var(--color-warning)" />
                            <path d="M31.3276 74.3447L39.825 70.6963L65.9923 71.8589L57.4953 75.5072L31.3276 74.3447Z"
                                fill="var(--color-warning)" fill-opacity="0.4" />
                        </g>
                    </svg>
                </span>
                <!-- FAQ Header -->
                <div class="mb-12 space-y-4 text-wrap text-center sm:mb-16 lg:mb-24">
                    <h2 class="text-base-content text-2xl font-semibold md:text-3xl lg:text-4xl">Pertanyaan Umum (FAQS)
                    </h2>
                    <p class="text-base-content/80 text-xl">Berisi informasi penting dan jawaban atas pertanyaan yang
                        paling sering diajukan pelanggan mengenai layanan dan proses servis kendaraan.</p>
                </div>
                <!-- Faq stepper -->
                <div id="faq-carousel-1"
                    data-carousel='{ "loadingClasses": "opacity-0",  "slidesQty": { "xs": 1, "md": 2, "lg": 3 } }'
                    class="relative w-full">
                    <div class="flex gap-1">
                        <!-- Previous Slide -->
                        <button
                            class="btn btn-circle carousel-prev btn-outline btn-warning hover:bg-warning relative hover:text-white max-md:hidden"
                            disabled="disabled">
                            <x-heroicon-c-chevron-left class="size-5.5"></x-heroicon-c-chevron-left>
                        </button>
                        <div class="carousel rounded-box">
                            <div class="carousel-body h-[400px] overflow-y-auto gap-12 opacity-0">
                                <!-- Slide 1 -->
                                <div class="carousel-slide m-2">
                                    <div
                                        class="rounded-box hover:bg-base-100 hover:ring-warning p-4 text-center hover:ring">
                                        <h5 class="text-base-content mb-2 text-xl font-semibold">Do you offer
                                            home delivery?</h5>
                                        <p class="text-base-content/80">Yes, we do! You can place your order
                                            directly through our website or via trusted food delivery platforms
                                            like Swiggy and Zomato. We ensure that all dishes are packed with
                                            care and delivered promptly, so you can enjoy restaurant-quality
                                            food in the comfort of your home.</p>
                                        <div class="group mt-5 flex items-center justify-center gap-2">
                                            <a href="#"
                                                class="link link-animated link-warning font-normal">Learn
                                                more</a>
                                            <x-heroicon-c-arrow-long-right
                                                class="size-4 text-warning size-5.5 shrink-0 transition-transform group-hover:-translate-x-1 rtl:rotate-180"></x-heroicon-c-arrow-long-right>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-slide m-2">
                                    <div
                                        class="rounded-box hover:bg-base-100 hover:ring-warning p-4 text-center hover:ring">
                                        <h5 class="text-base-content mb-2 text-xl font-semibold">How can I book
                                            a table?</h5>
                                        <p class="text-base-content/80">Booking a table is simple and quick.
                                            Just head over to our reservation page, choose your preferred date
                                            and time, and confirm your booking in a few clicks. You’ll receive a
                                            confirmation instantly. Prefer to speak with someone? You can also
                                            call us directly.</p>
                                        <div class="group mt-5 flex items-center justify-center gap-2">
                                            <a href="#"
                                                class="link link-animated link-warning font-normal">Learn
                                                more</a>
                                            <x-heroicon-c-arrow-long-right
                                                class="size-4 text-warning size-5.5 shrink-0 transition-transform group-hover:-translate-x-1 rtl:rotate-180"></x-heroicon-c-arrow-long-right>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="carousel-slide m-2">
                                    <div
                                        class="rounded-box hover:bg-base-100 hover:ring-warning p-4 text-center hover:ring">
                                        <h5 class="text-base-content mb-2 text-xl font-semibold">What are your
                                            opening hours?</h5>
                                        <p class="text-base-content/80">We’re open every day from 11:00 AM to
                                            11:00 PM, offering both lunch and dinner service. On weekends, we
                                            also serve a special brunch menu from 10:00 AM to 1:00 PM. Holiday
                                            hours may vary, so be sure to check our website or follow us on
                                            social media for real-time updates and special announcements.</p>
                                        <div class="group mt-5 flex items-center justify-center gap-2">
                                            <a href="#"
                                                class="link link-animated link-warning font-normal">Learn
                                                more</a>
                                            <x-heroicon-c-arrow-long-right
                                                class="size-4 text-warning size-5.5 shrink-0 transition-transform group-hover:-translate-x-1 rtl:rotate-180"></x-heroicon-c-arrow-long-right>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 4 -->
                                <div class="carousel-slide m-2">
                                    <div
                                        class="rounded-box hover:bg-base-100 hover:ring-warning p-4 text-center hover:ring">
                                        <h5 class="text-base-content mb-2 text-xl font-semibold">What are your
                                            payment options ?</h5>
                                        <p class="text-base-content/80">We offer several payment options for
                                            your convenience, including credit/debit card payments, bank
                                            transfers, and online payment gateways. We also offer flexible
                                            payment plans for select travel packages.</p>
                                        <div class="group mt-5 flex items-center justify-center gap-2">
                                            <a href="#"
                                                class="link link-animated link-warning font-normal">Learn
                                                more</a>
                                            <x-heroicon-c-arrow-long-right
                                                class="size-4 text-warning size-5.5 shrink-0 transition-transform group-hover:-translate-x-1 rtl:rotate-180"></x-heroicon-c-arrow-long-right>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 5 -->
                                <div class="carousel-slide m-2">
                                    <div
                                        class="rounded-box hover:bg-base-100 hover:ring-warning p-4 text-center hover:ring">
                                        <h5 class="text-base-content mb-2 text-xl font-semibold">Do you offer
                                            vegan options?</h5>
                                        <p class="text-base-content/80">Yes, we do! We offer a variety of vegan
                                            dishes that are both flavorful and satisfying. Our menu includes
                                            plant-based starters, mains, and even desserts.</p>
                                        <div class="group mt-5 flex items-center justify-center gap-2">
                                            <a href="#"
                                                class="link link-animated link-warning font-normal">Learn
                                                more</a>
                                            <x-heroicon-c-arrow-long-right
                                                class="size-4 text-warning size-5.5 shrink-0 transition-transform group-hover:-translate-x-1 rtl:rotate-180"></x-heroicon-c-arrow-long-right>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Next Slide -->
                        <button
                            class="btn btn-circle carousel-next btn-warning btn-outline hover:bg-warning relative hover:text-white max-md:hidden">
                            <x-heroicon-c-chevron-right class="size-5.5"></x-heroicon-c-chevron-right>
                        </button>
                    </div>
                </div>
                <span
                    class="intersect:motion-preset-slide-right intersect:motion-duration-800 intersect:motion-opacity-0 intersect:motion-delay-900 absolute start-[25%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="118" height="119" viewBox="0 0 118 119"
                        fill="none">
                        <g opacity="0.05">
                            <path
                                d="M36.4391 42.706C36.2091 42.1358 33.0723 19.7058 60.7168 12.1988C79.3118 7.1492 100.433 13.8137 106.922 29.8927C111.431 41.0682 105.143 50.3678 95.1291 58.2748C91.6043 61.1299 92.769 64.3566 94.2875 68.1195L96.8646 74.5057L76.4101 80.0602L71.3941 67.6302C69.3693 62.6128 67.9605 58.4399 72.2047 53.6183C77.9718 47.1176 84.8999 44.8567 81.6326 36.7601C79.4237 31.2864 73.3964 28.6212 67.8178 30.1361C58.8925 32.5598 57.3147 40.5801 57.9297 45.854L36.4391 42.706ZM108.7 92.9284C111.6 100.113 107.624 107.645 99.6907 109.799C91.8806 111.92 83.2115 107.821 80.3124 100.637C77.3672 93.339 81.3425 85.8064 89.1526 83.6856C97.0862 81.5312 105.755 85.6303 108.7 92.9284Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path d="M95.8779 81.1625L88.4385 83.2969L98.2235 108.915L105.663 106.78L95.8779 81.1625Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path
                                d="M43.8796 40.5732C43.6495 40.003 40.5127 17.573 68.1572 10.066C86.7523 5.01639 107.874 11.6809 114.362 27.7599C118.872 38.9354 112.583 48.235 102.569 56.1421C99.0444 58.9972 100.209 62.2239 101.728 65.9868L104.305 72.3729L83.8502 77.9275L78.8342 65.4975C76.8094 60.48 75.4007 56.3072 79.6448 51.4856C85.412 44.9848 92.3401 42.724 89.0727 34.6274C86.8639 29.1537 80.8365 26.4884 75.2579 28.0033C66.3327 30.427 64.7548 38.4474 65.3699 43.7212L43.8796 40.5732ZM116.141 90.7956C119.04 97.98 115.064 105.512 107.131 107.667C99.3207 109.788 90.6516 105.689 87.7525 98.5046C84.8073 91.2062 88.7826 83.6737 96.5927 81.5528C104.527 79.3983 113.196 83.4976 116.141 90.7956Z"
                                fill="var(--color-warning)" />
                            <path d="M35.8188 44.1504L43.2582 42.0161L65.2665 44.5151L57.8274 46.6493L35.8188 44.1504Z"
                                fill="var(--color-warning)" fill-opacity="0.4" />
                        </g>
                    </svg>
                </span>
                <span
                    class="intersect:motion-preset-slide-right intersect:motion-duration-800 intersect:motion-opacity-0 intersect:motion-delay-1500 absolute end-[35%] max-sm:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="116" height="150" viewBox="0 0 116 150"
                        fill="none">
                        <g opacity="0.08">
                            <path
                                d="M16.9554 30.3465C17.0827 29.5437 28.4181 0.863619 62.9102 5.34236C86.1113 8.35499 104.343 26.7815 100.753 49.421C98.258 65.1563 85.4391 73.3239 69.547 77.9789C63.906 79.7044 63.0386 84.1802 62.1985 89.4785L60.7728 98.4703L35.2516 95.1564L38.0267 77.6548C39.1468 70.5902 40.3728 64.8497 48.0714 61.0976C58.4992 56.0608 67.392 56.724 69.1996 45.3239C70.4216 37.6168 65.719 31.4347 58.7586 30.5309C47.6225 29.0849 40.6813 38.0158 37.885 44.6991L16.9554 30.3465ZM61.3688 126.569C59.7648 136.685 50.5783 143.849 40.6794 142.564C30.9348 141.298 24.3449 132.085 25.9488 121.97C27.5782 111.694 36.7648 104.529 46.5095 105.795C56.4083 107.08 62.9981 116.293 61.3688 126.569Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path d="M56.1439 106.729L46.9902 105.416L41.7716 141.786L50.9253 143.1L56.1439 106.729Z"
                                fill="var(--color-warning)" fill-opacity="0.5" />
                            <path
                                d="M26.1092 31.661C26.2365 30.8582 37.5719 2.17807 72.064 6.65682C95.2651 9.66945 113.496 28.096 109.907 50.7355C107.412 66.4707 94.5929 74.6383 78.7005 79.2933C73.0594 81.0188 72.192 85.4946 71.3519 90.7929L69.9262 99.7847L44.4051 96.4708L47.1801 78.9692C48.3003 71.9046 49.5263 66.1641 57.2249 62.412C67.6526 57.3752 76.5455 58.0384 78.3531 46.6383C79.5751 38.9312 74.8724 32.7491 67.912 31.8453C56.776 30.3993 49.8347 39.3302 47.0384 46.0135L26.1092 31.661ZM70.5222 127.884C68.9183 137.999 59.7317 145.163 49.8329 143.878C40.0882 142.613 33.4984 133.4 35.1022 123.284C36.7316 113.008 45.9182 105.844 55.6629 107.109C65.5621 108.395 72.1515 117.608 70.5222 127.884Z"
                                fill="var(--color-warning)" />
                            <path d="M15.1777 30.0176L24.3314 31.331L46.0603 45.9576L36.907 44.6442L15.1777 30.0176Z"
                                fill="var(--color-warning)" fill-opacity="0.4" />
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    </section> --}}

    <footer>
        <div class="mx-auto max-w-[1280px] px-4 py-4 sm:px-6 sm:py-6 lg:px-8 lg:py-8">
            <div class="flex items-center justify-between gap-3 max-md:flex-col">
                <a href="#" class="text-base-content flex items-center gap-3 text-xl font-semibold">
                    <img class="h-10" src="{{ asset('images/SIMBISA-logo.jpeg') }}" alt="LOGO">
                    <span>SIMBISA.AUTO</span>
                </a>
                <nav class="flex items-center gap-6">
                    <a href="#about-us" class="link link-animated text-base-content/80 font-medium">About</a>
                    <a href="#services" class="link link-animated text-base-content/80 font-medium">Services</a>
                    <a href="#team" class="link link-animated text-base-content/80 font-medium">Team</a>
                    {{-- <a href="#faq" class="link link-animated text-base-content/80 font-medium">FAQ</a> --}}
                </nav>
                <div class="text-base-content flex h-5 gap-4">
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-5">
                            <rect x="3" y="3" width="18" height="18" rx="5" ry="5" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="17" cy="7" r="1.5" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="size-5">
                            <path
                                d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H8.07V12h2.37V9.8c0-2.34 1.4-3.63 3.54-3.63 1.03 0 2.1.18 2.1.18v2.3h-1.18c-1.17 0-1.54.73-1.54 1.48V12h2.63l-.42 2.89h-2.21v6.99A10 10 0 0 0 22 12z" />
                        </svg>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Whatsapp">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="size-5">
                            <path
                                d="M20.52 3.48A11.94 11.94 0 0 0 12.01 0C5.38 0 .01 5.37.01 12c0 2.11.55 4.17 1.6 5.99L0 24l6.19-1.62A11.93 11.93 0 0 0 12.01 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.19-3.49-8.52zM12.01 22c-1.83 0-3.61-.49-5.17-1.41l-.37-.22-3.68.96.98-3.59-.24-.37A9.96 9.96 0 0 1 2.01 12c0-5.51 4.49-10 10-10 2.67 0 5.18 1.04 7.07 2.93A9.93 9.93 0 0 1 22.01 12c0 5.51-4.49 10-10 10zm5.48-7.36c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.28-.47-2.44-1.5-.9-.8-1.51-1.79-1.68-2.09-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51l-.57-.01c-.2 0-.52.07-.8.37-.27.3-1.05 1.03-1.05 2.52 0 1.49 1.08 2.93 1.23 3.13.15.2 2.12 3.23 5.14 4.53.72.31 1.28.5 1.72.64.72.23 1.37.2 1.88.12.57-.09 1.76-.72 2.01-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="divider"></div>

        <div class="mx-auto max-w-[1280px] px-4 py-8 sm:px-6 lg:px-8">
            <div class="text-base-content text-center text-base">
                &copy;2026
                <a href="#" class="text-warning">Xirsaac</a>
                ,
                <br class="md:hidden" />
                Made With ❤️ for better web.
            </div>
        </div>
    </footer>

</main>
