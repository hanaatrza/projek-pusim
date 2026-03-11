<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan PUSIM - UNMER Malang</title>

    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #ffffff;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 0 auto;
        }

        /* NAVBAR */
        .navbar {
            background-color: #ffffff;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-area {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .logo {
            height: 45px;
            margin-right: 15px;
        }

        .brand-name {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            color: #555;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        /* Link Active logic */
        .nav-links a.active,
        .nav-links a:hover {
            color: #007bff;
        }

        .search-container {
            display: flex;
            align-items: center;
            background-color: #f1f3f5;
            padding: 5px 12px;
            border-radius: 20px;
            border: 1px solid #e9ecef;
        }

        .search-input {
            border: none;
            background: transparent;
            outline: none;
            padding: 2px;
            font-size: 13px;
            width: 100px;
            transition: width 0.4s ease;
        }

        .search-input:focus {
            width: 160px;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 450px;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* overlay gelap supaya teks terlihat */
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            color: white;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 20px;
        }

        /* MAIN CONTENT */
        .main-content {
            padding: 60px 0;
        }

        .content-text {
            font-size: 1.1rem;
            color: #444;
            margin-bottom: 25px;
            text-align: justify;
        }

        .instruction-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 30px 0 50px 0;
        }

        .instruction-card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
        }

        .instruction-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(32, 109, 148, 0.1);
            border-color: #206d94;
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 15px;
            display: block;
        }

        .instruction-card h3 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #206d94;
        }

        .instruction-card p {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.5;
        }

        .card-number {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #f1f3f5;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #dee2e6;
            font-size: 1.5rem;
        }

        .highlight {
            color: #007bff;
            font-weight: 600;
        }

        footer {
            text-align: center;
            padding: 25px 0;
            background-color: #1a1a1a;
            color: white;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 1.8rem;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container nav-wrapper">
            <a href="{{ url('/') }}" class="logo-area">
                <img src="oip.jpeg" alt="Logo" class="logo">
                <span class="brand-name">UNIVERSITAS MERDEKA MALANG</span>
            </a>

            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/profil') }}">Profil</a></li>
                <li><a href="{{ url('/layanan') }}">Layanan</a></li>
                <li><a href="{{ url('/panduan') }}" class="active">Panduan</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                @auth
                    <li>
                        <div class="flex items-center gap-3">
                            <span class="text-sm text-gray-700 font-medium">Hai, {{ Auth::user()->name }}</span>
                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="font-bold text-red-600 hover:text-red-800 text-sm">Logout</button>
                            </form>
                        </div>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}" class="font-bold text-blue-600 hover:text-blue-800">Login</a></li>
                @endauth
            </ul>

            <div class="search-container">
                <input type="text" id="guideSearch" placeholder="Cari panduan..." class="search-input">
            </div>
        </div>
    </nav>
    <header class="hero" style="background-image:url('{{ asset('unmer.jpeg') }}')">
        <div class="hero-content">
            <h1>PUSIM UNMER</h1>
            <p>Pusat Teknologi Informasi dan Multimedia (PUSIM)</p>
            <p>Solusi Transformasi Digital Terpadu.</p>
        </div>
    </header>
    <main class="container main-content">
        <p class="content-text">
            Halaman panduan ini menyajikan berbagai sumber daya informasi untuk memudahkan sivitas akademika dalam
            memanfaatkan teknologi kampus.
        </p>

        <div class="instruction-grid">
            <div class="instruction-card">
                <div class="card-number">01</div>
                <span class="card-icon">📧</span>
                <h3>Aktivasi Email Institusi</h3>
                <p>Panduan lengkap tata cara aktivasi email resmi UNMER untuk pertama kali bagi mahasiswa baru dan
                    dosen.</p>
            </div>

            <div class="instruction-card">
                <div class="card-number">02</div>
                <span class="card-icon">📚</span>
                <h3>Akses Materi & Tugas</h3>
                <p>Langkah-langkah praktis mengakses platform pembelajaran, mengunduh materi kuliah, dan mengirimkan
                    tugas.</p>
            </div>

            <div class="instruction-card">
                <div class="card-number">03</div>
                <span class="card-icon">🔑</span>
                <h3>Lupa Password SSO</h3>
                <p>Prosedur reset kata sandi mandiri untuk layanan Single Sign-On (SSO) universitas.</p>
            </div>
        </div>

        <p class="content-text">
            Optimalkan pengalaman digital Anda dengan mengikuti panduan teknis yang telah kami susun secara praktis,
            termasuk keamanan data dan koneksi <span class="highlight">WI-FI</span> kampus.
        </p>
    </main>

    <footer>
        <div class="container">
            <p>Copyright &copy; 2026 Universitas Merdeka Malang. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Fitur Sticky Navbar
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('.navbar');
            nav.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Fitur Pencarian Real-time
        const searchInput = document.getElementById('guideSearch');
        searchInput.addEventListener('keyup', function () {
            const term = searchInput.value.toLowerCase();
            const cards = document.querySelectorAll('.instruction-card');

            cards.forEach(card => {
                const title = card.querySelector('h3').innerText.toLowerCase();
                const desc = card.querySelector('p').innerText.toLowerCase();
                if (title.includes(term) || desc.includes(term)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>