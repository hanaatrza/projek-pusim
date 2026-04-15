<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact PUSIM - Universitas Merdeka Malang</title>

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
</head>

<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">

    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">

            <div class="flex items-center space-x-3 flex-1">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo" class="h-12 w-auto">
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
                <a href="{{ url('/panduan') }}" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="text-unmerBlue border-b-2 border-unmerBlue pb-1">Contact</a>
                <a href="{{ url('/login') }}" class="font-bold text-blue-600 hover:text-blue-800 ml-4">Login</a>
            </nav>

            <div class="hidden sm:flex flex-1 justify-end">
                <div class="relative w-48">
                    <input type="text" placeholder="Cari..."
                        class="pl-4 pr-10 py-2 bg-gray-100 border-transparent rounded-full focus:bg-white focus:ring-2 focus:ring-unmerBlue text-sm w-full transition-all outline-none">
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
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

    <section class="relative h-[450px] flex items-center justify-center text-center text-white">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/unmer.jpg') }}');">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        <div class="relative z-10 px-4">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 leading-tight uppercase tracking-wider">
                HUBUNGI KAMI
            </h2>
            <p class="text-gray-200 text-lg md:text-xl font-medium tracking-wide uppercase">
                Pusat Teknologi Informasi dan Multimedia (PUSIM)
            </p>
        </div>
    </section>

    <main class="flex-grow py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12 uppercase tracking-tight">Informasi Kontak
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl border-l-4 border-unmerBlue shadow-sm transition hover:shadow-md">
                    <strong class="block text-unmerBlue text-xs uppercase tracking-widest mb-3">Alamat</strong>
                    <p class="text-gray-700 leading-relaxed text-sm">Gedung Rektorat Lt. 1, Universitas Merdeka Malang</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl border-l-4 border-unmerBlue shadow-sm transition hover:shadow-md">
                    <strong class="block text-unmerBlue text-xs uppercase tracking-widest mb-3">Telepon</strong>
                    <p class="text-gray-700 leading-relaxed text-sm">0341-568395</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl border-l-4 border-unmerBlue shadow-sm transition hover:shadow-md">
                    <strong class="block text-unmerBlue text-xs uppercase tracking-widest mb-3">Email Support</strong>
                    <p class="text-gray-700 leading-relaxed text-sm italic">pusim@unmer.ac.id</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-black py-8 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <p class="text-white text-sm tracking-wide opacity-80">
                Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.
            </p>
        </div>
    </footer>

</body>

</html>