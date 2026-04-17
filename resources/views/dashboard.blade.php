<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PUSIM Universitas Merdeka Malang</title>

    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        unmerBlue: '#1c5e82',
                        unmerDark: '#0f3d59',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                        'fade-in': 'fadeIn 0.8s ease-out forwards'
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .glass-nav { 
            background: rgba(255, 255, 255, 0.9); 
            backdrop-filter: blur(12px); 
            border-bottom: 1px solid rgba(0, 0, 0, 0.05); 
        }
        .glass-panel { 
            background: rgba(255, 255, 255, 0.95); 
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.05);
        }
        .btn-elegant { 
            background: linear-gradient(135deg, #1c5e82 0%, #0f3d59 100%); 
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); 
        }
        .btn-elegant:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 10px 20px -5px rgba(28,94,130,0.3); 
        }
        .animate-delay-1 { animation-delay: 0.1s; }
        .animate-delay-2 { animation-delay: 0.2s; }
        .animate-delay-3 { animation-delay: 0.3s; }
    </style>
</head>

<body class="bg-[#f8fafc] text-gray-800 font-sans antialiased flex flex-col min-h-screen selection:bg-unmerBlue selection:text-white relative">
    
    <!-- Decorative Background -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-blue-100/30 rounded-full blur-3xl"></div>
        <div class="absolute top-[20%] -right-[5%] w-[30%] h-[50%] bg-indigo-50/40 rounded-full blur-3xl"></div>
    </div>

    <!-- Header/Navbar -->
    <header class="glass-nav sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4 flex-1">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo PUSIM" class="h-11 w-auto rounded-md shadow-sm">
                <h1 class="font-bold text-sm md:text-base tracking-widest text-gray-900 uppercase hidden md:block border-l-2 border-unmerBlue/30 pl-4 py-1">
                    Universitas Merdeka Malang
                </h1>
            </div>

            <nav class="hidden lg:flex items-center justify-center space-x-8 text-sm font-semibold tracking-wide text-gray-500 flex-1">
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
            </nav>

            <div class="flex flex-1 justify-end items-center gap-4">
                @auth
                    <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-full shadow-sm border border-gray-100/80">
                        <div class="w-8 h-8 rounded-full bg-unmerBlue/10 text-unmerBlue flex items-center justify-center font-bold text-sm">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <span class="text-sm text-gray-700 font-medium hidden sm:block">{{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="inline ml-2 border-l border-gray-200 pl-3">
                            @csrf
                            <button type="submit" class="font-medium text-gray-500 hover:text-red-500 text-sm transition-colors flex items-center gap-1.5 px-1 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="hidden md:inline">Logout</span>
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="text-sm font-bold text-white btn-elegant px-7 py-2.5 rounded-full">Login Portal</a>
                @endauth
            </div>

            <button class="lg:hidden p-2 text-gray-600 ml-4 rounded-md hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-6 py-10 max-w-7xl relative z-10 animate-fade-in">

        @if (session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl relative flex items-center gap-3 shadow-sm animate-fade-in-up" role="alert">
                <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="block sm:inline font-medium text-sm">{{ session('success') }}</span>
                <button type="button" class="absolute top-1/2 -translate-y-1/2 right-4 text-green-500 hover:text-green-700 p-1 rounded-full hover:bg-green-100 transition-colors" onclick="this.parentElement.style.display='none'">
                    <svg class="fill-current h-5 w-5" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </button>
            </div>
        @endif

        <!-- Welcome Banner -->
        <div class="bg-gradient-to-br from-[#1c5e82] via-[#164a66] to-[#0f3d59] rounded-[2rem] shadow-[0_20px_40px_-15px_rgba(28,94,130,0.4)] p-8 md:p-12 mb-10 text-white relative overflow-hidden animate-fade-in-up">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
            <div class="relative z-10 w-full md:w-2/3">
                <span class="px-3 py-1 bg-white/10 border border-white/20 rounded-full text-xs font-semibold tracking-wider uppercase mb-5 inline-block backdrop-blur-sm">Akses Utama</span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-tight tracking-tight">Selamat Datang, {{ Auth::user()->name ?? 'Pengguna' }} 👋</h2>
                <p class="text-blue-100/90 text-lg md:text-xl font-light mb-8 max-w-xl leading-relaxed">Kelola layanan akademik dan dapatkan bantuan teknis PUSIM Unmer Malang dengan mudah.</p>
                <div class="flex flex-wrap gap-4">
                    <button onclick="openModal()" class="bg-white text-unmerDark px-6 py-3 rounded-xl font-semibold shadow-lg hover:bg-gray-50 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Ajukan Layanan
                    </button>
                    <a href="{{ url('/dashboard/basis-pengetahuan') }}" class="bg-white/10 hover:bg-white/20 border border-white/30 backdrop-blur-md text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        Eksplor Panduan
                    </a>
                </div>
            </div>
            
            <div class="absolute right-0 top-0 h-full w-1/3 hidden lg:flex items-center justify-center opacity-20">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-[300px] h-[300px] transform rotate-12">
                    <path fill="#ffffff" d="M48,-62.8C62.4,-51.7,74.5,-38.3,80.7,-22.4C86.9,-6.5,87.1,12,79.5,27.5C71.9,43.1,56.5,55.8,40.6,63.1C24.7,70.5,8.2,72.6,-8,71.1C-24.2,69.5,-40.1,64.2,-52.1,53.2C-64,42.3,-71.9,25.7,-74.6,8.6C-77.4,-8.6,-74.9,-26.4,-65,-40.5C-55.2,-54.7,-38,-65.3,-22.1,-70.6C-6.2,-75.8,8.2,-75.7,21.5,-73.2C34.8,-70.8,47,-66.1,48,-62.8Z" transform="translate(100 100)" />
                </svg>
            </div>
        </div>

        <!-- Dashboard Widgets / Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 animate-fade-in-up animate-delay-1">
            <!-- Card 1 -->
            <div class="glass-panel rounded-2xl p-6 hover:-translate-y-1 transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-blue-100/50 text-blue-700 rounded-lg tracking-wide">+2 Hari Ini</span>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 tracking-tight">{{ $totalLayanan }}</h3>
                <p class="text-gray-500 text-sm mt-1">Total Layanan Diajukan</p>
            </div>

            <!-- Card 2 -->
            <div class="glass-panel rounded-2xl p-6 hover:-translate-y-1 transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-orange-100/50 text-orange-700 rounded-lg tracking-wide">Dalam Proses</span>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 tracking-tight">{{ $layananMenunggu }}</h3>
                <p class="text-gray-500 text-sm mt-1">Layanan Menunggu</p>
            </div>

            <!-- Card 3 -->
            <div class="glass-panel rounded-2xl p-6 hover:-translate-y-1 transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-emerald-100/50 text-emerald-700 rounded-lg tracking-wide">Bulan Ini</span>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 tracking-tight">{{ $layananSelesai }}</h3>
                <p class="text-gray-500 text-sm mt-1">Layanan Selesai</p>
            </div>

            <!-- Card 4 -->
            <div class="glass-panel rounded-2xl p-6 hover:-translate-y-1 transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-500 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold px-2.5 py-1 bg-red-100 text-red-600 rounded-lg tracking-wide">Penting</span>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 tracking-tight">{{ $notifikasiBaru }}</h3>
                <p class="text-gray-500 text-sm mt-1">Notifikasi Baru</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10 animate-fade-in-up animate-delay-2">
            <!-- Recent Activity Table -->
            <div class="lg:col-span-2 glass-panel rounded-[1.5rem] overflow-hidden flex flex-col">
                <div class="px-7 py-5 border-b border-gray-100 flex justify-between items-center bg-white/50">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Aktivitas Terkini</h3>
                        <p class="text-xs text-gray-500 mt-0.5">Riwayat pengajuan layanan terakhir Anda</p>
                    </div>
                    <a href="#" class="text-sm font-semibold text-unmerBlue hover:text-unmerDark transition-colors bg-blue-50 hover:bg-blue-100 px-4 py-2 rounded-lg">Lihat Semua</a>
                </div>
                <div class="p-0 overflow-x-auto flex-grow">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50 text-xs text-gray-500 tracking-wider">
                                <th class="px-7 py-4 font-semibold font-medium">Informasi Layanan</th>
                                <th class="px-7 py-4 font-semibold font-medium">Tanggal</th>
                                <th class="px-7 py-4 font-semibold font-medium">Status</th>
                                <th class="px-7 py-4 font-semibold text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-50">
                            @forelse($tickets as $ticket)
                                <tr class="hover:bg-blue-50/30 transition-colors group">
                                    <td class="px-7 py-4">
                                        <div class="font-semibold text-gray-900 group-hover:text-unmerBlue transition-colors">{{ $ticket->judul }}</div>
                                        <div class="text-gray-400 text-xs mt-0.5 font-mono">#{{ $ticket->ticket_number }}</div>
                                    </td>
                                    <td class="px-7 py-4 text-gray-600 text-sm">{{ $ticket->created_at->format('d M Y') }}</td>
                                    <td class="px-7 py-4">
                                        @if($ticket->status == 'menunggu')
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-[11px] font-bold bg-orange-50 text-orange-600 border border-orange-100">
                                                <span class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></span> MENUNGGU
                                            </span>
                                        @elseif($ticket->status == 'diproses')
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-[11px] font-bold bg-blue-50 text-blue-600 border border-blue-100">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> DIPROSES
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-[11px] font-bold bg-emerald-50 text-emerald-600 border border-emerald-100">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> SELESAI
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-7 py-4 text-right">
                                        <button class="text-gray-400 hover:text-unmerBlue p-2 hover:bg-blue-50 rounded-lg transition-all">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="p-8 text-center">
                                        <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-100 mb-3 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" /></svg>
                                        </div>
                                        <p class="text-gray-500 text-sm">Belum ada aktivitas tiket layanan.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Quick Access Menu -->
            <div class="glass-panel rounded-[1.5rem] overflow-hidden flex flex-col">
                <div class="px-6 py-5 border-b border-gray-100 bg-white/50">
                    <h3 class="text-lg font-bold text-gray-900">Akses Cepat</h3>
                </div>
                <div class="p-5 space-y-2 flex-grow">
                    <a href="#" onclick="openModal(); return false;" class="flex items-center p-3.5 rounded-xl hover:bg-blue-50/50 transition-all duration-300 border border-transparent hover:border-blue-100 group shadow-sm hover:shadow-md bg-white">
                        <div class="w-10 h-10 bg-gradient-to-br from-unmerBlue to-unmerDark rounded-lg text-white flex items-center justify-center shadow-inner group-hover:scale-105 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 text-sm group-hover:text-unmerBlue transition-colors">Buat Tiket Baru</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Ajukan permohonan / kendala</p>
                        </div>
                    </a>

                    <a href="{{ route('profile.edit') }}" class="flex items-center p-3.5 rounded-xl hover:bg-gray-50 transition-all duration-300 border border-gray-100 hover:border-gray-200 group shadow-sm hover:shadow bg-white">
                        <div class="w-10 h-10 bg-gray-100 rounded-lg text-gray-500 flex items-center justify-center group-hover:bg-gray-200 group-hover:text-gray-700 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 text-sm transition-colors">Pengaturan Profil</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Perbarui data diri kamu</p>
                        </div>
                    </a>

                    <a href="{{ url('/dashboard/basis-pengetahuan') }}" class="flex items-center p-3.5 rounded-xl hover:bg-gray-50 transition-all duration-300 border border-gray-100 hover:border-gray-200 group shadow-sm hover:shadow bg-white">
                        <div class="w-10 h-10 bg-gray-100 rounded-lg text-gray-500 flex items-center justify-center group-hover:bg-gray-200 group-hover:text-gray-700 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 text-sm transition-colors">Basis Pengetahuan</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Cari solusi mandiri di sini</p>
                        </div>
                    </a>
                </div>

                <div class="p-5 mt-auto bg-gradient-to-br from-emerald-50 flex items-center justify-between border-t border-emerald-100">
                    <div>
                        <h4 class="font-bold text-sm text-emerald-800 flex items-center gap-1.5">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            Live Support (WA)
                        </h4>
                        <p class="text-[11px] text-emerald-600 mt-0.5">Butuh bantuan darurat?</p>
                    </div>
                    <a href="https://wa.me/6281234567890" target="_blank" class="px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white font-medium text-xs rounded-lg transition-transform hover:scale-105 shadow-sm shadow-emerald-500/30">
                        Chat Sekarang
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal Form Buat Tiket -->
    <div id="ticketModal" class="fixed inset-0 z-[999] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-900/60 transition-opacity backdrop-blur-sm" onclick="closeModal()"></div>
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-[2rem] bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-gray-100 opacity-0 translate-y-4 duration-300" id="modalDialog">
                    <div class="bg-white px-6 pb-6 pt-8 sm:p-8 sm:pb-6 relative relative overflow-hidden">
                        <!-- Decorative top gradient -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-unmerBlue to-blue-300"></div>
                        
                        <button onclick="closeModal()" type="button" class="absolute top-6 right-6 text-gray-400 hover:text-gray-600 hover:bg-gray-100 p-2 rounded-full transition-colors focus:outline-none">
                            <span class="sr-only">Tutup</span>
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl bg-blue-50 sm:mx-0">
                                <svg class="h-6 w-6 text-unmerBlue" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="mt-4 text-center sm:ml-5 sm:mt-1 sm:text-left w-full">
                                <h3 class="text-xl font-bold leading-6 text-gray-900 tracking-tight" id="modal-title">Buat Tiket Baru</h3>
                                <p class="text-sm text-gray-500 mt-2 font-medium">Beri tahu kami kendala atau kebutuhan layanan Anda.</p>

                                <form id="ticketForm" class="mt-6 space-y-5" action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div>
                                        <label for="judul" class="block text-sm font-semibold text-gray-700 text-left mb-1.5">Judul Topik</label>
                                        <input type="text" name="judul" id="judul" required class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-3 bg-gray-50 focus:bg-white transition-colors" placeholder="Misal: Lupa Password E-learning">
                                    </div>

                                    <div>
                                        <label for="kategori" class="block text-sm font-semibold text-gray-700 text-left mb-1.5">Kategori Layanan</label>
                                        <select id="kategori" name="kategori" required class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-3 bg-gray-50 focus:bg-white transition-colors">
                                            <option value="" disabled selected>Pilih kategori terkait...</option>
                                            <option value="jaringan">Aduan Jaringan (WiFi/LAN)</option>
                                            <option value="akun">Akun Email Mahasiswa</option>
                                            <option value="siakad">Sistem Akademik (Siakad)</option>
                                            <option value="laboratorium">Laboratorium Komputer</option>
                                            <option value="lainnya">Lain-lain</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="deskripsi" class="block text-sm font-semibold text-gray-700 text-left mb-1.5">Rincian Deskripsi</label>
                                        <textarea id="deskripsi" name="deskripsi" rows="3" required class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-3 bg-gray-50 focus:bg-white transition-colors" placeholder="Jelaskan secara detail keluhan Anda..."></textarea>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 text-left mb-1.5">Lampirkan Bukti (Opsional)</label>
                                        <div class="flex justify-center rounded-xl border-2 border-dashed border-gray-300 px-6 py-6 hover:bg-gray-50 hover:border-unmerBlue/50 transition-colors">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-8 w-8 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div class="flex text-sm text-gray-600 justify-center mt-2">
                                                    <label for="file-upload" class="relative cursor-pointer rounded-md bg-transparent font-semibold text-unmerBlue hover:text-unmerDark">
                                                        <span>Pilih File</span>
                                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">atau drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-400">PNG, JPG up to 5MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-6 py-5 sm:flex sm:flex-row-reverse rounded-b-[2rem]">
                        <button type="submit" form="ticketForm" class="btn-elegant w-full inline-flex justify-center rounded-xl border border-transparent px-6 py-2.5 text-sm font-semibold text-white shadow-sm sm:ml-3 sm:w-auto">
                            Kirim Tiket
                        </button>
                        <button type="button" onclick="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-xl border border-gray-200 bg-white px-6 py-2.5 text-sm font-semibold text-gray-700 shadow-sm hover:bg-gray-50 sm:mt-0 sm:w-auto transition-colors">
                            Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <script>
        function openModal() {
            const modal = document.getElementById('ticketModal');
            const dialog = document.getElementById('modalDialog');
            modal.classList.remove('hidden');
            setTimeout(() => {
                const backdrop = modal.querySelector('.bg-gray-900\\/60');
                if (backdrop) backdrop.classList.add('opacity-100');
                dialog.classList.remove('opacity-0', 'translate-y-4');
                dialog.classList.add('opacity-100', 'translate-y-0');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('ticketModal');
            const dialog = document.getElementById('modalDialog');
            dialog.classList.remove('opacity-100', 'translate-y-0');
            dialog.classList.add('opacity-0', 'translate-y-4');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }
    </script>

    <!-- Footer -->
    <footer class="bg-white/80 backdrop-blur-md py-8 border-t border-gray-200 mt-auto relative z-10">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
            <div class="flex items-center space-x-3 mb-4 md:mb-0">
                <div class="w-8 h-8 rounded-full bg-unmerBlue flex items-center justify-center text-white font-bold text-xs shadow-sm">P</div>
                <span class="text-gray-900 font-bold tracking-widest text-sm">PUSIM UNMER</span>
            </div>
            <p class="text-gray-500 text-xs font-semibold tracking-wide">
                &copy; {{ date('Y') }} Universitas Merdeka Malang. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>