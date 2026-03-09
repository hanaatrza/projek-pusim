<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact PUSIM - UNMER Malang</title>

    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-32x32.png">

    <link href="" rel="stylesheet">
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .nav-links a.active,
        .nav-links a:hover {
            color: #007bff;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/unmer.jpg') no-repeat center center/cover;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .main-content {
            flex: 1;
            padding: 60px 0;
        }

        .contact-section {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }

        .info-card {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 20px;
            border-left: 5px solid #007bff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            text-align: left;
        }

        .info-card strong {
            display: block;
            color: #007bff;
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        footer {
            text-align: center;
            padding: 30px 0;
            background-color: #1a1a1a;
            color: #ffffff;
            width: 100%;
            margin-top: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container nav-wrapper">
            <a href="{{ url('/') }}" class="logo-area">
                <img src="/OIP.jpeg" alt="Logo" class="logo">
                <span class="brand-name">UNIVERSITAS MERDEKA MALANG</span>
            </a>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/profil') }}">Profil</a></li>
                <li><a href="{{ url('/layanan') }}">Layanan</a></li>
                <li><a href="{{ url('/panduan') }}">Panduan</a></li>
                <li><a href="{{ url('/contact') }}" class="active">Contact</a></li>
            </ul>
        </div>
    </nav>
    <header class="hero">
        <div class="hero-content">
            <h1>HUBUNGI KAMI</h1>
            <p>Pusat Teknologi Informasi dan Multimedia (PUSIM)</p>
        </div>
    </header>
    <main class="main-content">
        <div class="container">
            <div class="contact-section">
                <h2 style="margin-bottom: 35px; font-family: Montserrat;">Informasi Kontak</h2>
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
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Copyright &copy; 2026 Universitas Merdeka Malang. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>