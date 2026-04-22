<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan PUSIM - Universitas Merdeka Malang</title>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { colors: { unmerBlue: '#1c5e82', unmerDark: '#0f3d59' }, fontFamily: { sans: ['Inter', 'sans-serif'] } } }
        }
    </script>
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(28, 94, 130, 0.7) 100%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 1);
            border-radius: 1.25rem;
            transition: all 0.4s ease;
            border: 1px solid #f3f4f6;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
            border-color: #1c5e8230;
        }

        .btn-elegant {
            background: linear-gradient(135deg, #1c5e82 0%, #0f3d59 100%);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .btn-elegant:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(28, 94, 130, 0.3);
        }

        .search-glass {
            background: rgba(249, 250, 251, 0.8);
            border: 1px solid #e5e7eb;
            transition: all 0.3s;
        }

        .search-glass:focus-within {
            background: #fff;
            border-color: #1c5e82;
            box-shadow: 0 0 0 4px rgba(28, 94, 130, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen selection:bg-unmerBlue selection:text-white">
    <header class="glass-nav sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo(1).png') }}" alt="Logo" class="h-11 w-auto rounded-md shadow-sm">
                <h1
                    class="font-bold text-sm md:text-base tracking-widest text-gray-900 uppercase hidden md:block border-l-2 border-unmerBlue/30 pl-4 py-1">
                     
                </h1>
            </div>
            <nav
                class="hidden lg:flex items-center justify-center space-x-10 text-sm font-semibold tracking-wide text-gray-500">
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="text-unmerBlue">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
            </nav>
            <div class="hidden sm:flex items-center">
                <a href="{{ url('/login') }}"
                    class="text-sm font-bold text-white btn-elegant px-7 py-2.5 rounded-full">Login Portal</a>
            </div>
            <button class="lg:hidden p-2 text-gray-800"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg></button>
        </div>
    </header>

    <section class="relative h-[450px] lg:h-[500px] flex items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105"
            style="background-image: url('{{ asset('unmer.jpeg') }}');"></div>
        <div class="absolute inset-0 hero-gradient"></div>
        <div class="relative z-10 px-6 max-w-4xl mx-auto flex flex-col items-center">
            <span
                class="px-4 py-1 rounded-full border border-white/20 bg-white/10 text-white/90 text-[10px] font-bold tracking-[0.3em] uppercase mb-5">Pusat
                Bantuan</span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">Knowledge Base
            </h2>
            <p class="text-blue-50 text-xl font-light tracking-wide max-w-2xl">Sumber daya informasi teknologi bagi
                sivitas akademika Universitas Merdeka Malang.</p>
        </div>
    </section>

    <main class="flex-grow bg-gray-50/50 py-24 relative overflow-hidden">
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="text-center mb-16">
                <h4 class="text-3xl font-bold text-gray-900 mb-4 tracking-tight">Katalog Panduan</h4>
                <div class="w-16 h-1.5 bg-gradient-to-r from-unmerBlue to-blue-300 mx-auto rounded-full mb-8"></div>
                <div class="max-w-md mx-auto relative search-glass rounded-2xl px-5 py-3.5 flex items-center shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" id="guideSearch" placeholder="Ketik topik sandi, panduan e-learning..."
                        class="bg-transparent text-gray-700 outline-none w-full font-medium">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="cards-container">
                @forelse($knowledges as $index => $kb)
                    <div class="instruction-card glass-card p-8 flex flex-col h-full group relative overflow-hidden">
                        <div
                            class="absolute -right-4 -top-4 w-24 h-24 bg-blue-50 rounded-full blur-2xl group-hover:bg-blue-100 transition-colors">
                        </div>
                        <div class="relative z-10 mb-6 flex-grow">
                            <div
                                class="w-14 h-14 rounded-2xl bg-gradient-to-br from-gray-100 to-white shadow-sm flex items-center justify-center text-3xl mb-6 border border-gray-100">
                                {{ $kb->icon ?? '📄' }}
                            </div>
                            <h3
                                class="font-bold text-gray-900 text-lg mb-3 tracking-tight leading-snug group-hover:text-unmerBlue transition-colors">
                                {{ $kb->title }}</h3>
                            <p class="text-gray-500 font-light text-sm leading-relaxed">
                                {{ Str::limit($kb->description, 100) }}</p>
                        </div>
                        <a href="{{ route('panduan.showPublic', $kb->id) }}"
                            class="relative z-10 inline-flex items-center text-sm font-semibold text-unmerBlue tracking-wide mt-auto group/btn">
                            Pelajari Dokumen
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-1 transform group-hover/btn:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                @empty
                    <div class="col-span-full py-20 bg-white border border-dashed border-gray-300 rounded-3xl text-center">
                        <div
                            class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Katalog Kosong</h3>
                        <p class="text-gray-500 font-light text-sm">Belum ada panduan yang dipublikasikan saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <footer class="bg-black py-6 border-t border-white/10 mt-auto">
        <div
            class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
            <div class="flex items-center space-x-3 mb-3 md:mb-0">
                <div
                    class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-black font-bold text-xs shadow-sm">
                    P</div>
                <span class="text-white font-semibold tracking-widest text-sm">PUSIM UNMER</span>
            </div>
            <div class="text-gray-400 text-xs font-medium tracking-wide flex flex-col md:flex-row gap-1 md:gap-4">
                <span>&copy; {{ date('Y') }} Universitas Merdeka Malang. Semua Hak Cipta Dilindungi.</span>
                <span class="hidden md:inline">|</span>
                <span>Dikelola oleh Pusat Teknologi Informasi & Multimedia.</span>
            </div>
        </div>
    </footer>

    <script>
        const searchInput = document.getElementById('guideSearch');
        if (searchInput) {
            searchInput.addEventListener('keyup', function () {
                const term = searchInput.value.toLowerCase();
                const cards = document.querySelectorAll('.instruction-card');
                cards.forEach(card => {
                    const titleElement = card.querySelector('h3');
                    const descElement = card.querySelector('p');
                    if (titleElement && descElement) {
                        const title = titleElement.innerText.toLowerCase();
                        const desc = descElement.innerText.toLowerCase();
                        if (title.includes(term) || desc.includes(term)) {
                            card.style.display = "flex";
                        } else {
                            card.style.display = "none";
                        }
                    }
                });
            });
        }
    </script>
</body>

</html>