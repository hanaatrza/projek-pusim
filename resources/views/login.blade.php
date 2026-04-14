<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Universitas Merdeka Malang</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        primaryBlue: '#4285f4',
                        unmerOrange: '#f57c00',
                        unmerGreen: '#8cb043',
                        unmerYellow: '#ffcc00',
                        bgBody: '#d1e3f8',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-bgBody text-gray-800 font-sans flex flex-col min-h-screen">

    <!-- Navbar Standar -->
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
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
                <a href="{{ url('/login') }}" class="text-unmerBlue font-bold border-b-2 border-unmerBlue pb-1 ml-4">Login</a>
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

    <!-- Konten Login -->
    <div class="flex-1 flex justify-center items-center py-12 px-4">
        <div class="bg-white w-full max-w-[900px] h-auto md:h-[520px] flex flex-col md:flex-row rounded-3xl overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.1)]">
            
            <div class="flex-1 bg-cover bg-center flex items-end relative"
                style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5)), url('{{ asset('images/malang.jpg') }}'); min-height: 200px;">
                <div class="bg-unmerGreen w-full p-8 text-center text-white">
                    <h1 class="text-2xl md:text-[26px] font-extrabold tracking-widest uppercase">PUSIM</h1>
                    <p class="mt-2 text-sm md:text-base">Universitas Merdeka Malang</p>
                </div>
            </div>

            <div class="flex-[1.1] p-8 md:p-[60px] flex flex-col justify-center">
                <h2 class="mb-6 text-gray-800 text-[22px] font-bold">Selamat Datang</h2>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    @if ($errors->any())
                        <div class="text-red-500 mb-4 text-sm text-center">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <div class="mb-5">
                        <label class="block mb-2 text-sm text-gray-600 font-semibold">Email</label>
                        <div class="relative flex items-center">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" required
                                class="w-full p-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:border-unmerOrange transition-colors duration-300">
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 text-sm text-gray-600 font-semibold">Password</label>
                        <div class="relative flex items-center">
                            <input type="password" name="password" placeholder="Masukkan password Anda" required
                                class="w-full p-3 border border-gray-300 rounded-lg bg-gray-50 outline-none focus:border-unmerOrange transition-colors duration-300">
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full mt-2 p-[14px] bg-unmerYellow hover:bg-[#e6b800] text-[#1a4314] rounded-lg text-base font-bold flex justify-center items-center gap-2 transition-all duration-300 shadow-[0_4px_6px_rgba(0,0,0,0.1)] hover:shadow-[0_6px_12px_rgba(0,0,0,0.15)] hover:-translate-y-[2px]">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer Standar -->
    <footer class="bg-black py-8 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <p class="text-white text-sm tracking-wide opacity-80">
                Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.
            </p>
        </div>
    </footer>

</body>

</html>