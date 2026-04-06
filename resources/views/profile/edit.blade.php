<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Profil - PUSIM Universitas Merdeka Malang</title>

    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        unmerBlue: '#206d94',
                        unmerDark: '#1a4f6b',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">
    <!-- Header/Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-3 flex-1">
                <!-- Using oip.jpeg as per profil.blade.php -->
                <img src="{{ asset('oip.jpeg') }}" alt="Logo PUSIM" class="h-10 w-auto rounded-md object-contain">
                <h1
                    class="font-bold text-lg tracking-tight text-unmerDark uppercase hidden md:block border-l-2 border-gray-200 pl-3">
                    Pengaturan Profil
                </h1>
            </div>

            <nav
                class="hidden lg:flex items-center justify-center space-x-6 text-sm font-semibold text-gray-600 flex-1">
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
                <a href="{{ url('/dashboard') }}" class="hover:text-unmerBlue transition-colors">Dashboard</a>
            </nav>

            <div class="flex flex-1 justify-end items-center gap-4">
                <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-full border border-gray-200">
                    <div
                        class="w-8 h-8 rounded-full bg-unmerBlue text-white flex items-center justify-center font-bold text-sm">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <span class="text-sm text-gray-700 font-medium hidden sm:block">{{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST"
                        class="inline ml-2 border-l border-gray-300 pl-3">
                        @csrf
                        <button type="submit"
                            class="font-bold text-red-500 hover:text-red-700 text-sm transition-colors flex items-center gap-1">
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8 max-w-5xl fade-in">
        <!-- Header Section -->
        <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Pengaturan Profil</h2>
                <p class="text-gray-500 mt-2 text-sm md:text-base">Kelola informasi pribadi dan pengaturan keamanan akun Anda.</p>
            </div>
            <a href="{{ route('dashboard') }}"
                class="inline-flex items-center gap-2 bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-xl hover:bg-gray-50 hover:text-unmerBlue transition-all font-semibold shadow-sm text-sm w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Dashboard
            </a>
        </div>

        @if (session('success'))
            <div class="mb-8 bg-green-50 border border-green-200 rounded-xl p-4 flex items-start gap-3 shadow-sm">
                <div class="flex-shrink-0 mt-0.5">
                    <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-bold text-green-800">Berhasil!</h3>
                    <p class="text-sm text-green-700 mt-1">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Preview -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 flex flex-col items-center text-center sticky top-24">
                    <div class="relative mb-5">
                        <div class="w-28 h-28 rounded-full bg-gradient-to-tr from-unmerBlue to-cyan-500 text-white flex items-center justify-center font-bold text-4xl shadow-lg ring-4 ring-blue-50">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div class="absolute bottom-1 right-1 bg-green-500 w-5 h-5 rounded-full border-2 border-white" title="Aktif"></div>
                    </div>
                    <h3 class="text-xl font-extrabold text-gray-900">{{ Auth::user()->name }}</h3>
                    <p class="text-gray-500 text-sm mt-1">{{ Auth::user()->email }}</p>
                    
                    <div class="w-full border-t border-gray-100 mt-8 pt-6 space-y-4">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                </svg>
                                Status
                            </span>
                            <span class="font-semibold text-green-600 bg-green-50 px-2.5 py-0.5 rounded-full">Terverifikasi</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Bergabung
                            </span>
                            <span class="font-medium text-gray-900">{{ Auth::user()->created_at ? Auth::user()->created_at->format('M Y') : 'Baru-baru ini' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Container -->
            <div class="w-full lg:w-2/3">
                <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Card: Informasi Pribadi -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="border-b border-gray-100 bg-gray-50/50 p-6">
                            <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-unmerBlue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Informasi Pribadi
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">Perbarui nama dan alamat email yang Anda gunakan.</p>
                        </div>
                        <div class="p-6 space-y-5">
                            <div>
                                <label for="name" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Nama Lengkap</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border {{ $errors->has('name') ? 'border-red-400 focus:ring-red-500' : 'border-gray-200 focus:ring-unmerBlue focus:border-unmerBlue' }} bg-gray-50/50 focus:bg-white focus:ring-2 transition-all text-sm outline-none shadow-sm">
                                </div>
                                @error('name')
                                    <p class="mt-1.5 text-sm text-red-500 flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Alamat Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-400 focus:ring-red-500' : 'border-gray-200 focus:ring-unmerBlue focus:border-unmerBlue' }} bg-gray-50/50 focus:bg-white focus:ring-2 transition-all text-sm outline-none shadow-sm">
                                </div>
                                @error('email')
                                    <p class="mt-1.5 text-sm text-red-500 flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Card: Keamanan -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="border-b border-gray-100 bg-gray-50/50 p-6">
                            <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-unmerBlue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                Keamanan & Sandi
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">Kelola kata sandi untuk melindungi akun Anda.</p>
                        </div>
                        <div class="p-6 space-y-6">
                            
                            <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 flex gap-3 text-sm text-blue-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 mt-0.5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p><strong>Verifikasi Wajib:</strong> Masukkan kata sandi saat ini untuk menyimpan perubahan pada profil Anda, termasuk nama dan email.</p>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="current_password" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Kata Sandi Saat Ini <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <input type="password" name="current_password" id="current_password" required
                                            class="w-full pl-11 pr-4 py-3 rounded-xl border {{ $errors->has('current_password') ? 'border-red-400 focus:ring-red-500' : 'border-gray-200 focus:ring-unmerBlue focus:border-unmerBlue' }} bg-gray-50/50 focus:bg-white focus:ring-2 transition-all text-sm outline-none shadow-sm"
                                            placeholder="Masukkan sandi saat ini">
                                    </div>
                                    @error('current_password')
                                        <p class="mt-1.5 text-sm text-red-500 flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                
                                <div class="pt-4 border-t border-gray-100 grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div class="col-span-full mb-1">
                                        <h4 class="text-sm font-semibold text-gray-800">Ubah Kata Sandi <span class="text-gray-400 font-normal">(Opsional)</span></h4>
                                        <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah sandi.</p>
                                    </div>
                                    <div>
                                        <label for="password" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Sandi Baru</label>
                                        <input type="password" name="password" id="password"
                                            class="w-full px-4 py-3 rounded-xl border {{ $errors->has('password') ? 'border-red-400 focus:ring-red-500' : 'border-gray-200 focus:ring-unmerBlue focus:border-unmerBlue' }} bg-gray-50/50 focus:bg-white focus:ring-2 transition-all text-sm outline-none shadow-sm"
                                            placeholder="Minimal 8 karakter">
                                        @error('password')
                                            <p class="mt-1.5 text-sm text-red-500 flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="password_confirmation" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">Konfirmasi Sandi Baru</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-unmerBlue focus:border-unmerBlue bg-gray-50/50 focus:bg-white focus:ring-2 transition-all text-sm outline-none shadow-sm"
                                            placeholder="Ulangi sandi baru">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4 mb-10 md:mb-0">
                        <a href="{{ route('dashboard') }}"
                            class="px-5 py-2.5 rounded-xl font-semibold text-gray-600 bg-white border border-gray-200 hover:bg-gray-50 focus:ring-4 focus:ring-gray-100 transition-all text-sm">
                            Batal
                        </a>
                        <button type="submit"
                            class="px-6 py-2.5 rounded-xl font-bold text-white bg-gradient-to-r from-unmerBlue to-unmerDark hover:from-unmerDark hover:to-unmerBlue focus:ring-4 focus:ring-blue-100 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5 text-sm flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white py-6 border-t border-gray-200 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-500 text-sm font-medium">
                Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.
            </p>
        </div>
    </footer>
</body>

</html>