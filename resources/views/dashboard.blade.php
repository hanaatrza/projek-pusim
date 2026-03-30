<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PUSIM Universitas Merdeka Malang</title>

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
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">
    <!-- Header/Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-3 flex-1">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo PUSIM"
                    class="h-10 w-auto rounded-md object-contain">
                <h1
                    class="font-bold text-lg tracking-tight text-unmerDark uppercase hidden md:block border-l-2 border-gray-200 pl-3">
                    Dashboard PUSIM
                </h1>
            </div>

            <nav
                class="hidden lg:flex items-center justify-center space-x-6 text-sm font-semibold text-gray-600 flex-1">
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
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
                @else
                    <a href="{{ url('/login') }}" class="font-bold text-unmerBlue hover:text-unmerDark">Login</a>
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
    <main class="flex-grow container mx-auto px-4 py-8 max-w-7xl fade-in">

        <!-- Welcome Banner -->
        <div
            class="bg-gradient-to-r from-unmerBlue to-blue-500 rounded-2xl shadow-lg p-8 mb-8 text-white relative overflow-hidden">
            <div class="relative z-10 w-full md:w-2/3">
                <h2 class="text-3xl font-extrabold mb-2">Selamat Datang, {{ Auth::user()->name ?? 'Pengguna' }}! 👋</h2>
                <p class="text-blue-100 text-lg">Kelola layanan dan akses informasi PUSIM Universitas Merdeka Malang
                    dengan mudah melalui dashboard terpusat ini.</p>
                <div class="mt-6 flex gap-4">
                    <button onclick="openModal()"
                        class="bg-white text-unmerBlue px-5 py-2.5 rounded-lg font-bold shadow-md hover:bg-gray-100 transition-all transform hover:-translate-y-1">Ajukan
                        Layanan</button>
                    <button
                        class="bg-transparent border-2 border-white text-white px-5 py-2.5 rounded-lg font-bold hover:bg-white hover:text-unmerBlue transition-all">Lihat
                        Panduan</button>
                </div>
            </div>
            <div class="absolute right-0 top-0 h-full opacity-20 hidden md:block w-1/3">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                    class="w-full h-full transform scale-150 translate-x-10 translate-y-10">
                    <path fill="#ffffff"
                        d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,81.3,-46.3C90.8,-33.5,96.8,-18,97.4,-2.2C98,13.6,93.2,29.7,83.9,43.3C74.6,56.9,60.8,68.1,45.8,76C30.8,83.9,14.7,88.5,0.1,88.3C-14.5,88.1,-29,83.1,-42.6,75.1C-56.2,67.1,-68.9,56.1,-78.4,42.5C-87.9,28.9,-94.1,12.7,-93.4,-3C-92.7,-18.7,-85.1,-33.9,-74.6,-46C-64.1,-58.1,-50.7,-67,-36.8,-73.9C-22.9,-80.8,-8.5,-85.6,3.6,-81.4C15.7,-77.2,30.6,-83.6,44.7,-76.4Z"
                        transform="translate(100 100)" />
                </svg>
            </div>
        </div>

        <!-- Dashboard Widgets / Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold px-2 py-1 bg-green-100 text-green-700 rounded-full">+2 Hari
                        Ini</span>
                </div>
                <h3 class="text-2xl font-black text-gray-800">12</h3>
                <p class="text-gray-500 font-medium text-sm mt-1">Total Layanan Diajukan</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-yellow-100 text-yellow-600 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold px-2 py-1 bg-yellow-100 text-yellow-700 rounded-full">Dalam
                        Proses</span>
                </div>
                <h3 class="text-2xl font-black text-gray-800">3</h3>
                <p class="text-gray-500 font-medium text-sm mt-1">Layanan Menunggu</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-green-100 text-green-600 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold px-2 py-1 bg-gray-100 text-gray-600 rounded-full">Bulan Ini</span>
                </div>
                <h3 class="text-2xl font-black text-gray-800">8</h3>
                <p class="text-gray-500 font-medium text-sm mt-1">Layanan Selesai</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-purple-100 text-purple-600 p-3 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold px-2 py-1 bg-red-100 text-red-700 rounded-full">Penting</span>
                </div>
                <h3 class="text-2xl font-black text-gray-800">2</h3>
                <p class="text-gray-500 font-medium text-sm mt-1">Notifikasi Baru</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activity Table -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
                    <h3 class="font-bold text-gray-800">Aktivitas Terkini</h3>
                    <a href="#" class="text-sm font-semibold text-unmerBlue hover:underline">Lihat Semua</a>
                </div>
                <div class="p-0 overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-white border-b border-gray-100 text-xs uppercase text-gray-500 tracking-wider">
                                <th class="p-4 font-semibold">Layanan</th>
                                <th class="p-4 font-semibold">Tanggal</th>
                                <th class="p-4 font-semibold">Status</th>
                                <th class="p-4 font-semibold text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                <td class="p-4">
                                    <div class="font-bold text-gray-800">Peminjaman Laboratorium Komputer</div>
                                    <div class="text-gray-500 text-xs">ID Req: #REQ-10023</div>
                                </td>
                                <td class="p-4 text-gray-600">11 Mar 2026</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> Menunggu
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-unmerBlue hover:text-unmerDark font-semibold">Detail</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                <td class="p-4">
                                    <div class="font-bold text-gray-800">Pembuatan Akun Email Mahasiswa</div>
                                    <div class="text-gray-500 text-xs">ID Req: #REQ-10021</div>
                                </td>
                                <td class="p-4 text-gray-600">08 Mar 2026</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Selesai
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-unmerBlue hover:text-unmerDark font-semibold">Detail</button>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                <td class="p-4">
                                    <div class="font-bold text-gray-800">Aduan Jaringan WiFi Perpustakaan</div>
                                    <div class="text-gray-500 text-xs">ID Req: #REQ-10015</div>
                                </td>
                                <td class="p-4 text-gray-600">05 Mar 2026</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Diproses
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-unmerBlue hover:text-unmerDark font-semibold">Detail</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="p-4">
                                    <div class="font-bold text-gray-800">Reset Password Siakad</div>
                                    <div class="text-gray-500 text-xs">ID Req: #REQ-10008</div>
                                </td>
                                <td class="p-4 text-gray-600">01 Mar 2026</td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Selesai
                                    </span>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-unmerBlue hover:text-unmerDark font-semibold">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Access Menu -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <h3 class="font-bold text-gray-800">Akses Cepat</h3>
                </div>
                <div class="p-4 space-y-3">
                    <a href="#" onclick="openModal(); return false;"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors border border-transparent hover:border-blue-100 group">
                        <div
                            class="bg-blue-100 p-2 rounded text-blue-600 group-hover:bg-unmerBlue group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800 text-sm group-hover:text-unmerBlue">Buat Tiket Baru
                            </h4>
                            <p class="text-xs text-gray-500">Ajukan permohonan layanan atau kendala</p>
                        </div>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors border border-transparent hover:border-blue-100 group">
                        <div
                            class="bg-gray-100 p-2 rounded text-gray-600 group-hover:bg-unmerBlue group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800 text-sm group-hover:text-unmerBlue">Pengaturan Profil
                            </h4>
                            <p class="text-xs text-gray-500">Perbarui data diri dan kata sandi</p>
                        </div>
                    </a>

                    <a href="#"
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 transition-colors border border-transparent hover:border-blue-100 group">
                        <div
                            class="bg-gray-100 p-2 rounded text-gray-600 group-hover:bg-unmerBlue group-hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800 text-sm group-hover:text-unmerBlue">Basis Pengetahuan
                            </h4>
                            <p class="text-xs text-gray-500">Cari solusi mandiri dari panduan kami</p>
                        </div>
                    </a>
                </div>

                <div class="mx-4 mb-4 mt-2 p-4 bg-blue-50 rounded-lg border border-blue-100">
                    <h4 class="font-bold text-sm text-unmerDark mb-1 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Butuh Bantuan Cepat?
                    </h4>
                    <p class="text-xs text-gray-600 mb-2">Hubungi helpdesk PUSIM melalui WhatsApp untuk respon instan.
                    </p>
                    <a href="https://wa.me/6281234567890"
                        class="block w-full text-center bg-green-500 hover:bg-green-600 text-white font-bold text-xs py-2 rounded transition-colors shadow-sm">
                        Chat Helpdesk (WA)
                    </a>
                </div>
            </div>
        </div>
        <!-- Modal Form Buat Tiket Baru -->
        <div id="ticketModal" class="fixed inset-0 z-[100] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on modal state. -->
            <div class="fixed inset-0 bg-gray-800 bg-opacity-75 transition-opacity backdrop-blur-sm" onclick="closeModal()"></div>

            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <!-- Modal panel -->
                <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-gray-100 z-10">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4 relative">
                        <!-- Close button -->
                        <button onclick="closeModal()" type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 hover:bg-gray-100 p-1 rounded-full transition-colors focus:outline-none">
                            <span class="sr-only">Tutup</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-unmerBlue" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">
                                <h3 class="text-xl font-bold leading-6 text-gray-900" id="modal-title">Buat Tiket Layanan Baru</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Silakan isi formulir di bawah ini untuk mengajukan permohonan layanan atau melaporkan kendala ke PUSIM.</p>
                                </div>
                                
                                <form id="ticketForm" class="mt-5 space-y-4" action="#" method="POST" onsubmit="submitTicket(event)">
                                    @csrf
                                    <div>
                                        <label for="judul" class="block text-sm font-medium text-gray-700 text-left">Judul Kendala / Permohonan</label>
                                        <input type="text" name="judul" id="judul" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-2 border" placeholder="Misal: Reset Password Siakad">
                                    </div>
                                    
                                    <div>
                                        <label for="kategori" class="block text-sm font-medium text-gray-700 text-left">Kategori Layanan</label>
                                        <select id="kategori" name="kategori" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-2.5 border bg-white">
                                            <option value="" disabled selected>Pilih kategori...</option>
                                            <option value="jaringan">Aduan Jaringan (WiFi/LAN)</option>
                                            <option value="akun">Pembuatan / Masalah Akun Email Mahasiswa</option>
                                            <option value="siakad">Sistem Akademik (Siakad)</option>
                                            <option value="laboratorium">Peminjaman Laboratorium Komputer</option>
                                            <option value="lainnya">Lainnya...</option>
                                        </select>
                                    </div>
                                    
                                    <div>
                                        <label for="deskripsi" class="block text-sm font-medium text-gray-700 text-left">Deskripsi Lengkap</label>
                                        <textarea id="deskripsi" name="deskripsi" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-2 border" placeholder="Jelaskan secara detail kendala atau layanan yang Anda butuhkan..."></textarea>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 text-left">Lampiran (Opsional)</label>
                                        <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6 hover:bg-gray-50 transition-colors">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-10 w-10 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600 justify-center">
                                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-unmerBlue focus-within:outline-none focus-within:ring-2 focus-within:ring-unmerBlue focus-within:ring-offset-2 hover:text-unmerDark">
                                                        <span>Upload a file</span>
                                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">PNG, JPG, PDF up to 5MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" onclick="submitFormTicket()" class="inline-flex w-full justify-center rounded-md border border-transparent bg-unmerBlue px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-unmerDark focus:outline-none focus:ring-2 focus:ring-unmerBlue focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm transition-colors">
                            Kirim Tiket
                        </button>
                        <button type="button" onclick="closeModal()" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-unmerBlue focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm transition-colors">
                            Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function openModal() {
            document.getElementById('ticketModal').classList.remove('hidden');
            setTimeout(() => {
                const backdrop = document.getElementById('ticketModal').querySelector('.bg-gray-800');
                if(backdrop) backdrop.classList.add('opacity-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('ticketModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function submitFormTicket() {
            const form = document.getElementById('ticketForm');
            if (form.checkValidity()) {
                alert('Tiket berhasil dikirim! Tim PUSIM akan segera memproses laporan Anda.');
                form.reset();
                closeModal();
            } else {
                form.reportValidity();
            }
        }
        
        function submitTicket(e) {
            e.preventDefault();
            submitFormTicket();
        }
    </script>

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