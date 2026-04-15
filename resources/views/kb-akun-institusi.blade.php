<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Institusi - PUSIM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = { theme: { extend: { colors: { unmerBlue: '#206d94', unmerDark: '#1a4f6b',}, fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'],},} } }
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-3 flex-1">
                <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo PUSIM" class="h-10 w-auto rounded-md object-contain">
                <h1 class="font-bold text-lg tracking-tight text-unmerDark uppercase hidden md:block border-l-2 border-gray-200 pl-3">Basis Pengetahuan</h1>
            </div>
            <nav class="hidden lg:flex items-center justify-center space-x-6 text-sm font-semibold text-gray-600 flex-1">
                <a href="{{ url('/dashboard') }}" class="hover:text-unmerBlue transition-colors font-bold">Dashboard</a>
                <a href="{{ url('/dashboard/basis-pengetahuan') }}" class="text-unmerBlue transition-colors font-bold">Basis Pengetahuan</a>
            </nav>
            <div class="flex flex-1 justify-end items-center gap-4">
                @auth
                    <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-full border border-gray-200">
                        <div class="w-8 h-8 rounded-full bg-unmerBlue text-white flex items-center justify-center font-bold text-sm">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <span class="text-sm text-gray-700 font-medium hidden sm:block">{{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="inline ml-2 border-l border-gray-300 pl-3">
                            @csrf
                            <button type="submit" class="font-bold text-red-500 hover:text-red-700 text-sm transition-colors flex items-center gap-1"><span>Logout</span></button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8 max-w-4xl">
        <nav class="flex text-gray-500 text-sm mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center"><a href="{{ url('/dashboard/basis-pengetahuan') }}" class="hover:text-unmerBlue font-medium">Basis Pengetahuan</a></li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 md:ml-2 text-gray-400 font-medium">Akun Institusi</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 mb-8 flex items-center">
            <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Akun Institusi</h2>
                <p class="text-gray-500 mt-2">Daftar kendala sinkronisasi Single Sign-On (SSO) dan akun Google Workspace (Email Institusi).</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <ul class="divide-y divide-gray-100">
                <li>
                    <a href="{{ url('/dashboard/basis-pengetahuan/daftar-email') }}" class="block p-6 hover:bg-purple-50 transition-colors group">
                        <h4 class="text-lg font-bold text-gray-900 group-hover:text-purple-600">Cara Aktivasi Email @mhs.unmer.ac.id</h4>
                        <p class="text-sm text-gray-500 mt-1">Langkah melakukan klaim Google Account gratis dengan domain kampus.</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/basis-pengetahuan/kuota-penyimpanan') }}" class="block p-6 hover:bg-purple-50 transition-colors group">
                        <h4 class="text-lg font-bold text-gray-900 group-hover:text-purple-600">Batas Kuota Penyimpanan Edu</h4>
                        <p class="text-sm text-gray-500 mt-1">Kebijakan pembatasan Google Drive dan panduan mengosongkan file usang.</p>
                    </a>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>
