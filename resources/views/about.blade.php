<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Flower Bag Store</title>
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

        header p {
            font-size: 1.2rem;
            margin-top: 1rem;
            color: #4a154b;
        }

        .about-section {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 2rem;
            margin: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .about-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #4a154b;
        }

        .about-section p {
            font-size: 1rem;
            line-height: 1.6;
            color: #4a154b;
        }

        .about-section img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin-top: 1rem;
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
        <h1>ABOUT US ELSTHETIC BAG STORE</h1>
        <p>Learn more about us and our story.</p>
    </header>

    <section class="about-section">
        <h2>Tentang Kami</h2>
        <p>Flower Bag Store didirikan dengan semangat untuk memadukan keanggunan dan kepraktisan. Terinspirasi oleh keindahan alam, tas kami dirancang untuk menghadirkan sentuhan pesona dan keanggunan pada gaya sehari-hari Anda. Dari warna cerah bunga-bunga yang bermekaran hingga kelopak bunga berwarna pastel yang lembut, setiap tas menceritakan kisah seni dan kepedulian.
        </p>

        <img src="img\model.jpeg" alt="Our Store">
    </section>

    <footer>
        &copy; 2024 Flower Bag Store. All rights reserved.
    </footer>
</body>
</html>
