<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda PUSIM - Universitas Merdeka Malang</title>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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
                    },
                }
            }
        }
    </script>

    <style>
        /* Overlay agar teks di atas gambar terlihat jelas */
        .hero-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
        }

        /* Transisi halus untuk tombol ala VS Code interactivity */
        .btn-custom {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="bg-white text-gray-800 font-sans">

    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">

            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="" class="h-12 w-auto">
                <h1
                    class="font-bold text-lg tracking-tight text-gray-800 uppercase hidden md:block border-l-2 border-gray-200 pl-3">
                    Universitas Merdeka Malang
                </h1>
            </div>

            <nav class="hidden lg:flex items-center space-x-6 text-sm font-semibold text-gray-600">
                <a href="{{ url('beranda') }}" class="text-blue-500">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-blue-500 transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-blue-500 transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-blue-500 transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-blue-500 transition-colors">Contact</a>
                <a href="#" class="hover:text-blue-500 transition-colors">Panduan</a>
                <a href="#" class="hover:text-blue-500 transition-colors">Contact</a>
            </nav>

            <div class="relative hidden sm:block">
                <input type="text" placeholder="Cari..."
                    class="pl-4 pr-10 py-2 bg-gray-100 border-transparent rounded-full focus:bg-white focus:ring-2 focus:ring-blue-400 text-sm w-48 transition-all outline-none">
                <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <button class="lg:hidden p-2 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <section class="relative min-h-[500px] flex items-center justify-center text-center">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('images/unmer.jpg') }}');">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="relative z-10 px-6 max-w-4xl">
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 leading-tight">
                PUSIM (Pusat Teknologi Informasi dan Multimedia)
            </h2>
            <h3 class="text-xl md:text-2xl font-medium text-gray-200 mb-6">
                Universitas Merdeka Malang
            </h3>
            <p class="text-base md:text-lg text-gray-300 italic border-t border-b border-white/20 py-4 inline-block">
                "Transformasi Digital dan Layanan Teknologi Informasi Terpadu"
            </p>
        </div>
    </section>

    <main class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h4 class="text-2xl font-bold text-unmerBlue mb-4">Selamat datang di laman resmi PUSIM UNMER</h4>
                <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Kami berdedikasi untuk menyediakan infrastruktur teknologi informasi yang andal demi mewujudkan Visi
                    Universitas Merdeka Malang di era digital.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                <a href="#"
                    class="btn-custom w-full sm:w-auto px-10 py-4 bg-unmerBlue text-white font-bold rounded-lg shadow-lg hover:bg-unmerDark text-center">
                    Layanan Dosen
                </a>
                <a href="#"
                    class="btn-custom w-full sm:w-auto px-10 py-4 bg-unmerBlue text-white font-bold rounded-lg shadow-lg hover:bg-unmerDark text-center">
                    Layanan Mahasiswa
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-black py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-white text-sm tracking-wide opacity-80">
                Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.
            </p>
        </div>
    </footer>

</body>

</html>