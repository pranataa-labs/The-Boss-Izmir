<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-pt-24">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="The Boss Hookah & Lounge - Dünya mutfağından seçkin tatlar, imza kokteyller ve premium nargile deneyimi. Bornova, İzmir.">
        <title>{{ $title ?? 'The Boss Hookah & Lounge' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    </head>
    <body class="bg-black text-gray-100 antialiased flex flex-col min-h-screen font-sans selection:bg-gold selection:text-black">
        
        <!-- Navbar -->
        <nav x-data="{ mobileMenuOpen: false }" id="navbar" class="fixed w-full top-0 z-50 transition-all duration-700 ease-in-out py-3 md:py-6 bg-transparent border-b border-transparent">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" aria-label="Anasayfa" class="flex items-center gap-3 transition-transform duration-500 hover:scale-105 active:scale-95">
                            <img src="{{ asset('images/logo.png') }}" alt="The Boss Hookah & Lounge" width="120" height="64" class="h-12 md:h-16 w-auto object-contain drop-shadow-xl">
                        </a>
                    </div>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-10 text-xs uppercase tracking-[0.2em] font-light">
                        <a href="{{ route('home') }}" class="text-white hover:text-gold transition-colors duration-500">Anasayfa</a>
                        <a href="{{ route('home') }}#hakkimizda" class="text-white hover:text-gold transition-colors duration-500">Hakkımızda</a>
                        <a href="{{ route('menu') }}" class="text-white hover:text-gold transition-colors duration-500">Menü</a>
                        <a href="{{ route('home') }}#rezervasyon" class="text-white hover:text-gold transition-colors duration-500">İletişim</a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="flex md:hidden items-center">
                        <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="text-white hover:text-gold focus:outline-none transition-colors duration-300">
                            <svg class="h-8 w-8" x-show="!mobileMenuOpen" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                            <svg class="h-8 w-8" x-show="mobileMenuOpen" style="display: none;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Dropdown -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-4"
                 @click.outside="mobileMenuOpen = false"
                 style="display: none;"
                 class="md:hidden absolute top-full left-0 w-full bg-black/95 backdrop-blur-md border-b border-white/10 shadow-2xl">
                <div class="flex flex-col px-4 pt-4 pb-8 space-y-6 text-xs uppercase tracking-[0.2em] font-light text-center">
                    <a @click="mobileMenuOpen = false" href="{{ route('home') }}" class="text-white hover:text-gold transition-colors duration-300 block">Anasayfa</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('home') }}#hakkimizda" class="text-white hover:text-gold transition-colors duration-300 block">Hakkımızda</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('menu') }}" class="text-white hover:text-gold transition-colors duration-300 block">Menü</a>
                    <a @click="mobileMenuOpen = false" href="{{ route('home') }}#rezervasyon" class="text-white hover:text-gold transition-colors duration-300 block">İletişim</a>
                </div>
            </div>
        </nav>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const navbar = document.getElementById('navbar');
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        navbar.classList.remove('py-6', 'bg-transparent', 'border-transparent');
                        navbar.classList.add('py-2', 'bg-black/90', 'backdrop-blur-md', 'border-white/10');
                    } else {
                        navbar.classList.add('py-6', 'bg-transparent', 'border-transparent');
                        navbar.classList.remove('py-2', 'bg-black/90', 'backdrop-blur-md', 'border-white/10');
                    }
                });

                // Custom ultra-smooth scrolling for all anchor links including full URLs
                document.querySelectorAll('a[href*="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        try {
                            const url = new URL(this.href);
                            // Only intercept if it's the current page
                            if (url.pathname === window.location.pathname) {
                                const targetId = url.hash;
                                if (targetId && targetId !== '#') {
                                    const targetElement = document.querySelector(targetId);
                                    if (targetElement) {
                                        e.preventDefault();
                                        const offsetTop = targetElement.getBoundingClientRect().top + window.scrollY - 80;
                                        
                                        window.scrollTo({
                                            top: offsetTop,
                                            behavior: 'smooth'
                                        });
                                        
                                        // Update URL without jumping
                                        history.pushState(null, null, targetId);
                                    }
                                }
                            }
                        } catch (err) {
                            // ignore invalid URLs
                        }
                    });
                });
            });
        </script>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-[#020202] border-t border-white/5 pt-24 pb-12 mt-auto relative overflow-hidden">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[1px] bg-gradient-to-r from-transparent via-gold/30 to-transparent"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col items-center mb-16 text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="The Boss Hookah & Lounge" width="180" height="96" class="h-24 w-auto object-contain mb-8 opacity-80 hover:opacity-100 transition-opacity duration-500 grayscale hover:grayscale-0">
                    <p class="text-zinc-400 font-light text-sm md:text-base tracking-widest uppercase max-w-md mx-auto leading-relaxed">
                        Lüks Nargile Deneyimi ve Eşsiz Lezzetlerin Bornova'daki Adresi
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left border-y border-white/5 py-12 mb-12">
                    <!-- Nav -->
                    <div class="flex flex-col items-center md:items-start space-y-4">
                        <h4 class="text-white font-serif tracking-[0.3em] text-sm uppercase mb-4">Hızlı Menü</h4>
                        <a href="{{ route('home') }}" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Anasayfa</a>
                        <a href="{{ route('home') }}#hakkimizda" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Hakkımızda</a>
                        <a href="{{ route('menu') }}" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Menü</a>
                    </div>
                    
                    <!-- Contact -->
                    <div class="flex flex-col items-center md:items-center space-y-4">
                        <h4 class="text-white font-serif tracking-[0.3em] text-sm uppercase mb-4">İletişim</h4>
                        <p class="text-zinc-400 text-xs tracking-widest uppercase font-light text-center">Myvia Bahçe<br>Bornova / İzmir</p>
                        <a href="tel:05538771400" aria-label="Telefon: 0553 877 14 00" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light mt-2">0553 877 14 00</a>
                    </div>
                    
                    <!-- Socials -->
                    <div class="flex flex-col items-center md:items-end space-y-4">
                        <h4 class="text-white font-serif tracking-[0.3em] text-sm uppercase mb-4">Sosyal Medya</h4>
                        <a href="#" aria-label="Instagram" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Instagram</a>
                        <a href="#" aria-label="Facebook" class="text-zinc-400 hover:text-gold transition-colors duration-300 text-xs tracking-widest uppercase font-light">Facebook</a>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row justify-between items-center text-center gap-6">
                    <p class="text-zinc-400 font-light text-xs tracking-[0.2em] uppercase">&copy; {{ date('Y') }} The Boss Hookah & Lounge.<br class="md:hidden"> Tüm Hakları Saklıdır.</p>
                    <p class="text-[10px] text-zinc-500 tracking-[0.4em] uppercase font-light">by KUZEY EGE GROUP</p>
                </div>
            </div>
        </footer>

        <!-- Floating WhatsApp & Quick Reservation Button -->
        <aside aria-label="Hızlı WhatsApp Rezervasyon" class="fixed bottom-6 right-6 z-40 flex items-center print:hidden">
            <a href="https://wa.me/905538771400?text={{ rawurlencode('Merhaba The Boss, rezervasyon yaptırmak istiyorum.') }}" 
               target="_blank" 
               rel="noopener noreferrer" 
               aria-label="WhatsApp ile Rezervasyon Yap"
               class="group relative flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-black shadow-[0_8px_30px_rgb(37,211,102,0.3)] transition-all duration-300 hover:scale-110 hover:shadow-[0_12px_35px_rgb(37,211,102,0.45)] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25D366] focus-visible:ring-offset-2 focus-visible:ring-offset-black active:scale-95">
                
                <!-- Tooltip di Desktop -->
                <span class="hidden md:block absolute right-16 mr-3 whitespace-nowrap rounded-full bg-black/90 border border-white/10 px-4 py-1.5 text-xs font-medium text-white shadow-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none tracking-wide">
                    Masa Rezervasyonu 👋
                </span>

                <!-- WhatsApp Icon -->
                <svg class="h-7 w-7 fill-current" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
            </a>
        </aside>

        @livewireScripts
    </body>
</html>
