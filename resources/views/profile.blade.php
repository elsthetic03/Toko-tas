<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Elsthetic Bag Store</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d4a5f7, #fbc2eb);
            color: #4a154b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        nav {
            width: 100%;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            padding: 1rem;
        }

        nav a {
            color: #4a154b;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ff8aa0;
        }

        header {
            text-align: center;
            margin-top: 100px;
        }

        header h1 {
            font-size: 3rem;
            background: linear-gradient(to right, #d4a5f7, #ff8aa0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .profile-section {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 2rem;
            margin: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
        }

        .profile-section::before {
            content: "";
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            z-index: -1;
            background-image: url('https://via.placeholder.com/800x400'); /* Placeholder for store photo */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            filter: blur(10px) brightness(0.7);
            border-radius: 20px;
        }

        .profile-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #4a154b;
        }

        .profile-info {
            text-align: left;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .flower-decor {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 100px;
            height: 100px;
            background-image: url('img/logo.jpeg'); /* Flower decoration */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        footer {
            margin-top: auto;
            padding: 1rem;
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 -4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body>
    <nav>
        <a href="http://127.0.0.1:8000/">Home</a>
        <a href="http://127.0.0.1:8000/profile">Profile</a>
        <a href="http://127.0.0.1:8000/about">About</a>
        <a href="http://127.0.0.1:8000/contact">Contact</a>
    </nav>

    <header>
        <h1>Profile - Elsthetic Bag Store</h1>
    </header>

    <section class="profile-section">
        <div class="flower-decor"></div>
        <h2>About Elsthetic Bag Store</h2>
        <div class="profile-info">
            <p>Elsthetic Bag Store adalah toko tas yang mengedepankan gaya dan kualitas. Kami menyediakan berbagai jenis tas bertema bunga, mulai dari tas fashion, tas kerja, hingga tas travel, yang dirancang dengan penuh keindahan dan fungsionalitas.</p>
            <p>Didirikan pada tahun 2020, Elsthetic Bag Store berkomitmen untuk memberikan produk terbaik kepada pelanggan dengan material berkualitas tinggi dan desain yang selalu mengikuti tren terkini.</p>
            <p>Kami percaya bahwa tas bukan hanya sekadar aksesori, tetapi juga pernyataan gaya dan identitas pribadi. Oleh karena itu, kami selalu berusaha menghadirkan koleksi terbaik untuk memenuhi kebutuhan dan selera Anda.</p>
        </div>
    </section>

    <footer>
        &copy; 2024 Elsthetic Bag Store. All rights reserved.
    </footer>
</body>
</html>
