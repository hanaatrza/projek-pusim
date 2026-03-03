<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil PUSIM - Universitas Merdeka Malang</title>

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

        .profile-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            padding: 2.5rem;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #f3f4f6;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 0.75rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: #206d94;
            border-radius: 2px;
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
                <a href="{{ url('/profil') }}" class="text-unmerBlue border-b-2 border-unmerBlue pb-1">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="#" class="hover:text-unmerBlue transition-colors">Sistem Informasi</a>
                <a href="#" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="#" class="hover:text-unmerBlue transition-colors">Contact</a>
            </nav>

            <div class="relative hidden sm:block">
                <input type="text" placeholder="Cari..."
                    class="pl-4 pr-10 py-2 bg-gray-100 border-transparent rounded-full focus:bg-white focus:ring-2 focus:ring-unmerBlue text-sm w-48 transition-all outline-none text-gray-700">
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
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 leading-tight uppercase">
                Profil PUSIM
            </h2>
            <p class="text-gray-200 text-lg md:text-xl font-medium tracking-wide uppercase">
                Pusat Teknologi Informasi dan Multimedia
            </p>
        </div>
    </section>

    <main class="flex-grow container mx-auto px-4 py-20 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <div class="space-y-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 section-title">Tentang PUSIM</h3>
                </div>
                <div class="space-y-6">
                    <p class="text-lg leading-relaxed text-gray-600 text-justify">
                        Pusat Teknologi Informasi dan Komunikasi (PUSIM) Universitas Merdeka Malang adalah unit
                        pelaksana teknis yang bertanggung jawab dalam pengembangan, pengelolaan, dan pengkoordinasian
                        infrastruktur serta layanan teknologi informasi di lingkungan universitas.
                    </p>
                    <p
                        class="text-lg leading-relaxed text-gray-600 text-justify border-l-4 border-unmerBlue pl-6 italic bg-blue-50 py-4 rounded-r-lg">
                        PUSIM berkomitmen untuk menghadirkan inovasi digital yang mendukung proses akademik,
                        administrasi, dan kemahasiswaan demi mewujudkan ekosistem kampus yang cerdas dan terintegrasi.
                    </p>
                </div>
            </div>

            <div class="space-y-8">
                <div class="profile-card">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="p-3 bg-blue-50 text-unmerBlue rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-unmerBlue">Visi</h4>
                    </div>
                    <p class="text-gray-600 leading-relaxed text-lg">
                        Menjadi Universitas terkemuka dalam pengembangan SDM seutuhnya yang berjiwa wirausaha pada skala
                        nasional dan internasional.
                    </p>
                </div>

                <div class="profile-card">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="p-3 bg-yellow-50 text-yellow-600 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-2xl font-bold text-yellow-600">Misi</h4>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <span
                                class="mr-3 mt-1.5 w-2 h-2 rounded-full bg-unmerBlue shrink-0 transition-transform group-hover:scale-150"></span>
                            <p class="text-gray-600 leading-relaxed">Menyelenggarakan program pendidikan tinggi yang
                                berkualitas untuk menghasilkan lulusan kompeten, berjiwa wirausaha, dan berdaya saing
                                internasional.</p>
                        </li>
                        <li class="flex items-start group">
                            <span
                                class="mr-3 mt-1.5 w-2 h-2 rounded-full bg-unmerBlue shrink-0 transition-transform group-hover:scale-150"></span>
                            <p class="text-gray-600 leading-relaxed">Menyelenggarakan kegiatan penelitian, pengabdian
                                masyarakat, dan publikasi ilmiah bereputasi nasional maupun internasional.</p>
                        </li>
                        <li class="flex items-start group">
                            <span
                                class="mr-3 mt-1.5 w-2 h-2 rounded-full bg-unmerBlue shrink-0 transition-transform group-hover:scale-150"></span>
                            <p class="text-gray-600 leading-relaxed">Melaksanakan tata kelola universitas berbasis
                                Sistem Informasi Manajemen sebagai Decision Support System (DSS).</p>
                        </li>
                    </ul>
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