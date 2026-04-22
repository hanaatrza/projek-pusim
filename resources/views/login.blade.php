<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Universitas Merdeka Malang</title>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { unmerBlue: '#1c5e82', unmerDark: '#0f3d59' },
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    animation: { 'float': 'float 6s ease-in-out infinite' },
                    keyframes: {
                        float: { '0%, 100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-15px)' } }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 2rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        .btn-elegant {
            background: linear-gradient(135deg, #1c5e82 0%, #0f3d59 100%);
            transition: all 0.4s ease;
        }

        .btn-elegant:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(28, 94, 130, 0.3);
        }

        .input-elegant {
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
            background: #f9fafb;
        }

        .input-elegant:focus {
            background: #fff;
            border-color: #1c5e82;
            box-shadow: 0 0 0 4px rgba(28, 94, 130, 0.1);
            outline: none;
        }
    </style>
</head>

<body
    class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen selection:bg-unmerBlue selection:text-white relative">
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
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
            </nav>
            <button class="lg:hidden p-2 text-gray-800"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg></button>
        </div>
    </header>

    <div class="flex-grow flex items-center justify-center relative py-12 px-4 overflow-hidden min-h-[600px]">
        <div class="absolute inset-0 bg-cover bg-center transform scale-105"
            style="background-image: url('{{ asset('images/malang.jpg') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-unmerDark/80 to-blue-900/60 backdrop-blur-[2px]"></div>

        <div
            class="relative z-10 w-full max-w-[950px] flex flex-col md:flex-row glass-panel overflow-hidden animate-[fadeInUp_0.8s_ease-out_forwards]">
            <!-- Creative Visual Side -->
            <div
                class="hidden md:flex flex-1 flex-col justify-between p-12 bg-gradient-to-b from-white/40 to-transparent relative overflow-hidden text-unmerDark border-r border-white/50">
                <div class="relative z-10">
                    <span
                        class="inline-block px-3 py-1 rounded-full bg-unmerBlue/10 text-unmerBlue text-xs font-bold tracking-widest uppercase mb-6">Portal
                        Akademik</span>
                    <h2 class="text-4xl font-extrabold tracking-tight mb-4 leading-tight">Selamat Datang <br>Kembali.
                    </h2>
                    <p class="font-light text-gray-600 leading-relaxed max-w-xs">Akses layanan terpadu Pusat Teknologi
                        Informasi & Multimedia secara aman dan efisien.</p>
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 bg-white rounded-2xl shadow-sm flex items-center justify-center animate-float text-unmerBlue">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Form Side -->
            <div
                class="flex-1 p-10 lg:p-14 bg-white flex flex-col justify-center shadow-[-20px_0_30px_-15px_rgba(0,0,0,0.05)] z-20 relative">
                <h3 class="text-3xl font-bold text-gray-900 mb-2 tracking-tight">Login Portal</h3>
                <p class="text-gray-500 font-light mb-8 text-sm">Masuk dengan kredensial institusi Anda.</p>

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    @if ($errors->any())
                        <div class="text-red-600 text-sm bg-red-50 border border-red-100 p-4 rounded-xl flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 shrink-0" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif
                    <div>
                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase tracking-widest">Email
                            Resmi</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="contoh@unmer.ac.id"
                            required class="input-elegant w-full px-5 py-4 rounded-xl text-sm font-medium">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest">Kata
                                Sandi</label>
                        </div>
                        <input type="password" name="password" placeholder="••••••••" required
                            class="input-elegant w-full px-5 py-4 rounded-xl text-sm font-medium tracking-widest">
                    </div>
                    <div class="pt-4">
                        <button type="submit"
                            class="btn-elegant w-full py-4 text-white rounded-xl text-sm font-bold tracking-wide flex justify-center items-center gap-2">
                            Akses Dashboard
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>