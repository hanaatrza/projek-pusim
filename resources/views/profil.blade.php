<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil PUSIM - Universitas Merdeka Malang</title>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { colors: { unmerBlue: '#1c5e82', unmerDark: '#0f3d59' }, fontFamily: { sans: ['Inter', 'sans-serif'] } } }
        }
    </script>
    <style>
        .glass-nav { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-bottom: 1px solid rgba(255, 255, 255, 0.4); }
        .hero-gradient { background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(28,94,130,0.7) 100%); }
        .glass-card { background: rgba(255, 255, 255, 1); border-radius: 1.5rem; transition: all 0.4s ease; border: 1px solid #f3f4f6; }
        .glass-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.06); border-color: #1c5e8230; }
        .btn-elegant { background: linear-gradient(135deg, #1c5e82 0%, #0f3d59 100%); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        .btn-elegant:hover { transform: translateY(-4px); box-shadow: 0 15px 30px rgba(28,94,130,0.3); }
        .text-gradient { background: linear-gradient(135deg, #1c5e82 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans flex flex-col min-h-screen selection:bg-unmerBlue selection:text-white">
    <header class="glass-nav sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo" class="h-11 w-auto rounded-md shadow-sm">
                <h1 class="font-bold text-sm md:text-base tracking-widest text-gray-900 uppercase hidden md:block border-l-2 border-unmerBlue/30 pl-4 py-1">
                    Universitas Merdeka Malang
                </h1>
            </div>
            <nav class="hidden lg:flex items-center justify-center space-x-10 text-sm font-semibold tracking-wide text-gray-500">
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/profil') }}" class="text-unmerBlue">Profil</a>
                <a href="{{ url('/layanan') }}" class="hover:text-unmerBlue transition-colors">Layanan</a>
                <a href="{{ url('/panduan') }}" class="hover:text-unmerBlue transition-colors">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-unmerBlue transition-colors">Contact</a>
            </nav>
            <div class="hidden sm:flex items-center">
                <a href="{{ url('/login') }}" class="text-sm font-bold text-white btn-elegant px-7 py-2.5 rounded-full">Login Portal</a>
            </div>
            <button class="lg:hidden p-2 text-gray-800"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg></button>
        </div>
    </header>

    <section class="relative h-[450px] lg:h-[500px] flex items-center justify-center text-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105" style="background-image: url('{{ asset('unmer.jpeg') }}');"></div>
        <div class="absolute inset-0 hero-gradient"></div>
        <div class="relative z-10 px-6 max-w-4xl mx-auto flex flex-col items-center">
            <span class="px-4 py-1 rounded-full border border-white/20 bg-white/10 text-white/90 text-[10px] font-bold tracking-[0.3em] uppercase mb-5">Tentang Kami</span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">Profil Instansi</h2>
            <p class="text-blue-50 text-xl font-light tracking-wide max-w-2xl">Pusat Teknologi Informasi dan Multimedia Universitas Merdeka Malang</p>
        </div>
    </section>

    <main class="flex-grow container mx-auto px-6 py-24 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <div class="space-y-8">
                <div>
                    <h3 class="text-4xl font-bold text-gray-900 tracking-tight mb-4">Mengenal <span class="text-gradient">PUSIM</span></h3>
                    <div class="w-16 h-1.5 bg-gradient-to-r from-unmerBlue to-blue-300 rounded-full"></div>
                </div>
                <div class="space-y-6 text-gray-600 font-light text-lg leading-relaxed text-justify">
                    <p>
                        Pusat Teknologi Informasi dan Komunikasi (PUSIM) Universitas Merdeka Malang adalah unit pelaksana teknis yang bertanggung jawab dalam pengembangan, pengelolaan, dan pengkoordinasian infrastruktur serta layanan teknologi informasi di lingkungan universitas.
                    </p>
                    <div class="p-6 bg-blue-50/50 border-l-4 border-unmerBlue rounded-r-2xl italic font-medium">
                        Kami berkomitmen untuk menghadirkan inovasi digital yang mendukung proses akademik, administrasi, dan kemahasiswaan demi mewujudkan ekosistem kampus yang cerdas dan terintegrasi.
                    </div>
                </div>
            </div>
            
            <div class="space-y-8">
                <div class="glass-card p-10">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-unmerBlue to-unmerDark flex items-center justify-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-900 tracking-tight">Visi Induk</h4>
                    </div>
                    <p class="text-gray-600 font-light leading-relaxed text-lg">
                        Menjadi Universitas terkemuka dalam pengembangan SDM seutuhnya yang berjiwa wirausaha pada skala nasional dan internasional.
                    </p>
                </div>
                
                <div class="glass-card p-10">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-900 tracking-tight">Misi Utama</h4>
                    </div>
                    <ul class="space-y-4 text-gray-600 font-light leading-relaxed list-none text-[15px]">
                        <li class="flex items-start gap-4"><div class="w-2 h-2 mt-2 rounded-full bg-orange-400 shrink-0"></div>Menyelenggarakan program pendidikan tinggi berkualitas bereputasi.</li>
                        <li class="flex items-start gap-4"><div class="w-2 h-2 mt-2 rounded-full bg-orange-400 shrink-0"></div>Menyelenggarakan kegiatan penelitian dan publikasi ilmiah unggul.</li>
                        <li class="flex items-start gap-4"><div class="w-2 h-2 mt-2 rounded-full bg-orange-400 shrink-0"></div>Melaksanakan tata kelola universitas yang cerdas berbasis Sistem Informasi Manajemen.</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-black py-6 border-t border-white/10 mt-auto">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
            <div class="flex items-center space-x-3 mb-3 md:mb-0">
                <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center text-black font-bold text-xs shadow-sm">P</div>
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