<x-layouts.app>
    <!-- Header Hero -->
    <div class="relative pt-36 pb-20 md:pt-44 md:pb-24 bg-black overflow-hidden border-b border-white/5">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-center opacity-15"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-black/85 to-transparent"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
            <span class="inline-block text-gold tracking-[0.35em] text-xs font-semibold uppercase mb-4 px-3 py-1 rounded-full border border-gold/20 bg-gold/5 backdrop-blur-sm">
                Gastronomi & Nargile Sanatı
            </span>
            <h1 class="font-serif text-4xl sm:text-6xl md:text-7xl text-white mb-6 font-light tracking-wider uppercase text-balance">
                The Boss <span class="italic text-gold font-normal">Menü</span>
            </h1>
            <p class="text-zinc-300 font-light max-w-xl mx-auto text-sm sm:text-base leading-relaxed tracking-wide text-pretty">
                Dünya mutfağından seçkin tatlar, imza kokteyller ve premium nargile karışımlarımızla benzersiz bir lezzet yolculuğu.
            </p>
        </div>
    </div>

    <!-- Category Nav (Sticky Bar with Mobile Horizontal Scroll) -->
    <nav aria-label="Menü Kategorileri" class="sticky top-[64px] md:top-[88px] z-40 bg-black/90 backdrop-blur-xl border-b border-white/10 py-3 md:py-4 shadow-xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-3 sm:space-x-8 overflow-x-auto no-scrollbar scroll-smooth py-1 px-1 justify-start md:justify-center">
                @foreach($categories as $category)
                    <a href="#cat-{{ \Illuminate\Support\Str::slug($category->name) }}" 
                       class="whitespace-nowrap px-4 py-2 md:px-0 md:py-0 rounded-full md:rounded-none bg-white/5 md:bg-transparent border border-white/10 md:border-transparent text-zinc-300 hover:text-gold hover:border-gold/30 uppercase tracking-[0.18em] text-[11px] sm:text-xs font-medium transition-all duration-300 active:scale-95">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <!-- Menu Items Section -->
    <div class="bg-[#050505] min-h-screen py-16 sm:py-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            @forelse($categories as $category)
                <section id="cat-{{ \Illuminate\Support\Str::slug($category->name) }}" class="mb-24 sm:mb-32 scroll-mt-36" aria-labelledby="heading-{{ \Illuminate\Support\Str::slug($category->name) }}">
                    <!-- Category Header -->
                    <div class="text-center mb-12 sm:mb-16">
                        <div class="inline-flex items-center justify-center gap-4">
                            <span class="w-8 sm:w-16 h-[1px] bg-gradient-to-r from-transparent to-gold/50"></span>
                            <h2 id="heading-{{ \Illuminate\Support\Str::slug($category->name) }}" class="font-serif text-3xl sm:text-4xl md:text-5xl text-white tracking-widest font-normal uppercase">
                                {{ $category->name }}
                            </h2>
                            <span class="w-8 sm:w-16 h-[1px] bg-gradient-to-l from-transparent to-gold/50"></span>
                        </div>
                    </div>
                    
                    <!-- Menu Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 sm:gap-x-16 gap-y-10 sm:gap-y-12">
                        @foreach($category->items as $item)
                            <article class="group relative flex gap-4 sm:gap-5 items-start p-3 sm:p-4 rounded-xl border border-transparent hover:border-white/5 hover:bg-white/[0.02] transition-all duration-300">
                                @if($item->getFirstMediaUrl())
                                    <div class="w-20 h-20 sm:w-24 sm:h-24 shrink-0 rounded-xl overflow-hidden border border-white/10 shadow-2xl relative bg-zinc-900">
                                        <div class="absolute inset-0 bg-gold/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10 pointer-events-none"></div>
                                        <img src="{{ $item->getFirstMediaUrl() }}" 
                                             alt="{{ $item->name }}" 
                                             width="120" 
                                             height="120" 
                                             loading="lazy" 
                                             decoding="async"
                                             class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                                    </div>
                                @endif

                                <div class="flex-grow min-w-0">
                                    <!-- Name & Price Header with Dotted Leader -->
                                    <div class="flex items-baseline justify-between gap-3 mb-2">
                                        <h3 class="font-serif text-lg sm:text-xl text-zinc-100 group-hover:text-gold transition-colors duration-300 font-medium">
                                            {{ $item->name }}
                                        </h3>
                                        <div class="shrink-0 flex items-center">
                                            @if($item->price > 0)
                                                <span class="text-sm sm:text-base font-medium font-sans text-gold tabular-nums tracking-wide">
                                                    ₺{{ number_format($item->price, 0, ',', '.') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    @if($item->description)
                                        <p class="text-zinc-400 text-xs sm:text-sm font-light leading-relaxed tracking-wide line-clamp-3">
                                            {{ $item->description }}
                                        </p>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @empty
                <div class="text-center text-zinc-500 py-32 font-light tracking-widest uppercase text-sm">
                    Menü içerikleri henüz eklenmedi.
                </div>
            @endforelse
        </div>
    </div>
</x-layouts.app>
