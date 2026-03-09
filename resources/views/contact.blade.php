<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact PUSIM - UNMER Malang</title>

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

            <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png"><link href="" rel="stylesheet"><style>* {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Open Sans', sans-serif;
                line-height: 1.6;
                color: #333;
                background-color: #ffffff;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            .container {
                width: 90%;
                max-width: 1100px;
                margin: 0 auto;
            }

            .navbar {
                background-color: #ffffff;
                padding: 15px 0;
                border-bottom: 1px solid #eee;
                position: sticky;
                top: 0;
                z-index: 1000;
            }

            .nav-wrapper {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo-area {
                display: flex;
                align-items: center;
                text-decoration: none;
                color: inherit;
            }

            .logo {
                height: 45px;
                margin-right: 15px;
            }

            .brand-name {
                font-family: 'Montserrat', sans-serif;
                font-weight: 700;
                font-size: 1.1rem;
            }

            .nav-links {
                display: flex;
                gap: 25px;
                list-style: none;
            }

            .nav-links a {
                color: #555;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none;
                transition: 0.3s;
            }

            .nav-links a.active,
            .nav-links a:hover {
                color: #007bff;
            }

            .hero {
                background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/unmer.jpg') no-repeat center center/cover;
                height: 300px;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
                text-align: center;
            }

            .hero-content h1 {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 10px;
            }

            .main-content {
                flex: 1;
                padding: 60px 0;
            }

            .contact-section {
                max-width: 700px;
                margin: 0 auto;
                text-align: center;
                >>>>>>>cf2cd596883ab84a5ecb9e968f83a0fd43e342e9
            }

            .info-card {
                transition: all 0.3s ease;
            }

            .info-card:hover {
                transform: translateX(10px);
            }
    </style>
</head>

<body class="bg-white text-gray-800 font-sans flex flex-col min-h-screen">

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
                <a href="{{ url('/') }}" class="hover:text-blue-500 transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-blue-500 transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-blue-500 transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-blue-500 transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="text-blue-500">Contact</a>
            </nav>

            <div class="hidden sm:flex flex-1 justify-end">
                <div class="relative w-48">
                    <input type="text" placeholder="Cari..."
                        class="pl-4 pr-10 py-2 bg-gray-100 border-transparent rounded-full focus:bg-white focus:ring-2 focus:ring-blue-400 text-sm w-full transition-all outline-none">
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <body>
                <nav class="navbar">
                    <div class="container nav-wrapper">
                        <a href="{{ url('/') }}" class="logo-area">
                            <img src="/OIP.jpeg" alt="Logo" class="logo">
                            <span class="brand-name">UNIVERSITAS MERDEKA MALANG</span>
                        </a>
                        <ul class="nav-links">
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><a href="{{ url('/profil') }}">Profil</a></li>
                            <li><a href="{{ url('/layanan') }}">Layanan</a></li>
                            <li><a href="{{ url('/panduan') }}">Panduan</a></li>
                            <li><a href="{{ url('/contact') }}" class="active">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <header class="hero">
                    <div class="hero-content">
                        <h1>HUBUNGI KAMI</h1>
                        <p>Pusat Teknologi Informasi dan Multimedia (PUSIM)</p>
                    </div>
                </header>

                <section class="relative h-[400px] flex items-center justify-center text-center">
                    <div class="absolute inset-0 bg-cover bg-center"
                        style="background-image: url('{{ asset('unmer.jpeg') }}');">
                        <div class="absolute inset-0 hero-overlay"></div>
                    </div>
                    <div class="relative z-10 text-white px-6">
                        <h1 class="text-4xl md:text-6xl font-extrabold mb-2 uppercase">HUBUNGI KAMI</h1>
                        <p class="text-xl opacity-90">Pusat Teknologi Informasi dan Multimedia (PUSIM)</p>
                    </div>
                </section>

                <main class="flex-grow py-16 bg-gray-50">
                    <div class="container mx-auto px-4 max-w-3xl">
                        <h2 class="text-3xl font-bold text-center mb-12 text-unmerBlue">Informasi Kontak</h2>

                        <div class="space-y-6">
                            <div class="info-card bg-white p-6 rounded-xl shadow-sm border-l-4 border-unmerBlue">
                                <strong class="text-xs uppercase tracking-widest text-unmerBlue">Alamat</strong>
                                <p class="text-lg text-gray-700 mt-1">Gedung Rektorat Lt. 1, Universitas Merdeka Malang
                                </p>
                            </div>

                            <div class="info-card bg-white p-6 rounded-xl shadow-sm border-l-4 border-unmerBlue">
                                <strong class="text-xs uppercase tracking-widest text-unmerBlue">Telepon</strong>
                                <p class="text-lg text-gray-700 mt-1">0341-568395</p>
                            </div>

                            <div class="info-card bg-white p-6 rounded-xl shadow-sm border-l-4 border-unmerBlue">
                                <strong class="text-xs uppercase tracking-widest text-unmerBlue">Email Support</strong>
                                <p class="text-lg text-gray-700 mt-1">pusim@unmer.ac.id</p>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="bg-black py-8">
                    <div class="container mx-auto px-4 text-center">
                        <p class="text-white text-sm opacity-80">
                            Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.
                        </p>
                    </div>
                </footer>

            </body>

</html>