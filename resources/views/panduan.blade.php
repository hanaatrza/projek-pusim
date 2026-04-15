<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan PUSIM - Universitas Merdeka Malang</title>

    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        unmerBlue: '#206d94',
                        unmerDark: '#1a4f6b',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .instruction-card {
            transition: all 0.3s ease;
        }

        .instruction-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(32, 109, 148, 0.1);
            border-color: #206d94;
        }
    </style>
</head>

<body class="bg-white text-gray-800 font-sans flex flex-col min-h-screen">

    <header class="bg-white border-b border-gray-100 sticky top-0 z-50 transition-all duration-300" id="navbar">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">

            <div class="flex items-center space-x-3 flex-1">
                <img src="{{ asset('oip.jpeg') }}" alt="Logo" class="h-12 w-auto">
                <h1
                    class="font-bold text-lg tracking-tight text-gray-800 uppercase hidden md:block border-l-2 border-gray-200 pl-3">
                    Universitas Merdeka Malang
                </h1>
            </div>

            <nav
                class="hidden lg:flex items-center justify-center space-x-6 text-sm font-semibold text-gray-600 flex-1">
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="text-unmerBlue border-b-2 border-unmerBlue pb-1">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
                <a href="{{ url('/login') }}" class="font-bold text-blue-600 hover:text-blue-800 ml-4">Login</a>
            </nav>

            <div class="hidden sm:flex flex-1 justify-end items-center">
                <div class="relative flex items-center bg-gray-100 rounded-full px-3 py-1.5 border border-gray-200">
                    <input type="text" id="guideSearch" placeholder="Cari panduan..."
                        class="bg-transparent text-sm outline-none w-28 focus:w-40 transition-all duration-400 ease-in-out text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <button class="lg:hidden p-2 text-gray-600 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <header class="relative h-[450px] w-full bg-cover bg-center flex justify-center items-center"
        style="background-image:url('{{ asset('unmer.jpeg') }}')">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-white text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-3 uppercase tracking-wide">PUSIM UNMER</h1>
            <p class="text-lg md:text-xl font-medium tracking-wide">Pusat Teknologi Informasi dan Multimedia (PUSIM)</p>
            <p class="text-lg md:text-xl font-medium tracking-wide">Solusi Transformasi Digital Terpadu.</p>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 py-16 max-w-5xl">
        <p class="text-lg text-gray-700 mb-8 text-justify leading-relaxed">
            Halaman panduan ini menyajikan berbagai sumber daya informasi untuk memudahkan Sivitas Akademika dalam
            memanfaatkan Teknologi Kampus.
        </p>

<<<<<<< HEAD
        <div class="instruction-grid">
            @forelse($knowledges as $index => $kb)
            <div class="instruction-card flex flex-col justify-between">
                <div>
                    <div class="card-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <span class="card-icon">{{ $kb->icon }}</span>
                    <h3>{{ $kb->title }}</h3>
                    <p>{{ $kb->description }}</p>
                </div>
                <a href="{{ route('panduan.showPublic', $kb->id) }}" style="display:inline-block; margin-top:15px; color:#007bff; font-weight:600; text-decoration:none;">Baca Selengkapnya &rarr;</a>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align:center; padding: 40px; color:#666;">
                Belum ada panduan yang tersedia.
=======
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 my-12" id="cards-container">
            <div class="instruction-card bg-white p-8 rounded-2xl border border-gray-200 relative overflow-hidden shadow-sm">
                <div class="absolute -top-3 -right-3 bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center font-bold text-gray-300 text-xl">01</div>
                <span class="block text-3xl mb-4">📧</span>
                <h3 class="font-montserrat text-lg font-bold text-unmerBlue mb-3">Aktivasi Email Institusi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Panduan lengkap tata cara aktivasi email resmi UNMER untuk pertama kali bagi mahasiswa baru dan dosen.</p>
            </div>

            <div class="instruction-card bg-white p-8 rounded-2xl border border-gray-200 relative overflow-hidden shadow-sm">
                <div class="absolute -top-3 -right-3 bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center font-bold text-gray-300 text-xl">02</div>
                <span class="block text-3xl mb-4">📚</span>
                <h3 class="font-montserrat text-lg font-bold text-unmerBlue mb-3">Akses Materi & Tugas</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Langkah-langkah praktis mengakses platform pembelajaran, mengunduh materi kuliah, dan mengirimkan tugas.</p>
            </div>

            <div class="instruction-card bg-white p-8 rounded-2xl border border-gray-200 relative overflow-hidden shadow-sm">
                <div class="absolute -top-3 -right-3 bg-gray-100 w-12 h-12 rounded-full flex items-center justify-center font-bold text-gray-300 text-xl">03</div>
                <span class="block text-3xl mb-4">🔑</span>
                <h3 class="font-montserrat text-lg font-bold text-unmerBlue mb-3">Lupa Password SSO</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Prosedur reset kata sandi mandiri untuk layanan Single Sign-On (SSO) universitas.</p>
>>>>>>> 56904bc0ff4812f24683185d0f80b2d1d73746c2
            </div>
            @endforelse
        </div>

        <p class="text-lg text-gray-700 mt-10 text-justify leading-relaxed">
            Optimalkan pengalaman digital Anda dengan mengikuti panduan teknis yang telah kami susun secara praktis,
            termasuk keamanan data dan koneksi <span class="text-blue-600 font-semibold">WI-FI</span> kampus.
        </p>
    </main>

    <footer class="bg-black py-8 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <p class="text-white text-sm tracking-wide opacity-80">
                Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        // Fitur Sticky Navbar Enhancement
        window.addEventListener('scroll', function () {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-md', 'py-2');
                nav.classList.remove('py-3');
            } else {
                nav.classList.remove('shadow-md', 'py-2');
                nav.classList.add('py-3');
            }
        });

        // Fitur Pencarian Real-time
        const searchInput = document.getElementById('guideSearch');
        searchInput.addEventListener('keyup', function () {
            const term = searchInput.value.toLowerCase();
            const cards = document.querySelectorAll('.instruction-card');

            cards.forEach(card => {
                const title = card.querySelector('h3').innerText.toLowerCase();
                const desc = card.querySelector('p').innerText.toLowerCase();
                if (title.includes(term) || desc.includes(term)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>