<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Multimedia UNMER</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">

</head>

<body class="bg-gray-100">

    <nav class="bg-white shadow-md p-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo" class="h-8 mr-2">
                <span class="font-bold text-gray-800 uppercase text-xs md:text-sm tracking-tight">
                    Universitas Merdeka Malang
                </span>
            </div>

            <div class="hidden md:flex items-center space-x-6 flex-grow justify-center">
                <a href="/" class="text-gray-500 hover:text-blue-600 transition text-sm">Beranda</a>
                <a href="/profil" class="text-gray-500 hover:text-blue-600 transition text-sm">Profil</a>
                <a href="/layanan" class="text-gray-500 hover:text-blue-600 transition text-sm">Layanan</a>
                <a href="/panduan" class="text-gray-500 hover:text-blue-600 transition text-sm">Panduan</a>
                <a href="/contact" class="text-gray-500 hover:text-blue-600 transition text-sm">Contact</a>
                <a href="/login" class="text-blue-600 font-bold border-b-2 border-blue-600 pb-1 text-sm">Login</a>
            </div>

            <div class="hidden md:block w-[200px]"></div>
        </div>
    </nav>

    <div class="w-full h-[300px] md:h-[450px] bg-cover bg-center"
        style="background-image: url('{{ asset('images/unmer.jpg') }}');">
        <div class="w-full h-full bg-black/30 flex items-center justify-center">
            <h2 class="text-white text-3xl md:text-5xl font-bold uppercase tracking-widest shadow-lg">Login Multimedia
            </h2>
        </div>
    </div>

    <main class="max-w-7xl mx-auto py-12 px-4 flex justify-center">
        <div class="bg-white p-8 md:p-10 rounded-lg shadow-xl w-full max-w-md border border-gray-200">
            <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo UNMER" class="mx-auto w-16 mb-6">

            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Email</label>
                    <input type="email" name="email" required placeholder="Masukkan Email"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Password</label>
                    <input type="password" name="password" required placeholder="Masukkan Password"
                        class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded font-bold hover:bg-blue-700 transition uppercase shadow-md mt-4">
                    MASUK
                </button>
            </form>

            <div class="mt-8 text-center">
                <a href="/" class="text-sm text-blue-600 hover:underline font-medium">← Kembali ke Beranda</a>
            </div>
        </div>
    </main>

    <footer class="bg-white py-6 border-t text-center text-gray-400 text-xs">
        &copy; 2026 PUSIM Universitas Merdeka Malang
    </footer>

</body>

</html>