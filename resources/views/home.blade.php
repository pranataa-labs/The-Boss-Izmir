<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative min-h-screen w-full flex items-center justify-center overflow-hidden bg-[#050505]">
        <div class="absolute inset-0 z-0" id="hero-slider">
            <img src="{{ isset($settings['hero_image_1']) ? asset('storage/' . $settings['hero_image_1']) : 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80' }}" alt="Lounge 1" class="hero-slide w-full h-full object-cover opacity-40 transition-opacity duration-1000 absolute inset-0">
            <img loading="lazy" src="{{ isset($settings['hero_image_2']) ? asset('storage/' . $settings['hero_image_2']) : 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80' }}" alt="Lounge 2" class="hero-slide w-full h-full object-cover opacity-0 transition-opacity duration-1000 absolute inset-0">
            <img loading="lazy" src="{{ isset($settings['hero_image_3']) ? asset('storage/' . $settings['hero_image_3']) : 'https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80' }}" alt="Lounge 3" class="hero-slide w-full h-full object-cover opacity-0 transition-opacity duration-1000 absolute inset-0">
            
            <!-- Darken the top for navbar readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-transparent to-transparent z-10"></div>
            <!-- Seamless fade to the next section at the bottom -->
            <div class="absolute inset-x-0 bottom-0 h-64 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent z-10"></div>
        </div>
        
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="text-gold tracking-[0.4em] text-sm md:text-base font-semibold uppercase mb-6 block drop-shadow-md">
                The Boss Hookah & Lounge'a
            </span>
            <h1 class="font-serif text-5xl md:text-7xl lg:text-9xl text-white mb-8 leading-tight font-light tracking-wide drop-shadow-2xl">
                <span class="italic font-medium text-gold">Hoşgeldiniz</span>
            </h1>
            <p class="text-zinc-300 text-lg md:text-2xl font-light mb-12 max-w-3xl mx-auto leading-relaxed drop-shadow">
                Masa oyunları ve nargile zevkinizi zirveye çıkarıyoruz.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-8">
                <a href="#menu-section" class="px-10 py-4 bg-gold text-black font-medium uppercase tracking-[0.2em] text-xs transition-all duration-500 hover:bg-white hover:scale-105 smooth-scroll">
                    Menüyü İncele
                </a>
                <a href="#rezervasyon" class="px-10 py-4 border border-gold text-gold font-medium uppercase tracking-[0.2em] text-xs transition-all duration-500 hover:bg-gold hover:text-black hover:scale-105 smooth-scroll">
                    Rezervasyon
                </a>
            </div>
        </div>
    </section>

    <!-- Highlights Section (Glassmorphism) -->
    <section id="hizmetlerimiz" class="flex items-center justify-center relative overflow-hidden bg-[#050505] border-y border-white/5 py-12 md:py-16">
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                
                <!-- Card 1: Hookah -->
                <div class="group bg-black border border-white/10 rounded-2xl p-6 text-center transition-all duration-500 hover:border-white/30 hover:shadow-[0_0_40px_rgba(255,255,255,0.05)] hover:-translate-y-2 cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-zinc-900 border border-white/10 flex items-center justify-center group-hover:scale-110 transition-all duration-500">
                        <svg class="w-8 h-8 text-gold drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <!-- Diamond Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 8.25L12 2.25l8.25 6-8.25 13.5L3.75 8.25z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 8.25h16.5M12 2.25v19.5M8.25 2.25l-4.5 6M15.75 2.25l4.5 6" />
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl text-white tracking-widest uppercase mb-3 font-light">Lüks Nargile</h3>
                    <p class="text-zinc-500 font-light text-xs md:text-sm tracking-wide leading-relaxed">
                        Dünyaca ünlü premium tütün markaları ve ustalarımızın özel karışımlarıyla eşsiz bir deneyim.
                    </p>
                </div>
                
                <!-- Card 2: Games -->
                <div class="group bg-black border border-white/10 rounded-2xl p-6 text-center transition-all duration-500 hover:border-white/30 hover:shadow-[0_0_40px_rgba(255,255,255,0.05)] hover:-translate-y-2 cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-zinc-900 border border-white/10 flex items-center justify-center group-hover:scale-110 transition-all duration-500">
                        <svg class="w-8 h-8 text-gold drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <!-- Crown Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 21h18M4 18l3-11 5 6 5-6 3 11z"></path>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl text-white tracking-widest uppercase mb-3 font-light">Oyun Salonu</h3>
                    <p class="text-zinc-500 font-light text-xs md:text-sm tracking-wide leading-relaxed">
                        Okey, tavla ve modern kutu oyunları için ayrılmış VIP konforunda özel alanlar.
                    </p>
                </div>

                <!-- Card 3: Cafe -->
                <div class="group bg-black border border-white/10 rounded-2xl p-6 text-center transition-all duration-500 hover:border-white/30 hover:shadow-[0_0_40px_rgba(255,255,255,0.05)] hover:-translate-y-2 cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-zinc-900 border border-white/10 flex items-center justify-center group-hover:scale-110 transition-all duration-500">
                        <svg class="w-8 h-8 text-gold drop-shadow-lg" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                            <!-- Wine Glass Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 4h10M7 4c0 4 2.5 7 5 9v8M17 4c0 4-2.5 7-5 9M8 21h8"></path>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl text-white tracking-widest uppercase mb-3 font-light">Cafe & Restoran</h3>
                    <p class="text-zinc-500 font-light text-xs md:text-sm tracking-wide leading-relaxed">
                        Dünya mutfağından seçkin lezzetler ve usta barmenlerimizin elinden imza kokteyller.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="hakkimizda" class="relative min-h-[80vh] flex items-center justify-center py-20 bg-black overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center flex flex-col items-center mb-16">
                <span class="text-gold tracking-[0.2em] text-xs font-semibold uppercase mb-4 block">Hakkımızda</span>
                <h2 class="font-serif text-4xl md:text-5xl text-white font-light">İzmir'in En Prestijli <br><span class="italic text-gold">Nargile & Lounge</span> Deneyimi</h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-[4/3] relative rounded-2xl overflow-hidden shadow-2xl">
                        <img loading="lazy" src="https://images.unsplash.com/photo-1543007631-283050bb3e8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="About Us" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>
                </div>
                <div class="text-left flex flex-col items-start justify-center w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-32 h-32 text-gold mb-4 opacity-80 self-center" viewBox="0 0 450 450" preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,450.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                            <path d="M2210 2619 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10 -5 -10 -11z"/><path d="M2298 2623 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M2239 2593 c0 -10 -17 -63 -38 -118 l-37 -100 41 -117 c22 -65 42 -118 45 -118 6 0 85 231 83 240 -1 3 -19 56 -40 117 -36 107 -52 135 -54 96z m21 -101 c0 -10 8 -28 17 -42 22 -31 22 -106 0 -149 -20 -40 -21 -45 -6 -36 6 4 5 -2 -3 -14 -7 -12 -14 -17 -16 -11 -2 6 -8 8 -13 4 -5 -3 -9 1 -9 8 0 7 -3 24 -5 38 -5 22 -4 22 4 5 8 -16 10 -16 10 -4 1 9 -8 23 -20 30 -11 8 -22 26 -23 41 -3 23 -1 26 15 18 12 -7 20 -6 25 2 4 6 3 8 -3 5 -6 -4 -16 0 -22 7 -8 9 -8 17 -2 20 5 3 12 0 15 -6 3 -7 3 -3 0 9 -3 13 2 33 10 45 19 26 21 52 4 42 -7 -4 -8 -3 -4 5 10 15 26 4 26 -17z"/><path d="M2247 2441 c-4 -17 -3 -21 5 -13 5 5 8 16 6 23 -3 8 -7 3 -11 -10z"/><path d="M2208 2353 c6 -2 10 -8 8 -12 -3 -4 1 -8 9 -8 11 0 12 4 4 14 -6 7 -17 13 -23 12 -7 0 -6 -2 2 -6z"/><path d="M2186 2582 c-2 -4 -1 -14 4 -22 7 -11 9 -9 7 8 -1 24 -3 26 -11 14z"/><path d="M2171 2544 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/><path d="M2003 2403 c0 -9 4 -10 11 -3 12 12 29 13 22 1 -7 -10 28 -43 37 -35 3 4 2 14 -3 24 -5 10 -8 19 -5 21 2 2 -11 4 -29 5 -21 0 -33 -4 -33 -13z m61 -19 c5 -14 4 -15 -9 -4 -17 14 -19 20 -6 20 5 0 12 -7 15 -16z"/><path d="M2374 2398 c0 -10 1 -18 3 -18 1 0 7 8 12 18 7 13 6 19 -2 19 -7 0 -13 -9 -13 -19z"/><path d="M2469 2408 c-11 -8 -11 -9 3 -4 10 3 24 -2 33 -10 8 -9 15 -11 15 -5 0 17 -34 31 -51 19z"/><path d="M2420 2400 c-9 -6 -10 -10 -3 -10 6 0 15 5 18 10 8 12 4 12 -15 0z"/><path d="M2541 2393 c7 -12 15 -20 18 -17 3 2 -3 12 -13 22 -17 16 -18 16 -5 -5z"/><path d="M2435 2381 c-3 -5 0 -13 6 -17 7 -4 9 -3 5 4 -3 5 0 13 6 15 9 4 10 6 1 6 -6 1 -14 -3 -18 -8z"/><path d="M2032 2302 c27 -71 34 -81 95 -125 36 -26 63 -42 61 -35 -3 7 -16 41 -28 76 -21 56 -30 67 -90 111 l-67 49 29 -76z m67 -19 c-4 -22 2 -33 14 -27 8 5 8 2 -2 -9 -14 -18 -22 -22 -20 -9 4 21 -2 32 -13 26 -9 -5 -9 -2 1 9 14 18 22 22 20 10z m34 -56 c3 -7 -3 -13 -14 -13 -13 0 -15 3 -7 13 6 7 12 13 13 13 2 0 5 -6 8 -13z"/><path d="M2406 2367 c3 -10 9 -15 12 -12 3 3 0 11 -7 18 -10 9 -11 8 -5 -6z"/><path d="M2370 2361 c0 -7 -5 -9 -12 -5 -7 5 -8 3 -3 -5 5 -9 10 -10 18 -2 6 6 8 14 4 18 -4 3 -7 1 -7 -6z"/><path d="M2424 2325 c-53 -39 -64 -52 -87 -112 -15 -38 -27 -72 -27 -76 0 -3 29 15 65 40 57 42 67 54 86 108 12 33 27 66 32 73 18 23 -8 11 -69 -33z m13 -41 c-3 -3 -12 -4 -19 -1 -8 3 -5 6 6 11 1 17 -2 13 -5z m-30 -40 c-14 -12 -23 -26 -19 -30 4 -5 0 -4 -7 3 -11 9 -11 15 -3 26 7 8 10 16 7 18 -2 3 7 5 22 5 l25 0 -25 -22z"/><path d="M2530 2350 c-9 -6 -10 -10 -3 -10 6 0 15 5 18 10 8 12 4 12 -15 0z"/><path d="M1266 2247 c-16 -12 -16 -13 2 -13 10 0 19 6 19 13 0 7 -1 13 -2 13 -1 0 -9 -6 -19 -13z"/><path d="M1478 2253 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M3218 2253 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M2000 2244 c0 -5 7 -18 15 -28 8 -11 15 -16 15 -10 0 5 -7 18 -15 28 -8 11 -15 16 -15 10z"/><path d="M2988 2243 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M2978 2223 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M2460 2200 c6 -11 13 -20 16 -20 2 0 0 9 -6 20 -6 11 -13 20 -16 20 -2 0 0 -9 6 -20z"/><path d="M1300 2198 c-72 -8 -176 -54 -250 -111 l-45 -34 -202 -6 -202 -6 -26 31 c-14 17 -29 28 -32 24 -4 -3 4 -17 17 -31 l23 -25 -197 0 c-129 0 -195 -3 -191 -10 4 -6 84 -10 206 -10 l200 0 47 -39 c59 -49 115 -77 195 -97 120 -31 289 3 430 87 40 24 80 45 90 46 10 2 49 -19 88 -46 100 -71 180 -96 299 -96 123 1 222 33 333 109 40 28 68 26 45 -1 -12 -15 -11 -15 9 -3 19 12 20 15 6 25 -13 9 -7 19 39 59 60 56 48 52 -32 -9 -221 -169 -466 -195 -680 -72 l-55 32 169 3 170 2 33 -32 c36 -35 46 -28 11 9 l-21 23 96 0 c58 0 97 4 97 10 0 6 -43 10 -110 10 -106 0 -110 1 -142 29 -111 96 -271 146 -418 129z m172 -39 c53 -11 195 -74 233 -103 18 -14 5 -16 -155 -15 -183 1 -186 1 -120 39 8 5 11 12 7 16 -4 4 -19 -3 -32 -16 -21 -20 -29 -22 -43 -13 -9 6 -16 15 -15 20 2 12 -34 10 -44 -2 -5 -4 -3 -5 3 -2 6 4 20 -4 32 -16 l21 -22 -164 0 c-90 0 -161 3 -159 7 10 16 138 82 192 99 65 21 167 24 244 8z m-518 -149 c5 0 1 -9 -9 -20 -10 -11 -20 -18 -24 -16 -3 2 -15 -2 -26 -10 -10 -8 -14 -14 -8 -14 7 0 14 4 18 10 8 13 36 0 28 -14 -3 -6 -2 -7 3 -3 5 5 9 12 9 16 0 3 9 18 20 31 20 25 22 25 182 25 l163 0 -54 -27 c-191 -97 -367 -108 -520 -35 -135 66 -133 68 49 62 88 -3 164 -5 169 -5z"/><path d="M1420 2136 c0 -2 7 -7 16 -10 8 -3 12 -2 9 4 -6 10 -25 14 -25 6z"/><path d="M1366 2092 c-3 -5 1 -9 9 -9 8 0 12 4 9 9 -3 4 -7 8 -9 8 -2 0 -6 -4 -9 -8z"/><path d="M1498 2083 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M889 1983 c-13 -16 -12 -17 4 -4 9 7 17 15 17 17 0 8 -8 3 -21 -13z"/><path d="M1037 1969 c7 -7 15 -10 18 -7 3 3 -2 9 -12 12 -14 6 -15 5 -6 -5z"/><path d="M2000 2201 c0 -6 4 -13 10 -16 6 -3 7 1 4 9 -7 18 -14 21 -14 7z"/><path d="M3085 2202 c-89 -9 -203 -57 -290 -123 l-52 -39 -108 0 c-131 0 -133 -18 -3 -22 l88 -3 -34 -37 c-26 -29 -30 -36 -16 -35 10 1 17 4 15 7 -2 4 11 21 29 39 l32 31 170 -2 169 -3 -48 -28 c-209 -126 -444 -105 -674 60 -40 29 -73 49 -72 45 0 -4 28 -31 62 -60 72 -60 196 -125 282 -147 142 -36 300 -2 420 90 27 21 60 39 73 41 14 1 47 -12 79 -33 108 -69 245 -113 350 -113 100 0 229 49 302 115 l38 35 202 0 c127 0 201 4 201 10 0 6 -69 10 -187 10 -104 1 -284 3 -402 6 l-215 6 -51 39 c-105 79 -245 122 -360 111z m170 -47 c57 -15 175 -73 202 -98 9 -9 -27 -12 -152 -12 -109 0 -161 3 -154 10 5 6 15 10 22 10 6 0 13 8 15 18 5 23 -11 22 -33 -3 -10 -11 -23 -20 -30 -20 -7 0 -20 9 -30 20 -10 11 -23 20 -29 20 -6 0 4 -13 23 -29 l34 -28 -174 -2 c-195 -1 -195 -1 -74 62 126 65 260 83 380 52z m288 -171 c16 -13 33 -24 39 -24 6 0 -1 10 -16 21 -15 12 -25 23 -23 25 2 3 78 7 168 9 186 5 186 4 54 -60 -123 -60 -257 -65 -404 -15 -56 19 -161 66 -161 73 0 1 71 0 157 -2 149 -3 159 -4 186 -27z"/><path d="M3188 2133 c6 -2 10 -9 7 -14 -4 -5 1 -6 10 -2 13 5 14 7 3 14 -7 5 -17 8 -23 8 -5 0 -4 -3 3 -6z"/><path d="M1045 2170 c3 -5 11 -10 16 -10 6 0 7 5 4 10 -3 6 -11 10 -16 10 -6 0 -7 -4 -4 -10z"/><path d="M2818 2168 c11 -14 10 -18 -5 -27 -10 -6 -13 -11 -7 -11 6 0 17 6 23 14 9 10 7 17 -6 27 -16 13 -17 12 -5 -3z"/><path d="M2859 2175 c-1 -3 -2 -8 -3 -12 -1 -5 -5 -15 -10 -23 -6 -9 -1 -8 12 4 12 10 19 23 16 27 -6 10 -13 12 -15 4z"/><path d="M3413 2172 c-9 -6 -7 -11 6 -19 15 -10 19 -9 17 2 -3 20 -10 25 -23 17z"/><path d="M1665 2161 c-3 -5 -2 -12 3 -15 5 -3 9 1 9 9 0 17 -3 19 -12 6z"/><path d="M2380 2130 c-9 -6 -10 -10 -3 -10 6 0 15 5 18 10 8 12 4 12 -15 0z"/><path d="M2143 2119 c9 -6 15 -14 12 -19 -6 -11 -42 -5 -59 9 -9 8 -13 7 -13 -4 0 -8 4 -12 8 -10 3 3 13 -3 20 -12 12 -15 12 -16 -6 -9 -17 6 -18 5 -7 -6 11 -11 16 -10 28 6 8 11 14 16 14 12 0 -5 7 -3 15 4 12 10 13 16 4 26 -6 8 -17 14 -23 14 -6 0 -3 -5 7 -11z"/><path d="M2264 2105 c-4 -8 -9 -13 -13 -10 -4 2 -8 -2 -8 -10 0 -8 4 -12 9 -9 4 3 8 0 8 -5 0 -6 -5 -11 -11 -11 -5 0 -8 -4 -5 -9 7 -11 55 -11 61 0 3 4 0 11 -6 15 -8 5 -9 3 -4 -6 5 -8 3 -11 -6 -8 -8 3 -14 18 -13 36 0 35 -4 40 -12 17z"/><path d="M2336 2111 c-3 -5 2 -8 12 -7 9 0 16 -4 15 -10 -1 -6 4 -11 11 -11 7 0 13 6 13 13 0 7 -4 11 -8 8 -4 -2 -10 0 -14 6 -8 12 -22 13 -29 1z"/><path d="M390 2090 c-9 -6 -10 -10 -3 -10 6 0 15 5 18 10 8 12 4 12 -15 0z"/><path d="M3835 2090 c-3 -6 1 -7 9 -4 18 7 21 14 7 14 -6 0 -13 -4 -16 -10z"/><path d="M3932 2080 c-18 -29 -15 -36 8 -15 20 18 26 35 12 35 -4 0 -13 -9 -20 -20z"/><path d="M3977 2089 c7 -7 15 -10 18 -7 3 3 -2 9 -12 12 -14 6 -15 5 -6 -5z"/><path d="M290 2086 c0 -2 9 -6 20 -9 11 -3 18 -1 14 4 -5 9 -34 13 -34 5z"/><path d="M643 2083 c9 -2 23 -2 30 0 6 3 -1 5 -18 5 -16 0 -22 -2 -12 -5z"/><path d="M966 2078 c3 -5 10 -6 15 -3 13 9 11 12 -6 12 -8 0 -12 -4 -9 -9z"/><path d="M2540 2086 c0 -2 7 -7 16 -10 8 -3 12 -2 9 4 -6 10 -25 14 -25 6z"/><path d="M2630 2080 c8 -5 22 -9 30 -9 10 0 8 3 -5 9 -27 12 -43 12 -25 0z"/><path d="M4152 2081 c-11 -7 -10 -9 3 -14 9 -4 14 -3 10 2 -3 5 1 12 7 14 7 3 9 6 3 6 -5 0 -16 -3 -23 -8z"/><path d="M1928 2073 c6 -2 18 -2 25 0 6 3 1 5 -13 5 -14 0 -19 -2 -12 -5z"/><path d="M2720 2069 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10 -5 -10 -11z"/><path d="M2221 2062 c-1 -8 -6 -10 -13 -6 -10 5 -10 4 -1 -6 15 -16 28 -8 20 12 -4 11 -6 11 -6 0z"/><path d="M2528 2063 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M2325 1993 c0 -14 9 -29 20 -34 19 -10 19 -10 2 5 -14 11 -16 19 -8 34 7 14 7 19 -2 19 -7 0 -13 -11 -12 -24z"/><path d="M2733 1983 c-3 -10 -8 -22 -11 -27 -3 -5 0 -6 5 -3 11 7 25 47 17 47 -3 0 -7 -8 -11 -17z"/><path d="M1926 1981 c-4 -5 3 -7 14 -4 23 6 26 13 6 13 -8 0 -17 -4 -20 -9z"/><path d="M2759 1985 c-1 -3 -2 -8 -3 -12 -1 -5 -4 -13 -8 -19 -4 -6 1 -10 12 -9 27 2 36 13 16 21 -9 3 -13 10 -10 15 3 5 3 9 0 9 -3 0 -7 -2 -7 -5z"/><path d="M2780 1986 c0 -2 8 -10 18 -17 15 -13 16 -12 3 4 -13 16 -21 21 -21 13z"/><path d="M1380 1970 c-8 -5 -10 -10 -5 -10 6 0 17 5 25 10 8 5 11 10 5 10 -5 0 -17 -5 -25 -10z"/><path d="M3153 1965 c0 -8 4 -12 9 -9 5 3 6 10 3 15 -9 13 -12 11 -12 -6z"/><path d="M3898 1962 c9 -11 21 -17 25 -14 5 2 0 10 -10 18 -26 20 -36 17 -15 -4z"/><path d="M579 1953 c-11 -15 -11 -16 1 -5 17 14 34 16 25 2 -3 -6 1 -7 10 -3 13 5 14 7 3 14 -19 12 -24 11 -39 -8z"/><path d="M1346 1952 c-3 -5 1 -9 9 -9 8 0 12 4 9 9 -3 4 -7 8 -9 8 -2 0 -6 -4 -9 -8z"/><path d="M1396 1952 c-2 -4 4 -8 14 -8 10 0 16 4 14 8 -3 4 -9 8 -14 8 -5 0 -11 -4 -14 -8z"/><path d="M2120 1956 c0 -2 7 -7 16 -10 8 -3 12 -2 9 4 -6 10 -25 14 -25 6z"/><path d="M3066 1952 c-3 -5 1 -9 9 -9 8 0 12 4 9 9 -3 4 -7 8 -9 8 -2 0 -6 -4 -9 -8z"/><path d="M3100 1949 c0 -5 5 -7 10 -4 6 3 10 8 10 11 0 2 -4 4 -10 4 -5 0 -10 -5 -10 -11z"/><path d="M650 1916 c0 -2 8 -10 18 -17 15 -13 16 -12 3 4 -13 16 -21 21 -21 13z"/><path d="M1510 1890 c-9 -6 -10 -10 -3 -10 6 0 15 5 18 10 8 12 4 12 -15 0z"/><path d="M3285 1891 c-4 -7 0 -8 10 -4 10 3 21 0 27 -8 8 -12 9 -11 5 1 -5 18 -33 25 -42 11z"/><path d="M3790 1893 c8 -3 24 -10 35 -15 20 -9 20 -9 1 6 -11 9 -27 16 -35 15 -14 0 -14 -1 -1 -6z"/><path d="M708 1883 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/><path d="M1271 1874 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/><path d="M2071 1874 c0 -11 3 -14 6 -6 3 7 2 16 -1 19 -3 4 -6 -2 -5 -13z"/><path d="M2986 1874 c-5 -14 -4 -15 9 -4 17 14 19 20 6 20 -5 0 -12 -7 -15 -16z"/><path d="M655 1870 c-3 -6 1 -7 9 -4 18 7 21 14 7 14 -6 0 -13 -4 -16 -10z"/><path d="M1465 1870 c-3 -6 1 -7 9 -4 18 7 21 14 7 14 -6 0 -13 -4 -16 -10z"/><path d="M1980 1870 c-9 -6 -10 -10 -3 -10 6 0 15 5 18 10 8 12 4 12 -15 0z"/>
                        </g>
                    </svg>
                    <div class="space-y-6 text-zinc-400 font-light leading-relaxed">
                        <p>
                            The Boss Hookah & Lounge, standartların ötesinde bir deneyim arayanlar için tasarlandı. Modern mimarisi, VIP oyun alanları ve seçkin menüsüyle Bornova'da lüksün yeni adresi.
                        </p>
                        <p>
                            Dünyanın dört bir yanından özenle seçilmiş premium tütünlerimiz, alanında uzman nargile şeflerimizin sihirli dokunuşlarıyla eşsiz bir keyfe dönüşüyor.
                        </p>
                    </div>
                    <div class="mt-12 flex gap-8 justify-start w-full">
                        <div>
                            <p class="text-4xl font-serif text-gold mb-2">10+</p>
                            <p class="text-xs uppercase tracking-widest text-zinc-500">Premium Marka</p>
                        </div>
                        <div>
                            <p class="text-4xl font-serif text-gold mb-2">50+</p>
                            <p class="text-xs uppercase tracking-widest text-zinc-500">Özel Karışım</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Preview Section -->
    @if(isset($categories) && $categories->count() > 0)
    <section id="menu-section" class="relative min-h-[80vh] flex flex-col justify-center py-20 bg-[#050505] border-y border-white/5 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="flex flex-col items-center text-center mb-16 gap-8">
                <div>
                    <span class="text-gold tracking-[0.2em] text-xs font-semibold uppercase mb-4 block">Özel Lezzetler</span>
                    <h2 class="font-serif text-4xl md:text-5xl text-white font-light">İmza <span class="italic text-gold">Tatlarımız</span></h2>
                </div>
                <a href="{{ route('menu') }}" class="inline-flex items-center gap-3 text-gold tracking-widest uppercase text-xs hover:text-white transition-colors duration-300">
                    Tüm Menüyü Gör
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-12">
                @foreach($categories->take(2) as $category)
                    <div class="mb-6">
                        <h3 class="font-serif text-3xl text-white border-b border-white/10 pb-4 mb-8">{{ $category->name }}</h3>
                        <div class="space-y-8">
                            @foreach($category->items->take(3) as $item)
                                <div class="group flex items-start gap-5">
                                    @if($item->getFirstMediaUrl())
                                        <div class="w-20 h-20 shrink-0 overflow-hidden rounded-lg border border-white/5 shadow-lg">
                                            <img loading="lazy" src="{{ $item->getFirstMediaUrl() }}" alt="{{ $item->name }}" class="w-full h-full object-cover transition-all duration-700 ease-in-out">
                                        </div>
                                    @endif
                                    <div class="flex-grow pt-1">
                                        <h4 class="font-serif text-xl text-gold group-hover:text-white transition-colors duration-300 mb-2">{{ $item->name }}</h4>
                                        <p class="text-zinc-500 text-sm font-light leading-relaxed">{{ $item->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Gallery Preview -->
    @if(isset($galleries) && $galleries->count() > 0)
    <section id="galeri" class="min-h-[80vh] flex flex-col justify-center py-20 relative bg-black overflow-hidden border-b border-white/5">
        <div class="text-center mb-12">
            <span class="text-gold tracking-[0.3em] uppercase text-xs mb-4 block">Atmosfer</span>
            <h2 class="font-serif text-4xl text-white tracking-widest uppercase font-light">Mekanı Keşfedin</h2>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-2 md:gap-4" id="dynamic-gallery">
                @foreach($galleries->take(10) as $gallery)
                    <div class="gallery-item aspect-[4/5] rounded-xl relative overflow-hidden group transition-all duration-1000 ease-in-out">
                        <img src="{{ $gallery->getFirstMediaUrl() }}" alt="{{ $gallery->title }}" width="400" height="500" loading="lazy" class="gallery-img absolute inset-0 object-cover w-full h-full grayscale opacity-60 transition-all duration-1000" data-url="{{ $gallery->getFirstMediaUrl() }}">
                        <div class="gallery-overlay absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-black/40 z-10">
                            <span class="gallery-title font-serif text-white tracking-[0.2em] uppercase text-xs md:text-sm font-light text-center px-2">{{ $gallery->title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const galleryContainer = document.getElementById('dynamic-gallery');
                const items = Array.from(galleryContainer.querySelectorAll('.gallery-item'));
                
                if(items.length > 0) {
                    setInterval(() => {
                        // Reset semua gambar menjadi redup (grayscale)
                        items.forEach(slot => {
                            const img = slot.querySelector('.gallery-img');
                            img.classList.add('grayscale', 'opacity-60');
                            img.classList.remove('grayscale-0', 'opacity-100', 'scale-105');
                        });

                        // Pilih 3 gambar secara acak untuk menyala
                        let slotsToHighlight = [];
                        let availableIndices = [...Array(items.length).keys()];
                        for(let i=0; i<3; i++) {
                            if(availableIndices.length === 0) break;
                            let randIdx = Math.floor(Math.random() * availableIndices.length);
                            slotsToHighlight.push(availableIndices[randIdx]);
                            availableIndices.splice(randIdx, 1);
                        }

                        // Nyalakan gambar yang terpilih
                        slotsToHighlight.forEach(slotIdx => {
                            const img = items[slotIdx].querySelector('.gallery-img');
                            img.classList.remove('grayscale', 'opacity-60');
                            img.classList.add('grayscale-0', 'opacity-100', 'scale-105');
                        });

                    }, 3000); // 3 detik
                }
            });
        </script>
    </section>
    @endif

    <!-- Barista / Team Section -->
    <section id="ekibimiz" class="relative min-h-[80vh] flex items-center justify-center py-20 bg-[#050505] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center flex flex-col items-center mb-16">
                <span class="text-gold tracking-[0.2em] text-xs font-semibold uppercase mb-4 block">Ustalık ve Sanat</span>
                <h2 class="font-serif text-4xl md:text-5xl text-white font-light">Baş Baristamızın <br><span class="italic text-gold">Özel Dokunuşu</span></h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-1 lg:order-2 relative w-full flex justify-center">
                    <div class="aspect-[2/3] w-full max-w-[320px] lg:max-w-[360px] relative rounded-2xl overflow-hidden shadow-2xl border border-white/5">
                        <img loading="lazy" src="{{ isset($settings['barista_image']) ? asset('storage/' . $settings['barista_image']) : 'https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80' }}" alt="Baş Barista" class="w-full h-full object-cover transition-all duration-700">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-gold/10 rounded-full blur-3xl pointer-events-none"></div>
                </div>

                <div class="order-2 lg:order-1 text-left flex flex-col items-start justify-center">
                    <div class="space-y-6 text-zinc-400 font-light leading-relaxed">
                        <p>
                            Her bir içecek ve kokteylimiz, baristalarımızın tutkusu ve yıllara dayanan deneyimiyle hazırlanır. Sadece en kaliteli çekirdekleri ve malzemeleri kullanarak, her yudumda The Boss farkını hissetmenizi sağlıyoruz.
                        </p>
                        <p>
                            Klasik lezzetlerden imza reçetelere kadar uzanan geniş yelpazemiz, damak zevkinize hitap etmek için özenle tasarlandı. Ustalarımızın ellerinden çıkan bu sanat eserlerini tatmaya davetlisiniz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / Location & Direct Reservation -->
    <section id="rezervasyon" class="relative min-h-[80vh] flex items-center justify-center py-20 bg-[#0a0a0a] overflow-hidden border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center flex flex-col items-center mb-16">
                <span class="text-gold tracking-[0.3em] uppercase text-xs mb-4 block font-medium">Rezervasyon & İletişim</span>
                <h2 class="font-serif text-4xl sm:text-5xl text-white tracking-widest uppercase font-light mb-6 text-balance">
                    Bize <span class="italic text-gold">Ulaşın</span>
                </h2>
                <p class="text-zinc-300 font-light text-sm sm:text-base tracking-wide leading-relaxed max-w-lg mx-auto text-pretty">
                    Özel etkinlikler, VIP masa rezervasyonları ve sorularınız için bizimle anında iletişime geçebilirsiniz.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Google Maps Embed Card -->
                <div class="h-[420px] sm:h-[480px] w-full border border-white/10 p-2.5 rounded-2xl overflow-hidden bg-black/60 shadow-2xl">
                    @if(isset($settings['map_url']))
                        <iframe title="Google Maps Location" src="{{ $settings['map_url'] }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full rounded-xl grayscale contrast-125 opacity-90 hover:grayscale-0 hover:opacity-100 transition-all duration-500"></iframe>
                    @else
                        <div class="w-full h-full rounded-xl bg-zinc-950 flex flex-col items-center justify-center text-zinc-500 font-light tracking-widest text-xs uppercase p-6 text-center">
                            <svg class="w-8 h-8 text-gold/40 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                            Harita Yüklenmedi
                        </div>
                    @endif
                </div>
                
                <!-- Contact Action Cards -->
                <div class="flex flex-col justify-center space-y-8 bg-zinc-950/70 border border-white/10 p-8 sm:p-10 rounded-2xl shadow-2xl backdrop-blur-sm">
                    <div>
                        <span class="text-gold tracking-[0.25em] text-[11px] uppercase font-semibold block mb-2">Hızlı Rezervasyon</span>
                        <h3 class="font-serif text-2xl sm:text-3xl text-white font-medium mb-4">Masanızı Hemen Ayırın</h3>
                        <p class="text-zinc-400 text-sm font-light leading-relaxed mb-6">
                            Hafta sonu ve akşam yoğunluklarında yerinizi garantiye almak için telefonla arayabilir veya WhatsApp üzerinden yazabilirsiniz.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            @php
                                $rawPhone = isset($settings['contact_phone']) ? preg_replace('/\D/', '', $settings['contact_phone']) : '05538771400';
                                if (str_starts_with($rawPhone, '0')) {
                                    $waPhone = '90' . substr($rawPhone, 1);
                                } else {
                                    $waPhone = $rawPhone;
                                }
                            @endphp
                            <a href="tel:{{ $rawPhone }}" class="inline-flex items-center justify-center gap-3 px-6 py-3.5 rounded-full bg-gold text-black font-semibold text-xs uppercase tracking-[0.15em] transition-all duration-300 hover:bg-white hover:scale-[1.02] shadow-lg">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57a1.02 1.02 0 00-1.02.24l-2.2 2.2a15.045 15.045 0 01-6.59-6.59l2.2-2.21a.96.96 0 00.25-1A11.36 11.36 0 018.5 4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.5c0-.55-.45-1-1-1z"/></svg>
                                Hemen Ara
                            </a>
                            <a href="https://wa.me/{{ $waPhone }}?text={{ rawurlencode('Merhaba The Boss, rezervasyon yaptırmak istiyorum.') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-3 px-6 py-3.5 rounded-full border border-[#25D366]/40 bg-[#25D366]/10 text-[#25D366] hover:bg-[#25D366] hover:text-black font-semibold text-xs uppercase tracking-[0.15em] transition-all duration-300 hover:scale-[1.02]">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                WhatsApp Rezervasyon
                            </a>
                        </div>
                    </div>

                    <div class="border-t border-white/10 pt-6">
                        <span class="text-zinc-500 font-light tracking-[0.2em] text-[11px] uppercase block mb-1">Mekan Adresi</span>
                        <p class="text-zinc-200 font-light text-base sm:text-lg tracking-wide leading-relaxed">
                            {{ $settings['address'] ?? "Myvia Bahçe, Bornova / İzmir" }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Hero Slider Script
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.hero-slide');
            if (slides.length > 0) {
                let currentSlide = 0;
                setInterval(() => {
                    // Hide current
                    slides[currentSlide].classList.remove('opacity-40');
                    slides[currentSlide].classList.add('opacity-0');
                    
                    // Move to next
                    currentSlide = (currentSlide + 1) % slides.length;
                    
                    // Show next
                    slides[currentSlide].classList.remove('opacity-0');
                    slides[currentSlide].classList.add('opacity-40');
                }, 3000);
            }
        });
    </script>
</x-layouts.app>
