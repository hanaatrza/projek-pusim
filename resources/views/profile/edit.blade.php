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
    <main class="flex-grow container mx-auto px-4 py-10 max-w-4xl fade-in">

        <div class="mb-8 flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold text-gray-900">Pengaturan Profil</h2>
                <p class="text-gray-500 mt-1">Perbarui informasi dasar dan kredensial akses Anda</p>
            </div>
            <a href="{{ route('dashboard') }}"
                class="text-unmerBlue hover:text-unmerDark font-semibold text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Dashboard
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-md shadow-sm">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <form action="{{ route('profile.update') }}" method="POST" class="p-8">
                @csrf
                @method('PUT')

                <!-- Personal Information -->
                <div class="mb-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Informasi Pribadi</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama
                                Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('name') ? 'border-red-500' : 'border-gray-200' }} bg-gray-50 focus:bg-white focus:ring-2 focus:ring-unmerBlue focus:border-unmerBlue transition-all text-sm outline-none">
                            @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat
                                Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }} bg-gray-50 focus:bg-white focus:ring-2 focus:ring-unmerBlue focus:border-unmerBlue transition-all text-sm outline-none">
                            @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Authentication Verification -->
                <div class="mb-10">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Verifikasi Keamanan</h3>
                    <p class="text-sm text-gray-500 mb-4">Demi keamanan, Anda wajib memasukkan kata sandi saat ini untuk
                        menyimpan perubahan pada profil Anda.</p>

                    <div class="max-w-md">
                        <label for="current_password" class="block text-sm font-semibold text-gray-700 mb-2">Kata Sandi
                            Saat Ini <span class="text-red-500">*</span></label>
                        <input type="password" name="current_password" id="current_password" required
                            class="w-full px-4 py-3 rounded-xl border {{ $errors->has('current_password') ? 'border-red-500' : 'border-gray-200' }} bg-gray-50 focus:bg-white focus:ring-2 focus:ring-unmerBlue focus:border-unmerBlue transition-all text-sm outline-none">
                        @error('current_password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Password Changes -->
                <div class="mb-8 p-6 bg-gray-50 rounded-xl border border-gray-100">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Ubah Kata Sandi (Opsional)</h3>
                    <p class="text-sm text-gray-500 mb-6">Biarkan kosong jika Anda tidak ingin mengubah kata sandi baru.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Kata Sandi
                                Baru</label>
                            <input type="password" name="password" id="password"
                                class="w-full px-4 py-3 rounded-xl border {{ $errors->has('password') ? 'border-red-500' : 'border-gray-200' }} bg-white focus:ring-2 focus:ring-unmerBlue focus:border-unmerBlue transition-all text-sm outline-none"
                                placeholder="Minimal 8 karakter">
                            @error('password')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation"
                                class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Kata Sandi</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-unmerBlue focus:border-unmerBlue transition-all text-sm outline-none"
                                placeholder="Ulangi kata sandi baru">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-3 mt-8 pt-4 border-t border-gray-100">
                    <a href="{{ route('dashboard') }}"
                        class="px-6 py-2.5 rounded-lg font-semibold text-gray-600 hover:bg-gray-100 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-unmerBlue hover:bg-unmerDark text-white px-8 py-2.5 rounded-lg font-bold transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
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