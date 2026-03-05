<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan PUSIM</title>
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

        .navbar {
            background-color: #ffffff;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-area {
            display: flex;
            align-items: center;
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

        .nav-links a.active {
            color: #007bff;
        }

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

        .search-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: #777;
            display: flex;
            align-items: center;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('unmer.jpg') no-repeat center center/cover;
            height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .hero-content h2 {
            font-size: 1.8rem;
            font-weight: 400;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 1.1rem;
            font-style: italic;
            opacity: 0.9;
        }

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

            padding: 20px 0;

            background-color: #000;

            color: white;

            margin-top: 40px;

        }
    </style>

</head>

<body>



    <nav class="navbar">

        <div class="container nav-wrapper">

            <div class="logo-area">

                <img src="OIP.jpeg" alt="Logo" class="logo">

                <span class="brand-name">UNIVERSITAS MERDEKA MALANG</span>

            </div>

            <ul class="nav-links">

                <li><a href="beranda.html">Beranda</a></li>

                <li><a href="profil.html">Profil</a></li>

                <li><a href="layanan.html">Layanan</a></li>

                <li><a href="#" class="active">Panduan</a></li>

                <li><a href="contact.html">Contact</a></li>

            </ul>



            <div class="search-container">

                <input type="text" placeholder="Cari..." class="search-input">

                <button class="search-btn">

                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">

                        <circle cx="11" cy="11" r="8"></circle>

                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>

                    </svg>

                </button>

            </div>

        </div>

    </nav>



    <header class="hero">

        <div class="hero-content">

            <h1>PUSIM (Pusat Teknologi Informasi dan Komunikasi)</h1>

            <h2>Universitas Merdeka Malang</h2>

            <p>Transformasi Digital dan Layanan Teknologi Informasi Terpadu.</p>

        </div>

    </header>



    <main class="container main-content">

        <p class="content-text">

            Pada halaman panduan ini menyajikan berbagai sumber daya informasi untuk memudahkan sivitas akademika dalam
            memanfaatkan teknologi kampus, seperti beberapa panduan yang merinci tata cara penggunaan sistem akademik
            hingga pengelolaan akun mandiri.

        </p>



        <p class="content-text">

            Kami menyediakan instruksi lengkap untuk mendukung aktivitas perkuliahan anda, seperti beberapa panduan yang
            membahas tentang:

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
                    tugas tepat waktu.</p>

            </div>

        </div>



        <p class="content-text">

            Apabila anda mengalami kendala saat mengakses layanan digital kami, silahkan pelajari solusi cepat yang
            tersedia seperti beberapa panduan yang menjelaskan cara mengatasi <span class="highlight">lupa
                password</span>, sinkronisasi akun <span class="highlight">SSO</span>, hingga panduan pengaturan koneksi
            <span class="highlight">WI-FI</span> di area kampus.

        </p>



        <p class="content-text">

            Optimalkan pengalaman digital Anda di Universitas Merdeka Malang dengan mengikuti beberapa panduan yang
            telah kami susun secara praktis, seperti panduan teknis penggunaan sistem informasi hingga tips keamanan
            data pribadi.

        </p>

    </main>



    <footer>

        <div class="container">

            <p>Copyright Universitas Merdeka Malang &copy; 2026. All rights reserved.</p>

        </div>

    </footer>

</body>

</html>