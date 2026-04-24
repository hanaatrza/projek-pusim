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
        .glass-panel {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.05);
        }
        .btn-elegant {
            background: linear-gradient(135deg, #1c5e82 0%, #0f3d59 100%);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .btn-elegant:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(28, 94, 130, 0.3);
        }
        /* Custom scrollbar for main content */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(156, 163, 175, 0.5);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(107, 114, 128, 0.8);
        }
    </style>
</head>

<body class="bg-[#f4f7f9] text-gray-800 font-sans antialiased flex h-screen overflow-hidden selection:bg-unmerBlue selection:text-white">

    <!-- Decorative Background Shapes -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-blue-100/30 rounded-full blur-3xl"></div>
        <div class="absolute top-[20%] -right-[5%] w-[30%] h-[50%] bg-indigo-50/20 rounded-full blur-3xl"></div>
    </div>

    <!-- Sidebar (Desktop) -->
    <aside class="w-72 bg-white/95 backdrop-blur-md border-r border-gray-200/50 flex-col justify-between hidden lg:flex h-full z-50 shadow-sm shrink-0 relative">
        <!-- Logo -->
        <div class="px-7 py-6 border-b border-gray-100/80 flex items-center gap-4">
            <img src="{{ asset('images/logo(1).png') }}" alt="Logo PUSIM" class="h-10 w-auto rounded-lg shadow-sm">
            <div class="flex flex-col">
                <span class="font-bold text-gray-900 tracking-wide text-sm leading-tight">PUSIM</span>
                <span class="text-[10px] text-gray-500 font-semibold tracking-widest uppercase">Unmer Malang</span>
            </div>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="flex-1 px-4 py-8 space-y-2 overflow-y-auto custom-scrollbar">
            <p class="px-3 text-[11px] font-bold text-gray-400 uppercase tracking-widest mb-4">Navigasi Utama</p>
            
            <a href="{{ url('/') }}" class="flex items-center gap-3 px-3.5 py-3 text-gray-600 hover:text-unmerBlue hover:bg-blue-50/50 rounded-xl transition-all font-medium group">
                <div class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 group-hover:bg-blue-100 group-hover:text-unmerBlue flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </div>
                Beranda
            </a>
            
            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-3.5 py-3 text-unmerBlue bg-blue-50/80 rounded-xl transition-all font-bold shadow-sm border border-blue-100/50">
                <div class="w-8 h-8 rounded-lg bg-unmerBlue text-white flex items-center justify-center shadow-inner">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                </div>
                Dashboard
            </a>
            
            <a href="{{ url('/profil') }}" class="flex items-center gap-3 px-3.5 py-3 text-gray-600 hover:text-unmerBlue hover:bg-blue-50/50 rounded-xl transition-all font-medium group">
                <div class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 group-hover:bg-blue-100 group-hover:text-unmerBlue flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                Profil
            </a>
            
            <a href="{{ url('/layanan') }}" class="flex items-center gap-3 px-3.5 py-3 text-gray-600 hover:text-unmerBlue hover:bg-blue-50/50 rounded-xl transition-all font-medium group">
                <div class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 group-hover:bg-blue-100 group-hover:text-unmerBlue flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                Layanan
            </a>

            <a href="{{ url('/dashboard/basis-pengetahuan') }}" class="flex items-center gap-3 px-3.5 py-3 text-gray-600 hover:text-unmerBlue hover:bg-blue-50/50 rounded-xl transition-all font-medium group">
                <div class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 group-hover:bg-blue-100 group-hover:text-unmerBlue flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                Panduan
            </a>
            
            <a href="{{ url('/contact') }}" class="flex items-center gap-3 px-3.5 py-3 text-gray-600 hover:text-unmerBlue hover:bg-blue-50/50 rounded-xl transition-all font-medium group">
                <div class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 group-hover:bg-blue-100 group-hover:text-unmerBlue flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                Contact
            </a>
        </nav>

        <!-- Sidebar Footer Info -->
        <div class="p-4 border-t border-gray-100 bg-gray-50/30 text-center">
            <p class="text-[10px] text-gray-400 font-medium">Sistem Informasi PUSIM<br>&copy; {{ date('Y') }} Unmer Malang</p>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden relative z-10">
        
        <!-- Top Navbar -->
        <header class="bg-white/80 backdrop-blur-md sticky top-0 z-40 border-b border-gray-200/60 px-6 py-4 flex items-center justify-between shadow-sm shrink-0">
            <!-- Left Side -->
            <div class="flex items-center gap-4">
                <button class="lg:hidden p-2 text-gray-600 rounded-lg hover:bg-gray-100 transition-colors focus:outline-none focus:ring-2 focus:ring-unmerBlue/50">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
                <img src="{{ asset('images/logo(1).png') }}" alt="Logo" class="h-8 w-auto lg:hidden">
                
                <div class="hidden lg:flex items-center gap-3">
                    <div class="w-1.5 h-6 bg-unmerBlue rounded-full"></div>
                    <h2 class="text-xl font-bold tracking-tight text-gray-900">Dashboard Area</h2>
                </div>
            </div>

            <!-- Right Side (Auth & Date) -->
            <div class="flex items-center gap-5">
                <div class="hidden md:flex items-center gap-2 bg-gray-50 px-4 py-2 rounded-lg border border-gray-100 text-gray-500 shadow-sm">
                    <svg class="w-4 h-4 text-unmerBlue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="text-[11px] font-bold tracking-wider uppercase">{{ now()->format('l, d M Y') }}</span>
                </div>
                
                @auth
                <div class="flex items-center gap-3 bg-white pl-3 pr-2 py-2 rounded-xl shadow-sm border border-gray-200 transition-all hover:shadow-md">
                    <div class="w-8 h-8 rounded-lg bg-unmerBlue/10 text-unmerBlue flex items-center justify-center font-bold text-sm shadow-sm">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <div class="hidden sm:block text-left mr-2">
                        <p class="text-xs font-bold text-gray-800 leading-tight truncate max-w-[120px]">{{ Auth::user()->name }}</p>
                    </div>
                    
                    <div class="h-6 w-px bg-gray-200 hidden sm:block"></div>
                    
                    <form action="{{ route('logout') }}" method="POST" class="inline-flex m-0 p-0">
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-red-500 p-1.5 rounded-lg hover:bg-red-50 transition-colors" title="Logout">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                </div>
                @else
                <a href="{{ url('/login') }}" class="text-sm font-bold text-white btn-elegant px-5 py-2.5 rounded-xl shadow-sm">
                    Login Portal
                </a>
                @endauth
            </div>
        </header>

        <!-- Scrollable Main Content -->
        <main class="flex-1 overflow-y-auto w-full custom-scrollbar pt-6 pb-12 px-4 md:px-8">
            <div class="max-w-[1400px] mx-auto space-y-8">

                @if (session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl relative flex items-center gap-3 shadow-sm animate-fade-in-up" role="alert">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="block sm:inline font-medium text-sm">{{ session('success') }}</span>
                    <button type="button" class="absolute top-1/2 -translate-y-1/2 right-4 text-green-500 hover:text-green-700 p-1 rounded-full hover:bg-green-100 transition-colors" onclick="this.parentElement.style.display='none'">
                        <svg class="fill-current h-5 w-5" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" /></svg>
                    </button>
                </div>
                @endif

                <!-- Welcome Banner -->
                <div class="bg-gradient-to-br from-[#1c5e82] via-[#164a66] to-[#0f3d59] rounded-3xl shadow-[0_20px_40px_-15px_rgba(28,94,130,0.4)] p-8 md:p-12 text-white relative overflow-hidden animate-fade-in-up">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 mix-blend-overlay"></div>
                    <div class="relative z-10 w-full lg:w-2/3">
                        <span class="px-3 py-1 bg-white/10 border border-white/20 rounded-lg text-[10px] font-bold tracking-wider uppercase mb-5 inline-block backdrop-blur-sm">Akses Utama</span>
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-tight tracking-tight">Selamat Datang,<br>{{ Auth::user()->name ?? 'Pengguna' }} 👋</h2>
                        <p class="text-blue-100/90 text-lg font-light mb-8 max-w-xl leading-relaxed">Kelola layanan akademik dan dapatkan bantuan teknis PUSIM Unmer Malang dengan mudah dan cepat.</p>
                        
                        <div class="flex flex-wrap gap-4">
                            <button onclick="openModal()" class="bg-white text-unmerDark px-6 py-3.5 rounded-xl font-bold shadow-lg hover:bg-blue-50 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                Ajukan Layanan
                            </button>
                            <a href="{{ url('/dashboard/basis-pengetahuan') }}" class="bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-md text-white px-6 py-3.5 rounded-xl font-bold transition-all duration-300 flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                Eksplor Panduan
                            </a>
                        </div>
                    </div>

                    <!-- Decorative elements -->
                    <div class="absolute -right-10 -bottom-10 h-[400px] w-[400px] hidden lg:flex items-center justify-center opacity-20 transform rotate-12">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                            <path fill="#ffffff" d="M48,-62.8C62.4,-51.7,74.5,-38.3,80.7,-22.4C86.9,-6.5,87.1,12,79.5,27.5C71.9,43.1,56.5,55.8,40.6,63.1C24.7,70.5,8.2,72.6,-8,71.1C-24.2,69.5,-40.1,64.2,-52.1,53.2C-64,42.3,-71.9,25.7,-74.6,8.6C-77.4,-8.6,-74.9,-26.4,-65,-40.5C-55.2,-54.7,-38,-65.3,-22.1,-70.6C-6.2,-75.8,8.2,-75.7,21.5,-73.2C34.8,-70.8,47,-66.1,48,-62.8Z" transform="translate(100 100)" />
                        </svg>
                    </div>
                </div>

                <!-- Dashboard Widgets / Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6 animate-fade-in-up" style="animation-delay: 0.1s;">
                    <!-- Card 1 -->
                    <a href="{{ route('layanan.index', ['filter' => 'semua']) }}" class="block glass-panel bg-white rounded-3xl p-6 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-bold px-2.5 py-1 bg-blue-50 text-blue-600 rounded-lg tracking-wide border border-blue-100">+2 Hari Ini</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-gray-900 tracking-tight">{{ $totalLayanan }}</h3>
                        <p class="text-gray-500 text-sm mt-1 font-medium">Total Layanan Diajukan</p>
                    </a>

                    <!-- Card 2 -->
                    <a href="{{ route('layanan.index', ['filter' => 'menunggu']) }}" class="block glass-panel bg-white rounded-3xl p-6 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-orange-50 text-orange-500 flex items-center justify-center group-hover:scale-110 transition-transform shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-bold px-2.5 py-1 bg-orange-50 text-orange-600 rounded-lg tracking-wide border border-orange-100">Dalam Proses</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-gray-900 tracking-tight">{{ $layananMenunggu }}</h3>
                        <p class="text-gray-500 text-sm mt-1 font-medium">Layanan Menunggu</p>
                    </a>

                    <!-- Card 3 -->
                    <a href="{{ route('layanan.index', ['filter' => 'selesai']) }}" class="block glass-panel bg-white rounded-3xl p-6 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-500 flex items-center justify-center group-hover:scale-110 transition-transform shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-bold px-2.5 py-1 bg-emerald-50 text-emerald-600 rounded-lg tracking-wide border border-emerald-100">Bulan Ini</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-gray-900 tracking-tight">{{ $layananSelesai }}</h3>
                        <p class="text-gray-500 text-sm mt-1 font-medium">Layanan Selesai</p>
                    </a>

                    <!-- Card 4 -->
                    <a href="{{ route('layanan.index', ['filter' => 'notifikasi']) }}" class="block glass-panel bg-white rounded-3xl p-6 hover:-translate-y-1 hover:shadow-xl transition-all duration-300 group">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-500 flex items-center justify-center group-hover:scale-110 transition-transform shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </div>
                            <span class="text-[10px] font-bold px-2.5 py-1 bg-red-50 text-red-600 rounded-lg tracking-wide border border-red-100">Penting</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-gray-900 tracking-tight">{{ $notifikasiBaru }}</h3>
                        <p class="text-gray-500 text-sm mt-1 font-medium">Notifikasi Baru</p>
                    </a>
                </div>

                <!-- Main Data Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 animate-fade-in-up" style="animation-delay: 0.2s;">
                    
                    <!-- Recent Activity Table Component -->
                    <div class="lg:col-span-2 glass-panel bg-white rounded-[2rem] overflow-hidden flex flex-col shadow-sm">
                        <div class="px-7 py-6 border-b border-gray-100 bg-white/70 flex justify-between items-center z-10 sticky top-0">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 tracking-tight">Aktivitas Terkini</h3>
                                <p class="text-xs text-gray-500 mt-1 font-medium">Riwayat Pengajuan Layanan Terakhir Anda</p>
                            </div>
                            <a href="#" class="text-xs font-bold text-unmerBlue hover:text-white transition-colors bg-blue-50 hover:bg-unmerBlue px-4 py-2 rounded-lg border border-blue-100 shadow-sm">
                                Lihat Semua
                            </a>
                        </div>
                        
                        <div class="overflow-x-auto flex-grow custom-scrollbar">
                            <table class="w-full text-left border-collapse min-w-[600px]">
                                <thead>
                                    <tr class="bg-gray-50/80 text-[11px] text-gray-500 tracking-wider uppercase border-b border-gray-100">
                                        <th class="px-7 py-4 font-bold">Informasi Layanan</th>
                                        <th class="px-7 py-4 font-bold">Tanggal</th>
                                        <th class="px-7 py-4 font-bold">Status</th>
                                        <th class="px-7 py-4 font-bold text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-50">
                                    @forelse($tickets as $ticket)
                                        <tr class="hover:bg-blue-50/40 transition-colors group">
                                            <td class="px-7 py-4">
                                                <div class="font-bold text-gray-900 group-hover:text-unmerBlue transition-colors">{{ $ticket->judul }}</div>
                                                <div class="text-gray-400 text-xs mt-1 font-mono tracking-wide">#{{ $ticket->ticket_number }}</div>
                                            </td>
                                            <td class="px-7 py-4">
                                                <div class="text-gray-600 font-medium text-sm">{{ $ticket->created_at->format('d M Y') }}</div>
                                                <div class="text-gray-400 text-xs mt-0.5">{{ $ticket->created_at->format('H:i') }}</div>
                                            </td>
                                            <td class="px-7 py-4">
                                                @if($ticket->status == 'menunggu')
                                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[10px] font-bold bg-orange-50 text-orange-600 border border-orange-100 uppercase tracking-wider">
                                                        <span class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></span>
                                                        Menunggu
                                                    </span>
                                                @elseif($ticket->status == 'diproses')
                                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[10px] font-bold bg-blue-50 text-blue-600 border border-blue-100 uppercase tracking-wider">
                                                        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                                        Diproses
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[10px] font-bold bg-emerald-50 text-emerald-600 border border-emerald-100 uppercase tracking-wider">
                                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                        Selesai
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-7 py-4 text-center">
                                                <button type="button" onclick="showTicketDetail(this)"
                                                    data-judul="{{ $ticket->judul }}" data-nomor="{{ $ticket->ticket_number }}"
                                                    data-kategori="{{ $ticket->kategori }}" data-status="{{ $ticket->status }}"
                                                    data-tanggal="{{ $ticket->created_at->format('d M Y, H:i') }}"
                                                    data-deskripsi="{{ $ticket->deskripsi }}"
                                                    class="inline-flex justify-center items-center text-gray-400 p-2 hover:bg-white hover:text-unmerBlue hover:shadow-sm border border-transparent hover:border-gray-200 rounded-xl transition-all"
                                                    title="Lihat Detail">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="p-12 text-center bg-gray-50/30">
                                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-3xl bg-white shadow-sm mb-4 text-gray-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                                    </svg>
                                                </div>
                                                <h4 class="text-gray-900 font-bold mb-1">Belum Ada Aktivitas</h4>
                                                <p class="text-gray-500 text-sm">Anda belum mengajukan tiket layanan apapun.</p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Layout Component: Quick Access Menu -->
                    <div class="glass-panel bg-white rounded-[2rem] overflow-hidden flex flex-col shadow-sm">
                        <div class="px-6 py-6 border-b border-gray-100 bg-white/70">
                            <h3 class="text-xl font-bold text-gray-900 tracking-tight">Akses Cepat</h3>
                        </div>
                        
                        <div class="p-5 space-y-3 flex-grow">
                            <!-- Menu 1 -->
                            <a href="#" onclick="openModal(); return false;" class="flex items-center p-3 sm:p-4 rounded-2xl bg-gray-50 hover:bg-blue-50/80 transition-all duration-300 border border-gray-100 hover:border-blue-200 group shadow-sm hover:shadow-md">
                                <div class="w-12 h-12 shrink-0 bg-white rounded-xl text-unmerBlue flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform border border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-gray-900 text-sm group-hover:text-unmerBlue transition-colors">Buat Tiket Baru</h4>
                                    <p class="text-[11px] text-gray-500 mt-1 leading-snug">Ajukan permohonan atau infokan kendala</p>
                                </div>
                            </a>

                            <!-- Menu 2 -->
                            <a href="{{ route('profile.edit') }}" class="flex items-center p-3 sm:p-4 rounded-2xl bg-gray-50 hover:bg-white transition-all duration-300 border border-gray-100 hover:border-gray-200 group shadow-sm hover:shadow">
                                <div class="w-12 h-12 shrink-0 bg-white rounded-xl text-gray-500 flex items-center justify-center shadow-sm group-hover:text-gray-800 transition-colors border border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-gray-900 text-sm transition-colors">Pengaturan Profil</h4>
                                    <p class="text-[11px] text-gray-500 mt-1 leading-snug">Perbarui data diri dan preferensi</p>
                                </div>
                            </a>

                            <!-- Menu 3 -->
                            <a href="{{ url('/dashboard/basis-pengetahuan') }}" class="flex items-center p-3 sm:p-4 rounded-2xl bg-gray-50 hover:bg-white transition-all duration-300 border border-gray-100 hover:border-gray-200 group shadow-sm hover:shadow">
                                <div class="w-12 h-12 shrink-0 bg-white rounded-xl text-gray-500 flex items-center justify-center shadow-sm group-hover:text-gray-800 transition-colors border border-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-bold text-gray-900 text-sm transition-colors">Basis Pengetahuan</h4>
                                    <p class="text-[11px] text-gray-500 mt-1 leading-snug">Telusuri solusi mandiri dan FAQ</p>
                                </div>
                            </a>
                        </div>

                        <!-- Live Support Widget -->
                        <div class="px-6 py-5 mt-auto bg-emerald-50/80 flex items-center justify-between border-t border-emerald-100/50">
                            <div>
                                <h4 class="font-bold text-sm text-emerald-800 flex items-center gap-2">
                                    <span class="relative flex h-2.5 w-2.5">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                                    </span>
                                    Live Support (WA)
                                </h4>
                                <p class="text-[10px] text-emerald-600 mt-1 font-medium">Bantuan darurat? Hubungi kami.</p>
                            </div>
                            <a href="https://wa.me/6281234567890" target="_blank" class="shrink-0 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-[11px] uppercase tracking-wider rounded-xl transition-all hover:scale-105 hover:shadow-lg hover:shadow-emerald-500/30">
                                Chat
                            </a>
                        </div>
                    </div>
                </div>

            </div> <!-- End of Max W 1400px Wrapper -->

            <!-- Main Footer -->
            <footer class="mt-12 text-center lg:text-left border-t border-gray-200/60 pt-6 pb-2 px-2 flex justify-between items-center text-gray-400">
                <span class="text-xs font-semibold tracking-wide">
                    &copy; {{ date('Y') }} Universitas Merdeka Malang.
                </span>
                <span class="text-xs font-medium hidden md:block">
                    Sistem Manajemen Layanan PUSIM V2.0
                </span>
            </footer>

        </main>
    </div> <!-- End of Main Flex Content Wrapper -->

    <!-- Modal Detail Tiket -->
    <div id="ticketDetailModal" class="fixed inset-0 z-[999] hidden overflow-y-auto" aria-labelledby="detail-modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity" onclick="closeDetailModal()"></div>
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-[2rem] bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-gray-100 opacity-0 translate-y-4 duration-300" id="detailModalDialog">
                <div class="bg-white px-6 pb-6 pt-8 sm:p-8 sm:pb-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-unmerBlue to-blue-300"></div>

                    <button onclick="closeDetailModal()" type="button" class="absolute top-6 right-6 text-gray-400 hover:text-gray-600 hover:bg-gray-100 p-2 rounded-full transition-colors focus:outline-none">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>

                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl bg-blue-50 sm:mx-0">
                            <svg class="h-6 w-6 text-unmerBlue" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        </div>
                        <div class="mt-4 text-center sm:ml-5 sm:mt-1 sm:text-left w-full">
                            <h3 class="text-xl font-bold leading-6 text-gray-900 tracking-tight" id="detail-judul">Detail Tiket</h3>
                            <p class="text-sm text-gray-500 mt-1 font-mono tracking-wide" id="detail-nomor"></p>

                            <div class="mt-8 space-y-5 text-sm text-gray-700">
                                <div>
                                    <span class="block font-bold text-gray-400 text-[10px] uppercase tracking-widest mb-2">Status Layanan</span>
                                    <div id="detail-status-container"></div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <span class="block font-bold text-gray-400 text-[10px] uppercase tracking-widest mb-2">Kategori</span>
                                        <p id="detail-kategori" class="font-bold text-gray-800 bg-gray-50 p-3 rounded-xl border border-gray-100 capitalize text-sm"></p>
                                    </div>
                                    <div>
                                        <span class="block font-bold text-gray-400 text-[10px] uppercase tracking-widest mb-2">Tanggal</span>
                                        <p id="detail-tanggal" class="font-bold text-gray-800 bg-gray-50 p-3 rounded-xl border border-gray-100 text-sm"></p>
                                    </div>
                                </div>
                                <div>
                                    <span class="block font-bold text-gray-400 text-[10px] uppercase tracking-widest mb-2">Deskripsi Kendala</span>
                                    <div id="detail-deskripsi" class="font-medium bg-gray-50 p-4 rounded-2xl border border-gray-100 whitespace-pre-wrap text-gray-700 text-sm leading-relaxed min-h-[100px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-5 sm:flex sm:flex-row-reverse rounded-b-[2rem] border-t border-gray-100">
                    <button type="button" onclick="closeDetailModal()" class="w-full inline-flex justify-center rounded-xl border border-transparent bg-unmerBlue px-6 py-3 text-sm font-bold text-white shadow-sm hover:bg-unmerDark sm:ml-3 sm:w-auto transition-colors">
                        Tutup Panel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Buat Tiket -->
    <div id="ticketModal" class="fixed inset-0 z-[999] hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity" onclick="closeModal()"></div>
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-[2rem] bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-gray-100 opacity-0 translate-y-4 duration-300" id="modalDialog">
                <div class="bg-white px-6 pb-6 pt-8 sm:p-8 sm:pb-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-unmerBlue to-blue-300"></div>

                    <button onclick="closeModal()" type="button" class="absolute top-6 right-6 text-gray-400 hover:text-gray-600 hover:bg-gray-100 p-2 rounded-full transition-colors focus:outline-none">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                    </button>

                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl bg-blue-50 sm:mx-0">
                            <svg class="h-6 w-6 text-unmerBlue" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                        </div>
                        <div class="mt-4 text-center sm:ml-5 sm:mt-1 sm:text-left w-full">
                            <h3 class="text-xl font-bold leading-6 text-gray-900 tracking-tight" id="modal-title">Buat Tiket Baru</h3>
                            <p class="text-sm text-gray-500 mt-2 font-medium">Beri tahu kami kendala atau kebutuhan layanan Anda.</p>

                            <form id="ticketForm" class="mt-6 space-y-5" action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="judul" class="block text-xs font-bold text-gray-700 text-left mb-2 uppercase tracking-wide">Judul Topik</label>
                                    <input type="text" name="judul" id="judul" required class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-3.5 bg-gray-50 focus:bg-white transition-colors" placeholder="Misal: Lupa Password E-learning">
                                </div>

                                <div>
                                    <label for="kategori" class="block text-xs font-bold text-gray-700 text-left mb-2 uppercase tracking-wide">Kategori Layanan</label>
                                    <select id="kategori" name="kategori" required class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-3.5 bg-gray-50 focus:bg-white transition-colors text-gray-700 font-medium">
                                        <option value="" disabled selected>-- Pilih Kategori --</option>
                                        <option value="jaringan">Aduan Jaringan (WiFi/LAN)</option>
                                        <option value="akun">Akun Email Mahasiswa</option>
                                        <option value="siakad">Sistem Akademik (Siakad)</option>
                                        <option value="laboratorium">Laboratorium Komputer</option>
                                        <option value="lainnya">Lain-lain</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="deskripsi" class="block text-xs font-bold text-gray-700 text-left mb-2 uppercase tracking-wide">Rincian Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" rows="4" required class="block w-full rounded-xl border-gray-200 shadow-sm focus:border-unmerBlue focus:ring-unmerBlue sm:text-sm p-3.5 bg-gray-50 focus:bg-white transition-colors resize-none" placeholder="Jelaskan secara detail keluhan Anda..."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-6 py-5 sm:flex sm:flex-row-reverse rounded-b-[2rem] border-t border-gray-100">
                    <button type="submit" form="ticketForm" class="btn-elegant w-full inline-flex justify-center rounded-xl border border-transparent px-8 py-3 text-sm font-bold text-white shadow-sm sm:ml-3 sm:w-auto">
                        Kirim Tiket
                    </button>
                    <button type="button" onclick="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-xl border border-gray-300 bg-white px-8 py-3 text-sm font-bold text-gray-700 shadow-sm hover:bg-gray-50 sm:mt-0 sm:w-auto transition-colors">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
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

        function showTicketDetail(button) {
            const judul = button.getAttribute('data-judul');
            const nomor = button.getAttribute('data-nomor');
            const kategori = button.getAttribute('data-kategori');
            const status = button.getAttribute('data-status');
            const tanggal = button.getAttribute('data-tanggal');
            const deskripsi = button.getAttribute('data-deskripsi');

            document.getElementById('detail-judul').textContent = judul;
            document.getElementById('detail-nomor').textContent = nomor;
            document.getElementById('detail-kategori').textContent = kategori;
            document.getElementById('detail-tanggal').textContent = tanggal;
            document.getElementById('detail-deskripsi').textContent = deskripsi;

            let statusHtml = '';
            if (status === 'menunggu') {
                statusHtml = `<span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[10px] font-bold bg-orange-50 text-orange-600 border border-orange-100 uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 rounded-full bg-orange-500 animate-pulse"></span> Menunggu
                </span>`;
            } else if (status === 'diproses') {
                statusHtml = `<span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[10px] font-bold bg-blue-50 text-blue-600 border border-blue-100 uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Diproses
                </span>`;
            } else {
                statusHtml = `<span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[10px] font-bold bg-emerald-50 text-emerald-600 border border-emerald-100 uppercase tracking-wider">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Selesai
                </span>`;
            }
            document.getElementById('detail-status-container').innerHTML = statusHtml;

            const modal = document.getElementById('ticketDetailModal');
            const dialog = document.getElementById('detailModalDialog');
            modal.classList.remove('hidden');
            setTimeout(() => {
                const backdrop = modal.querySelector('.bg-gray-900\\/60');
                if (backdrop) backdrop.classList.add('opacity-100');
                dialog.classList.remove('opacity-0', 'translate-y-4');
                dialog.classList.add('opacity-100', 'translate-y-0');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeDetailModal() {
            const modal = document.getElementById('ticketDetailModal');
            const dialog = document.getElementById('detailModalDialog');
            dialog.classList.remove('opacity-100', 'translate-y-0');
            dialog.classList.add('opacity-0', 'translate-y-4');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }
    </script>
</body>
</html>