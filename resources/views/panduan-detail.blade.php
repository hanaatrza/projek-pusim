<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $knowledgeBase->title }} - Panduan PUSIM</title>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8fafc;
        }

        .title-font {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo(1).png') }}" alt="Logo" class="h-10">
                <span class="title-font font-bold text-gray-800">UNMER MALANG</span>
            </a>
            <div class="hidden md:flex gap-6 font-semibold text-gray-600 text-sm">
                <a href="{{ url('/') }}" class="hover:text-blue-600">Beranda</a>
                <a href="{{ url('/panduan') }}" class="text-blue-600">Panduan</a>
                <a href="{{ url('/contact') }}" class="hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-blue-200 mb-2 text-sm font-semibold uppercase tracking-wider">
                {{ $knowledgeBase->category }}
            </div>
            <h1 class="text-3xl md:text-4xl font-bold title-font mb-4 flex items-center gap-3">
                <span>{{ $knowledgeBase->icon }}</span> {{ $knowledgeBase->title }}
            </h1>
            <p class="text-lg text-blue-100">{{ $knowledgeBase->description }}</p>
        </div>
    </div>

    <main class="flex-grow container mx-auto px-4 py-8 max-w-4xl">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
            <div class="prose max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($knowledgeBase->content)) !!}
            </div>

            <div class="mt-12 pt-6 border-t border-gray-100 flex justify-between items-center text-sm text-gray-500">
                <span>Terakhir diperbarui: {{ $knowledgeBase->updated_at->format('d M Y') }}</span>
                <a href="{{ route('panduan.public') }}" class="text-blue-600 font-semibold hover:underline">← Kembali ke
                    Daftar Panduan</a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-900 text-white text-center py-6 mt-auto">
        <p class="text-sm">Copyright &copy; 2026 Universitas Merdeka Malang. All rights reserved.</p>
    </footer>
</body>

</html>