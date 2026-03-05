<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan PUSIM - Universitas Merdeka Malang</title>

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
        .hero-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
        }

        .service-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen">

    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">

            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo UNMER" class="h-12 w-auto">
                <h1
                    class="font-bold text-lg tracking-tight text-gray-800 uppercase hidden md:block border-l-2 border-gray-200 pl-3">
                    Universitas Merdeka Malang
                </h1>
            </div>

            <nav class="hidden lg:flex items-center space-x-6 text-sm font-semibold text-gray-600">
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="text-unmerBlue border-b-2 border-unmerBlue pb-1">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
            </nav>

            <div class="relative hidden sm:block">
                <input type="text" placeholder="Cari..."
                    class="pl-4 pr-10 py-2 bg-gray-100 border-transparent rounded-full focus:bg-white focus:ring-2 focus:ring-unmerBlue text-sm w-48 transition-all outline-none">
                <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>

    <section class="relative h-[450px] flex items-center justify-center text-center">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('images/unmer.jpg') }}');">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="relative z-10 px-6 max-w-4xl">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 leading-tight">
                Layanan Teknologi
            </h2>
            <p class="text-gray-200 text-lg md:text-xl font-medium tracking-wide uppercase">
                Mendukung Transformasi Digital Kampus
            </p>
        </div>
    </section>

    <main class="flex-grow container mx-auto px-4 py-20 max-w-5xl">
        <div class="space-y-12">

            <div class="service-card p-8 md:p-12 border-l-8 border-unmerBlue relative overflow-hidden bg-white">
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold text-unmerBlue mb-6 flex items-center">
                        <span
                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 text-sm italic">01</span>
                        Komitmen Transformasi Digital
                    </h3>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        PUSIM UNIVERSITAS MERDEKA MALANG berkomitmen untuk mendukung transformasi digital di lingkungan
                        universitas dengan menyediakan berbagai layanan teknologi informasi yang terintegrasi. Kami
                        hadir untuk memberikan solusi digital yang handal bagi seluruh kegiatan akademik, baik Dosen
                        maupun Mahasiswa, guna menunjang kelancaran kegiatan akademik dan administrasi.
                    </p>
                </div>
            </div>

            <div class="service-card p-8 md:p-12 border-l-8 border-unmerBlue relative overflow-hidden bg-white">
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold text-unmerBlue mb-6 flex items-center">
                        <span
                            class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 text-sm italic">02</span>
                        Kemudahan Akses Akademik
                    </h3>
                    <p class="text-gray-600 text-lg leading-relaxed text-justify">
                        Mudahkan urusan akademik Anda dengan layanan digital dari PUSIM - UNIVERSITAS MERDEKA. Kami
                        menyediakan akses cepat dan mudah untuk berbagai fasilitas IT bagi Dosen & Mahasiswa demi
                        mewujudkan kampus yang cerdas dan terkoneksi. Segala kebutuhan sistem informasi dapat diakses
                        melalui portal resmi kami secara terpadu.
                    </p>
                </div>
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