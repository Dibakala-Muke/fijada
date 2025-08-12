<script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</script>

<section id="accueil" class="mt-15">
    <div id="hero-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-98 md:h-[600px] overflow-hidden">
            <!-- Slide 1 - Vision -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('images/carrousel/c1.jpg')">
                    <div class="absolute inset-0 bg-fijada-hero"></div>
                    <div class="relative h-full flex items-center justify-center text-white text-center px-4">
                        <div class="max-w-4xl">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/LOGO%20FIJADA-nHFjggq0O5ZT6IPvopbM505CD8XUXO.png"
                                alt="FIJADA Logo" class="h-24 w-auto mx-auto mb-6">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6">FIJADA</h1>
                            <p class="text-xl md:text-2xl mb-4">Forum International de la Jeunesse Africaine</p>
                            <p class="text-lg opacity-90">Une Afrique où les jeunes sont au cœur du développement
                                durable</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Mission -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('images/carrousel/c2.jpg')">
                    <div class="absolute inset-0 bg-fijada-hero"></div>
                    <div class="relative h-full flex items-center justify-center text-white text-center px-4">
                        <div class="max-w-4xl">
                            <div
                                class="w-20 h-20 bg-fijada-reseau rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-3xl md:text-5xl font-bold mb-6">Notre Mission</h2>
                            <p class="text-lg md:text-xl">Donner aux jeunes Africains les outils nécessaires pour
                                participer activement au développement socio-économique de leurs pays</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Formation -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('images/carrousel/c3.jpg')">
                    <div class="absolute inset-0 bg-fijada-hero bg-opacity-50"></div>
                    <div class="relative h-full flex items-center justify-center text-white text-center px-4">
                        <div class="max-w-4xl">
                            <div
                                class="w-20 h-20 bg-fijada-reseau rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-3xl md:text-5xl font-bold mb-6">Formation & Développement</h2>
                            <p class="text-lg md:text-xl mb-4">Renforcement des capacités des jeunes leaders africains
                            </p>
                            <p class="text-base opacity-90">Leadership • Entrepreneuriat • Gouvernance • Innovation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
            <button type="button"
                class="w-3 h-3 rounded-full bg-fijada-hero hover:bg-opacity-80 transition-all cursor-pointer"
                aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-fijada-hero hover:bg-opacity-80 transition-all cursor-pointer"
                aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-fijada-hero bg-opacity-50 hover:bg-opacity-80 transition-all cursor-pointer"
                aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>

        <!-- Slider controls -->
        <button type="button"
            class="ml-0 sm:ml-2 md:ml-4 lg:ml-10 xl:ml-50 absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-fijada-hero bg-opacity-20 group-hover:bg-opacity-40 transition-all">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="mr-0 sm:mr-2 md:mr-4 lg:mr-10 xl:mr-50 absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-fijada-hero bg-opacity-20 group-hover:bg-opacity-40 transition-all">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>
