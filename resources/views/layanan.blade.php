<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan PUSIM - Universitas Merdeka Malang</title>
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
        .number-overlay { -webkit-text-stroke: 1px rgba(28,94,130,0.2); -webkit-text-fill-color: transparent; }
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
                <a href="{{ url('/profil') }}" class="hover:text-unmerBlue transition-colors">Profil</a>
                <a href="{{ url('/layanan') }}" class="text-unmerBlue">Layanan</a>
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
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105" style="background-image: url('{{ asset('images/unmer.jpg') }}');"></div>
        <div class="absolute inset-0 hero-gradient"></div>
        <div class="relative z-10 px-6 max-w-4xl mx-auto flex flex-col items-center">
            <span class="px-4 py-1 rounded-full border border-white/20 bg-white/10 text-white/90 text-[10px] font-bold tracking-[0.3em] uppercase mb-5">Fasilitas Kampus</span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">Layanan Sivitas</h2>
            <p class="text-blue-50 text-xl font-light tracking-wide max-w-2xl">Eskplorasi integrasi ekosistem akademik dan administratif cerdas Universitas Merdeka.</p>
        </div>
    </section>

    <main class="flex-grow container mx-auto px-6 py-24 max-w-5xl">
        <div class="space-y-12">
            <div class="glass-card p-10 md:p-14 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-8 text-[120px] font-black number-overlay leading-none select-none group-hover:scale-110 transition-transform duration-700">01</div>
                <div class="relative z-10 max-w-3xl">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6 tracking-tight">Komitmen Transformasi Digital</h3>
                    <div class="w-12 h-1 bg-gradient-to-r from-unmerBlue to-blue-300 rounded-full mb-8"></div>
                    <p class="text-gray-600 text-lg font-light leading-relaxed text-justify">
                        PUSIM Universitas Merdeka Malang berkomitmen mendukung transformasi digital di lingkungan universitas dengan menyediakan infrastruktur layanan teknologi informasi berstandar tinggi yang terintegrasi. Hal ini ditujukan untuk mempermudah kegiatan operasional akademik harian, baik untuk Dosen, Mahasiswa, hingga Staf Administratif.
                    </p>
                </div>
            </div>
            
            <div class="glass-card p-10 md:p-14 relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-8 text-[120px] font-black number-overlay leading-none select-none group-hover:scale-110 transition-transform duration-700">02</div>
                <div class="relative z-10 max-w-3xl">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6 tracking-tight">Kemudahan Akses Akademik</h3>
                    <div class="w-12 h-1 bg-gradient-to-r from-unmerBlue to-blue-300 rounded-full mb-8"></div>
                    <p class="text-gray-600 text-lg font-light leading-relaxed text-justify">
                        Kami menyediakan antarmuka interaktif yang cepat untuk berbagai fasilitas IT demi mewujudkan kampus masa depan yang terkoneksi mutlak. Seluruh kebutuhan pengisian KRS, informasi transkrip, hingga portal bimbingan riset kini dapat diakses dalam genggaman secara riil dan terpadu.
                    </p>
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