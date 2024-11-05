<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Yang Penting Merah</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            color: #333;
            background-color: #f5f5f5;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        
        /* Header */
        header {
            background-color: #333;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            color: #fff;
            font-weight: bold;
        }
        nav a:hover {
            background: #555;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }
        .main {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        </style>
</head>
<body>

    <header>
        <div class="logo">Website Keren</div>
        <nav>
            <ul>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="HTML+CSS+JS/index.html">Fortopolio</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="main" id="about">
            <h2>Tentang Kami</h2>
            <p>Kami adalah tim yang berdedikasi untuk membuat pengalaman online Anda lebih baik. Kami menawarkan berbagai layanan menarik dan inovatif.</p>
            <img src="pp2.jpeg" alt="Gambar Keren">
        </div>

        <div class="main" id="services">
            <h2>Layanan Kami</h2>
            <p>Kami menawarkan layanan desain web, pengembangan aplikasi, dan pemasaran digital untuk membantu bisnis Anda tumbuh.</p>
            <img src="https://via.placeholder.com/800x400" alt="Layanan Kami">
        </div>

        <div class="main" id="contact">
            <h2>Kontak Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau ingin bekerja sama, jangan ragu untuk menghubungi kami!</p>
        </div>
    </div>

</body>
</html>
