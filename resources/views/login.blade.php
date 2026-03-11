<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD - Universitas Merdeka Malang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-blue: #4285f4;
            --unmer-orange: #f57c00;
            --unmer-green: #8cb043;
            --unmer-yellow: #ffcc00;
            --bg-body: #d1e3f8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            background-color: var(--bg-body);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* --- NAVBAR --- */
        .navbar {
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-logo img {
            height: 45px;
        }

        .nav-logo span {
            font-weight: bold;
            color: #333;
            font-size: 16px;
            text-transform: uppercase;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            font-weight: 500;
        }

        .nav-menu a.active {
            color: var(--primary-blue);
            font-weight: bold;
        }

        .nav-search {
            position: relative;
            display: flex;
            align-items: center;
        }

        .nav-search input {
            background-color: #f1f3f4;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 13px;
            width: 150px;
            outline: none;
        }

        /* --- LOGIN CARD --- */
        .content-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 80px;
        }

        .login-card {
            background: white;
            width: 900px;
            max-width: 95%;
            height: 520px;
            display: flex;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .login-left {
            flex: 1;
            /* DISINI GAMBARNYA: Aku ganti ke Unsplash supaya PASTI MUNCUL */
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5)),
                url('/images/malang.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: flex-end;
        }

        .overlay-banner {
            background: var(--unmer-green);
            width: 100%;
            padding: 30px;
            text-align: center;
            color: white;
        }

        .overlay-banner h1 {
            font-size: 26px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .login-right {
            flex: 1.1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-right h2 {
            margin-bottom: 25px;
            color: #333;
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #666;
            font-weight: 600;
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fcfcfc;
            outline: none;
            transition: 0.3s;
        }

        .input-wrapper input:focus {
            border-color: var(--unmer-orange);
        }

        /* Tombol Masuk Warna Kuning Unmer */
        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: var(--unmer-yellow);
            color: #1a4314;
            /* Teks Hijau Tua */
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
            transition: 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-login:hover {
            background-color: #e6b800;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="nav-logo">
            <img src="{{ asset('images/logo-unmer.jpeg') }}" alt="Logo">
            <span>Universitas Merdeka Malang</span>
        </div>

        <ul class="nav-menu">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/profil') }}">Profil</a></li>
            <li><a href="{{ url('/layanan') }}">Layanan</a></li>
            <li><a href="{{ url('/panduan') }}">Panduan</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li><a href="#" class="active">Login</a></li>
        </ul>

        <div class="nav-search">
            <input type="text" placeholder="Cari...">
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="login-card">
            <div class="login-left">
                <div class="overlay-banner">
                    <h1>SIAKAD</h1>
                    <p>Universitas Merdeka Malang</p>
                </div>
            </div>

            <div class="login-right">
                <h2>Selamat Datang</h2>
                @if ($errors->any())
                    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
                        <ul style="margin: 0; padding-left: 20px;">
                            @foreach ($errors->all() as $error)
                                <li style="font-size: 14px;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-wrapper">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-wrapper">
                            <input type="password" name="password" placeholder="Masukkan password Anda" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-login">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>