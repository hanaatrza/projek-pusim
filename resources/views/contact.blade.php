<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact PUSIM - UNMER Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    <nav class="bg-white shadow-md p-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">

            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo" class="h-8 mr-2">
                <span class="font-bold text-gray-800 uppercase text-xs md:text-sm tracking-tight">
                    Universitas Merdeka Malang
                </span>
            </div>

            <div class="hidden md:flex items-center space-x-8 flex-grow justify-center">
                <a href="/" class="text-gray-500 hover:text-blue-600 transition text-sm font-medium">Beranda</a>
                <a href="/profil" class="text-gray-500 hover:text-blue-600 transition text-sm font-medium">Profil</a>
                <a href="/layanan" class="text-gray-500 hover:text-blue-600 transition text-sm font-medium">Layanan</a>
                <a href="/panduan" class="text-gray-500 hover:text-blue-600 transition text-sm font-medium">Panduan</a>
                <a href="/contact" class="text-blue-600 font-bold border-b-2 border-blue-600 pb-1 text-sm">Contact</a>
                <a href="/login" class="text-gray-500 hover:text-blue-600 transition text-sm font-medium">Login</a>
            </div>

            <div class="hidden md:block w-[200px]"></div>
        </div>
    </nav>

    <header class="relative h-[300px] flex items-center justify-center text-center text-white">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/unmer.jpg') }}');">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>
        <div class="relative z-10 px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-2 uppercase tracking-wider">HUBUNGI KAMI</h1>
            <p class="text-lg font-light italic">Pusat Teknologi Informasi dan Multimedia (PUSIM)</p>
        </div>
    </header>

    <main class="flex-grow py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10 uppercase tracking-tight">Informasi Kontak
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-blue-600 shadow-sm">
                    <strong class="block text-blue-600 text-xs uppercase tracking-widest mb-2">Alamat</strong>
                    <p class="text-gray-700 leading-relaxed">Gedung Rektorat Lt. 1, Universitas Merdeka Malang</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-blue-600 shadow-sm">
                    <strong class="block text-blue-600 text-xs uppercase tracking-widest mb-2">Telepon</strong>
                    <p class="text-gray-700 leading-relaxed">0341-568395</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl border-l-4 border-blue-600 shadow-sm">
                    <strong class="block text-blue-600 text-xs uppercase tracking-widest mb-2">Email Support</strong>
                    <p class="text-gray-700 leading-relaxed italic">pusim@unmer.ac.id</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-8 text-center mt-auto">
        <div class="container mx-auto px-4">
            <p class="text-sm opacity-75">Copyright &copy; 2026 Universitas Merdeka Malang. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>