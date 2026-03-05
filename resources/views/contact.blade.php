<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact PUSIM - UNMER Malang</title>

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

        /* Link Active Otomatis di Laravel */
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

        /* HERO SECTION */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/unmer.jpg') no-repeat center center/cover;
            height: 350px;
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
        }

        /* CONTACT SECTION */
        .contact-section {
            padding: 60px 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .info-card {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 20px;
            border-left: 5px solid #007bff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .info-card strong {
            display: block;
            color: #007bff;
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #eee;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 14px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: inherit;
        }

        .submit-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: #0056b3;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 30px 0;
            background-color: #1a1a1a;
            color: #888;
            font-size: 14px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .contact-section {
                grid-template-columns: 1fr;
            }

            .nav-links {
                display: none;
            }

            /* Sembunyikan menu di mobile untuk simpelnya */
            .hero-content h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="container nav-wrapper">
            <a href="{{ url('/') }}" class="logo-area">
                <img src="/OIP.jpeg" alt="Logo" class="logo">
                <span class="brand-name">UNMER MALANG</span>
            </a>

            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/profil') }}">Profil</a></li>
                <li><a href="{{ url('/layanan') }}">Layanan</a></li>
                <li><a href="{{ url('/panduan') }}">Panduan</a></li>
                <li><a href="{{ url('/contact') }}" class="active">Contact</a></li>
            </ul>

            <div class="search-container">
                <input type="text" placeholder="Cari..." class="search-input">
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-content">
            <h1>HUBUNGI KAMI</h1>
            <p>Pusat Teknologi Informasi dan Komunikasi (PUSIM)</p>
        </div>
    </header>

    <main class="container">
        <div class="contact-section">
            <div class="contact-info">
                <h2 style="margin-bottom: 25px; font-family: 'Montserrat';">Informasi Kontak</h2>

                <div class="info-card">
                    <strong>Alamat</strong>
                    <p>Gedung Rektorat Lt. 1, Universitas Merdeka Malang</p>
                </div>

                <div class="info-card">
                    <strong>Telepon</strong>
                    <p>0341-568395</p>
                </div>

                <div class="info-card">
                    <strong>Email Support</strong>
                    <p>pusim@unmer.ac.id</p>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="margin-bottom: 20px;">Kirim Pesan</h3>
                <form>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" placeholder="Contoh: Budi Darmawan">
                    </div>
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" placeholder="nama@email.com">
                    </div>
                    <div class="form-group">
                        <label>Isi Pesan</label>
                        <textarea rows="4" placeholder="Apa yang bisa kami bantu?"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Kirim Sekarang</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>Copyright &copy; 2026 Universitas Merdeka Malang. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Efek Navbar saat scroll
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>