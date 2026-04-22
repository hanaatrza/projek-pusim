<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Reset Password Siakad Mahasiswa Baru - PUSIM</title>

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
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">
    <!-- Header/Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-3 flex-1">
                <img src="{{ asset('images/logo(1).png') }}" alt="Logo PUSIM"
                    class="h-10 w-auto rounded-md object-contain">
                <h1
                    class="font-bold text-lg tracking-tight text-unmerDark uppercase hidden md:block border-l-2 border-gray-200 pl-3">
                    Basis Pengetahuan
                </h1>
            </div>

            <nav
                class="hidden lg:flex items-center justify-center space-x-6 text-sm font-semibold text-gray-600 flex-1">
                <a href="{{ url('/dashboard') }}" class="hover:text-unmerBlue transition-colors font-bold">Dashboard</a>
                <a href="{{ url('/dashboard/basis-pengetahuan') }}"
                    class="text-unmerBlue transition-colors font-bold">Basis Pengetahuan</a>
                <a href="{{ url('/') }}" class="hover:text-unmerBlue transition-colors">Beranda</a>
            </nav>

            <div class="flex flex-1 justify-end items-center gap-4">
                @auth
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                @endauth
            </div>

            <button class="lg:hidden p-2 text-gray-600 ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8 max-w-6xl">
        <!-- Breadcrumb -->
        <nav class="flex text-gray-500 text-sm mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/dashboard/basis-pengetahuan') }}"
                        class="hover:text-unmerBlue inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Basis Pengetahuan
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 md:ml-2">Sistem Akademik</span>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 md:ml-2 text-gray-400 font-medium truncate w-32 md:w-auto">Cara Reset Password
                            Siakad...</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Article Body -->
            <article class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-8">
                    <!-- Category Badge -->
                    <span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-semibold bg-blue-50 text-unmerBlue mb-4 border border-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        Sistem Akademik
                    </span>

                    <h1 class="text-3xl font-extrabold text-gray-900 mb-4 leading-tight">Cara Reset Password Siakad
                        Mahasiswa Baru</h1>

                    <div class="flex items-center text-sm text-gray-500 mb-8 border-b border-gray-100 pb-6">
                        <div class="flex items-center mr-6">
                            <svg class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Diperbarui pada 21 Agustus 2026
                        </div>
                        <div class="flex items-center">
                            <svg class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            Dilihat 1,420 kali
                        </div>
                    </div>

                    <!-- Content Details -->
                    <div class="prose prose-blue max-w-none text-gray-700">
                        <p class="text-lg leading-relaxed mb-6">
                            Sistem Informasi Akademik (Siakad) adalah gerbang utama bagi seluruh aktivitas akademik Anda
                            di Universitas Merdeka Malang. Lupa kata sandi (password) adalah kendala yang sering
                            terjadi, terutama di awal masa perkuliahan. Tenang saja, ikuti tiga tahapan aman di bawah
                            ini untuk mengatur ulang akses Anda.
                        </p>

                        <h3 class="text-xl font-bold text-gray-900 mt-8 mb-4">Langkah 1: Kunjungi Portal Pemulihan
                            Bantuan IT</h3>
                        <p class="mb-4">
                            Sesuai dengan ketentuan IT yang ditetapkan terbaru, semua permintaan <em>reset
                                credential</em> tidak lagi dilakukan di halaman depan Siakad, melainkan terpusat pada
                            Sistem Manajemen Identitas (SSO Terpadu).
                        </p>
                        <ul class="list-disc pl-6 mb-6 space-y-2">
                            <li>Buka browser (direkomendasikan Chrome atau Firefox versi terbaru).</li>
                            <li>Arahkan ke alamat: <strong><a href="#"
                                        class="text-unmerBlue hover:underline font-medium">sso.unmer.ac.id/recovery</a></strong>
                            </li>
                            <li>Pilih opsi "Mahasiswa / Student".</li>
                        </ul>

                        <div class="bg-blue-50 border-l-4 border-unmerBlue p-4 rounded-r-lg mb-8">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-unmerBlue" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-bold text-unmerDark">Informasi Penting</h3>
                                    <p class="text-sm mt-1 text-unmerBlue">Pastikan Anda telah memiliki akses ke akun
                                        email verifikasi sekunder yang Anda daftarkan saat daftar ulang PKKMB.</p>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mt-8 mb-4">Langkah 2: Proses Otentikasi dan Token
                        </h3>
                        <p class="mb-4">
                            Untuk membuktikan bahwa Anda memang pemegang identitas akun resmi:
                        </p>
                        <ol class="list-decimal pl-6 mb-6 space-y-2">
                            <li>Masukkan <strong>NPM (Nomor Pokok Mahasiswa)</strong> 10 digit Anda.</li>
                            <li>Isikan <em>Captcha</em> keamanan yang tampil di layar.</li>
                            <li>Sistem akan mendeteksi nomor Whatsapp dan Personal Email belakang Anda (ter-sensor,
                                contoh: bu**@gmail.com). Klik <strong>"Kirim Token OTP"</strong>.</li>
                            <li>Masukkan kode OTP 6 digit yang dikirimkan. Kode ini hanya valid selama 5 menit.</li>
                        </ol>

                        <h3 class="text-xl font-bold text-gray-900 mt-8 mb-4">Langkah 3: Pembuatan Sandi Baru</h3>
                        <p class="mb-4">Setelah validasi berhasil, Anda akan diarahkan ke halaman Setelan Ulang
                            <em>Password</em>.
                        </p>
                        <div class="bg-gray-100 p-6 rounded-xl border border-gray-200 mb-8">
                            <h4 class="font-bold text-gray-800 mb-2">Syarat Keamanan Password PUSIM:</h4>
                            <ul class="list-none space-y-2 text-sm text-gray-600">
                                <li class="flex items-center"><svg class="h-4 w-4 text-green-500 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg> Minimal 8 karakter</li>
                                <li class="flex items-center"><svg class="h-4 w-4 text-green-500 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg> Mengandung setidaknya 1 huruf besar (Kapital)</li>
                                <li class="flex items-center"><svg class="h-4 w-4 text-green-500 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg> Mengandung setidaknya 1 karakter spesial (@, #, !, ?, dsb)</li>
                                <li class="flex items-center"><svg class="h-4 w-4 text-red-500 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg> Tidak memuat NPM atau format tanggal lahir</li>
                            </ul>
                        </div>

                        <p class="mb-4">
                            Simpan password di sistem/browser yang Anda percayai. Setelah menekan tombol konfirmasi, SSO
                            Siakad Anda akan otomatis menggunakan kata sandi yang baru.
                        </p>
                    </div>

                    <!-- Was this helpful section -->
                    <div class="mt-12 pt-8 border-t border-gray-100 text-center">
                        <p class="text-sm font-semibold text-gray-600 mb-4">Apakah artikel ini bermanfaat membantu
                            kendala Anda?</p>
                        <div class="flex justify-center gap-4">
                            <button
                                class="flex items-center bg-white border border-gray-300 hover:bg-green-50 hover:border-green-300 hover:text-green-700 px-4 py-2 rounded-lg transition-colors font-medium text-gray-700 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                                Ya, Berhasil
                            </button>
                            <button
                                class="flex items-center bg-white border border-gray-300 hover:bg-red-50 hover:border-red-300 hover:text-red-700 px-4 py-2 rounded-lg transition-colors font-medium text-gray-700 text-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5" />
                                </svg>
                                Tidak Bermanfaat
                            </button>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="space-y-6">
                <!-- Related Articles Section -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 border-b border-gray-100 pb-3">Artikel Terkait</h3>
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="group flex items-start">
                                <svg class="h-5 w-5 text-gray-300 mr-2 mt-0.5 group-hover:text-unmerBlue transition-colors"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-700 group-hover:text-unmerBlue leading-tight transition-colors">Cara
                                    Melakukan KRS Online pada Sistem Terpadu</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-start">
                                <svg class="h-5 w-5 text-gray-300 mr-2 mt-0.5 group-hover:text-unmerBlue transition-colors"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-700 group-hover:text-unmerBlue leading-tight transition-colors">Mendaftarkan
                                    Alamat Email Resmi @mhs.unmer.ac.id</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-start">
                                <svg class="h-5 w-5 text-gray-300 mr-2 mt-0.5 group-hover:text-unmerBlue transition-colors"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span
                                    class="text-sm font-medium text-gray-700 group-hover:text-unmerBlue leading-tight transition-colors">Nomor
                                    Handphone Terdaftar Sudah Tidak Aktif?</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Still Need Help Box -->
                <div
                    class="bg-gradient-to-br from-unmerBlue to-blue-600 rounded-xl shadow-sm text-white p-6 relative overflow-hidden">
                    <div class="absolute -right-4 -bottom-4 opacity-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <h4 class="font-bold text-lg mb-2">Masalah Belum Teratasi?</h4>
                        <p class="text-blue-100 text-sm mb-5 leading-relaxed">Admin PUSIM dapat langsung meresetkan
                            sandi Anda dari pusat dengan menyertakan KTP/KTM.</p>

                        <a href="{{ url('/dashboard') }}"
                            class="block w-full text-center bg-white text-unmerBlue font-bold py-2.5 rounded-lg mb-3 hover:bg-blue-50 transition-colors shadow-sm">
                            Buat Tiket Bantuan
                        </a>
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="flex items-center justify-center w-full bg-transparent border border-white text-white font-bold py-2.5 rounded-lg hover:bg-white hover:text-unmerBlue transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.371-.025-.52-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.876 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                            Kirim Pesan WhatsApp
                        </a>
                    </div>
                </div>
            </aside>
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