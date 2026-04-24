<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }} - PUSIM Universitas Merdeka Malang</title>
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
            height: 6px;
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
            
            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-3.5 py-3 text-gray-600 hover:text-unmerBlue hover:bg-blue-50/50 rounded-xl transition-all font-medium group">
                <div class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 group-hover:bg-blue-100 group-hover:text-unmerBlue flex items-center justify-center transition-colors">
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
                    <h2 class="text-xl font-bold tracking-tight text-gray-900">Aktivitas Layanan</h2>
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
                @endauth
            </div>
        </header>

        <!-- Scrollable Main Content -->
        <main class="flex-1 overflow-y-auto w-full custom-scrollbar pt-6 pb-12 px-4 md:px-8">
            <div class="max-w-[1400px] mx-auto space-y-8">

                <!-- Header area with back button -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 animate-fade-in-up">
                    <div>
                        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">{{ $pageTitle }}</h2>
                        <p class="text-gray-500 mt-1 font-medium text-sm">Menampilkan daftar layanan yang sesuai dengan kriteria yang Anda pilih.</p>
                    </div>
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-white border border-gray-200 rounded-xl text-gray-700 font-bold hover:text-unmerBlue hover:border-blue-200 hover:bg-blue-50 transition-all shadow-sm shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                        Kembali ke Dashboard
                    </a>
                </div>

                <!-- Main Data Grid -->
                <div class="glass-panel bg-white rounded-[2rem] overflow-hidden flex flex-col shadow-sm animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="overflow-x-auto flex-grow custom-scrollbar">
                        <table class="w-full text-left border-collapse min-w-[700px]">
                            <thead>
                                <tr class="bg-gray-50/80 text-[11px] text-gray-500 tracking-wider uppercase border-b border-gray-100">
                                    <th class="px-7 py-5 font-bold">Informasi Layanan</th>
                                    <th class="px-7 py-5 font-bold">Kategori</th>
                                    <th class="px-7 py-5 font-bold">Tanggal</th>
                                    <th class="px-7 py-5 font-bold">Status</th>
                                    <th class="px-7 py-5 font-bold text-center">Aksi</th>
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
                                            <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-700 rounded-lg text-xs font-semibold capitalize border border-gray-200">
                                                {{ $ticket->kategori }}
                                            </span>
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
                                        <td colspan="5" class="p-16 text-center bg-gray-50/30">
                                            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white shadow-sm mb-5 text-gray-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                                </svg>
                                            </div>
                                            <h4 class="text-gray-900 font-bold text-lg mb-2">Belum Ada Layanan</h4>
                                            <p class="text-gray-500">Tidak ada tiket layanan yang ditemukan untuk kategori "{{ $pageTitle }}".</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    @if($tickets->hasPages())
                    <div class="px-7 py-5 border-t border-gray-100 bg-white">
                        {{ $tickets->links() }}
                    </div>
                    @endif
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

    <script>
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
