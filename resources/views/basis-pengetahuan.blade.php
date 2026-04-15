<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSIM - PUSIM Universitas Merdeka Malang</title>

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

<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">
    <!-- Header/Navbar (Sama seperti Dashboard) -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-3 flex-1">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo PUSIM"
                    class="h-10 w-auto rounded-md object-contain">
                <h1
                    class="font-bold text-lg tracking-tight text-unmerDark uppercase hidden md:block border-l-2 border-gray-200 pl-3">
                    PUSIM
                </h1>
            </div>

            <nav
                class="hidden lg:flex items-center justify-center space-x-6 text-sm font-semibold text-gray-600 flex-1">
                <a href="{{ url('/dashboard') }}"
                    class="hover:text-unmerBlue transition-colors font-bold text-unmerBlue">Dashboard</a>
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
            </nav>

            <div class="flex flex-1 justify-end items-center gap-4">
                @auth
                    <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-full border border-gray-200">
                        <div
                            class="w-8 h-8 rounded-full bg-unmerBlue text-white flex items-center justify-center font-bold text-sm">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <span class="text-sm text-gray-700 font-medium hidden sm:block">{{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST"
                            class="inline ml-2 border-l border-gray-300 pl-3">
                            @csrf
                            <button type="submit"
                                class="font-bold text-red-500 hover:text-red-700 text-sm transition-colors flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                @endauth
            </div>

            <button class="lg:hidden p-2 text-gray-600 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <!-- Hero Search Section -->
        <div class="bg-unmerBlue py-16 px-4 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10"
                style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;"></div>
            <div class="container mx-auto max-w-3xl relative z-10 text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Basis Pengetahuan PUSIM</h2>
                <p class="text-blue-100 text-lg mb-8">Temukan panduan, solusi kendala, dan dokumentasi layanan sistem
                    informasi.</p>

                <div class="relative max-w-2xl mx-auto">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text"
                        class="block w-full pl-12 pr-4 py-4 rounded-xl border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-lg bg-white shadow-lg"
                        placeholder="Apa yang bisa kami bantu? (Cth: Reset Password)">
                    <button
                        class="absolute right-2 top-2 bg-unmerDark text-white px-6 py-2 rounded-lg font-bold hover:bg-gray-800 transition-colors">Cari</button>
                </div>
            </div>
        </div>

        <div class="container mx-auto max-w-6xl px-4 py-12">

            <div class="mb-10 text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Kategori Topik</h3>
                <p class="text-gray-500">Pilih kategori layanan untuk mencari solusi spesifik</p>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <!-- Category 1 -->
                <a href="{{ url('/dashboard/basis-pengetahuan/sistem-akademik') }}"
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div
                        class="w-14 h-14 bg-blue-50 text-unmerBlue rounded-xl flex items-center justify-center mb-4 group-hover:bg-unmerBlue group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Sistem Akademik</h4>
                    <p class="text-gray-500 text-sm">Panduan seputar Siakad, registrasi, KRS, dan transkrip nilai.</p>
                </a>

                <!-- Category 2 -->
                <a href="{{ url('/dashboard/basis-pengetahuan/sistem-informasi') }}"
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div
                        class="w-14 h-14 bg-green-50 text-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Sistem Informasi</h4>
                    <p class="text-gray-500 text-sm">Akses Elearning, presensi sidik jari, dan portal dosen.</p>
                </a>

                <!-- Category 3 -->
                <a href="{{ url('/dashboard/basis-pengetahuan/jaringan-wifi') }}"
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div
                        class="w-14 h-14 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Jaringan & WiFi</h4>
                    <p class="text-gray-500 text-sm">Cara menghubungkan perangkat ke jaringan nirkabel kampus.</p>
                </a>

                <!-- Category 4 -->
                <a href="{{ url('/dashboard/basis-pengetahuan/akun-institusi') }}"
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div
                        class="w-14 h-14 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Akun Institusi</h4>
                    <p class="text-gray-500 text-sm">Bantuan SSO, pembuatan email kampus, dan kendala login.</p>
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Popular Articles -->
                <div class="lg:col-span-2">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Artikel Populer & Sering Dicari
                    </h3>

                    <div class="space-y-4">
                        <a href="{{ url('/dashboard/basis-pengetahuan/reset-password-siakad') }}"
                            class="block bg-white p-5 rounded-xl border border-gray-200 hover:border-unmerBlue hover:shadow-md transition-all group">
                            <h4 class="font-bold text-lg text-gray-800 group-hover:text-unmerBlue mb-1">Cara Reset
                                Password Siakad Mahasiswa Baru</h4>
                            <p class="text-sm text-gray-500 line-clamp-2">Langkah demi langkah cara mengembalikan kata
                                sandi Anda jika lupa akses ke akun Siakad Universitas Merdeka.</p>
                        </a>
                        <a href="{{ url('/dashboard/basis-pengetahuan/koneksi-wifi') }}"
                            class="block bg-white p-5 rounded-xl border border-gray-200 hover:border-unmerBlue hover:shadow-md transition-all group">
                            <h4 class="font-bold text-lg text-gray-800 group-hover:text-unmerBlue mb-1">Menghubungkan
                                Laptop Windows 11 ke WiFi 'UNMER-STUDENT'</h4>
                            <p class="text-sm text-gray-500 line-clamp-2">Panduan lengkap mengatur proxy atau login
                                seamless di sistem operasi modern ke SSID di ruang kelas dan perpus.</p>
                        </a>
                        <a href="{{ url('/dashboard/basis-pengetahuan/error-elearning') }}"
                            class="block bg-white p-5 rounded-xl border border-gray-200 hover:border-unmerBlue hover:shadow-md transition-all group">
                            <h4 class="font-bold text-lg text-gray-800 group-hover:text-unmerBlue mb-1">Tidak Dapat
                                Mengakses Elearning Saat Ujian? Lakukan Ini</h4>
                            <p class="text-sm text-gray-500 line-clamp-2">Solusi perbaikan mandiri jika mendapatkan
                                peringatan server unreachable saat mencoba mengikuti ujian online.</p>
                        </a>
                        <a href="{{ url('/dashboard/basis-pengetahuan/daftar-email') }}"
                            class="block bg-white p-5 rounded-xl border border-gray-200 hover:border-unmerBlue hover:shadow-md transition-all group">
                            <h4 class="font-bold text-lg text-gray-800 group-hover:text-unmerBlue mb-1">Mendaftarkan
                                Alamat Email @mhs.unmer.ac.id</h4>
                            <p class="text-sm text-gray-500 line-clamp-2">Tata cara mendaftarkan diri, mengklaim akun
                                Google Workspace kampus, dan menggunakan storage gratis.</p>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Help -->
                <div class="space-y-6">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h4 class="font-bold text-gray-800 mb-4 border-b pb-2">Tidak Menemukan Solusi?</h4>
                        <p class="text-sm text-gray-600 mb-6">Tim dukungan teknis (Helpdesk) PUSIM siap membantu
                            menyelesaikan berbagai kendala Sistem Informasi secara langsung.</p>

                        <a href="{{ url('/dashboard') }}"
                            class="flex items-center justify-center w-full bg-unmerBlue hover:bg-unmerDark text-white font-bold py-2 rounded-lg transition-colors mb-3">
                            Ajukan Tiket Layanan
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 rounded-lg transition-colors">
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white py-6 border-t border-gray-200 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-500 text-sm font-medium">
                Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.
            </p>
        </div>
    </footer>
</body>

</html>