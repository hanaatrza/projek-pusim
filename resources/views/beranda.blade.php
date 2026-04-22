<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda PUSIM - Universitas Merdeka Malang</title>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { unmerBlue: '#1c5e82', unmerDark: '#0f3d59' },
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    animation: { 'fade-in-up': 'fadeInUp 0.8s ease-out forwards', 'fade-in': 'fadeIn 1s ease-out forwards' },
                    keyframes: {
                        fadeInUp: { '0%': { opacity: '0', transform: 'translateY(30px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
                        fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(28, 94, 130, 0.6) 100%);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .btn-elegant {
            background: linear-gradient(135deg, #1c5e82 0%, #0f3d59 100%);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .btn-elegant:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(28, 94, 130, 0.3);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen selection:bg-unmerBlue selection:text-white">
    <header class="glass-nav sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo(1).png') }}" alt="Logo" class="h-11 w-auto rounded-md shadow-sm">
                <h1
                    class="font-bold text-sm md:text-base tracking-widest text-gray-900 uppercase hidden md:block border-l-2 border-unmerBlue/30 pl-4 py-1">

                </h1>
            </div>
            <nav
                class="hidden lg:flex items-center justify-center space-x-10 text-sm font-semibold tracking-wide text-gray-500">
                <a href="{{ url('/') }}" class="text-unmerBlue">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
            </nav>
            <div class="hidden sm:flex items-center">
                <a href="{{ url('/login') }}"
                    class="text-sm font-bold text-white btn-elegant px-7 py-2.5 rounded-full">Login Portal</a>
            </div>
            <button class="lg:hidden p-2 text-gray-800"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg></button>
        </div>
    </header>

    <section
        class="relative min-h-[550px] lg:min-h-[650px] flex items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 duration-1000 ease-in-out"
            style="background-image: url('{{ asset('images/unmer.jpg') }}');"></div>
        <div class="absolute inset-0 hero-gradient"></div>
        <div class="relative z-10 px-6 max-w-5xl mx-auto flex flex-col items-center animate-fade-in-up">
            <span
                class="px-4 py-1.5 rounded-full border border-white/20 bg-white/10 text-white/90 text-xs font-semibold tracking-[0.2em] uppercase mb-6 backdrop-blur-sm">
                Sistem Informasi Terpadu
            </span>
            <h2
                class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight tracking-tight drop-shadow-lg">
                Pusat Teknologi Informasi <br /> <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white">& Multimedia</span>
            </h2>
            <p
                class="text-lg md:text-2xl text-blue-50 font-light max-w-3xl mx-auto drop-shadow-md leading-relaxed mb-10">
                Membangun ekosistem akademik cerdas Universitas Merdeka Malang melalui integrasi layanan digital yang
                elegan dan profesional.
            </p>
        </div>
    </section>

    <main class="flex-grow py-24 bg-gray-50/50 relative">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] bg-blue-100/40 rounded-full blur-3xl"></div>
            <div class="absolute top-[40%] -right-[10%] w-[40%] h-[60%] bg-indigo-50/40 rounded-full blur-3xl"></div>
        </div>
        <div class="container mx-auto px-6 max-w-6xl relative z-10">
            <div class="text-center mb-20 animate-fade-in-up" style="animation-delay: 0.2s;">
                <h4 class="text-4xl font-bold text-gray-900 mb-4 tracking-tight">Pilih Portal Akses</h4>
                <div class="w-16 h-1.5 bg-gradient-to-r from-unmerBlue to-blue-300 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto text-lg font-light">
                    Portal akses khusus sesuai dengan peran aktif Anda.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-4xl mx-auto animate-fade-in-up"
                style="animation-delay: 0.4s;">
                <a href="#"
                    class="group glass-card p-10 rounded-3xl flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(28,94,130,0.08)] hover:border-unmerBlue/40 transition-all duration-500">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-50 text-unmerBlue flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500 group-hover:bg-unmerBlue group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-xl text-gray-900 font-bold tracking-tight">Layanan Dosen</span>
                    <p class="text-gray-500 mt-3 text-center font-light text-sm">Akses administrasi mengajar dan
                        penelitian</p>
                </a>
                <a href="#"
                    class="group glass-card p-10 rounded-3xl flex flex-col items-center justify-center hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(28,94,130,0.08)] hover:border-unmerBlue/40 transition-all duration-500">
                    <div
                        class="w-16 h-16 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500 group-hover:bg-indigo-600 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <span class="text-xl text-gray-900 font-bold tracking-tight">Layanan Mahasiswa</span>
                    <p class="text-gray-500 mt-3 text-center font-light text-sm">Akses sistem akademik dan e-learning
                    </p>
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-black py-6 border-t border-white/10 mt-auto">
        <div
            class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
            <div class="flex items-center space-x-3 mb-3 md:mb-0">
                <div
                    class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-black font-bold text-xs shadow-sm">
                    P</div>
                <span class="text-white font-semibold tracking-widest text-sm">PUSIM UNMER</span>
            </div>
            <div class="text-gray-400 text-xs font-medium tracking-wide flex flex-col md:flex-row gap-1 md:gap-4">
                <span>&copy; {{ date('Y') }} Universitas Merdeka Malang. Semua Hak Cipta Dilindungi.</span>
                <span class="hidden md:inline">|</span>
                <span>Dikelola oleh Pusat Teknologi Informasi & Multimedia.</span>
            </div>
        </div>
    </footer>
</body>

</html>