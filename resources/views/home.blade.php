<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELSTHETIC BAG STORE</title>
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
            justify-content: center;
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

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }

        .product {
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid #d4a5f7;
            border-radius: 10px;
            text-align: center;
            width: 250px;
            padding: 1rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product h3 {
            margin: 1rem 0;
            color: #4a154b;
        }

        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
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
        <h1>ELSTHETIC BAG STORE</h1>
        <p>Beautiful and trendy bags inspired by nature's blossoms.</p>
    </header>

    <section class="products" id="products">
        <div class="product">
            <img src="img/floral.jpeg" alt="Bag 1">
            <h3>Floral Tote Bag</h3>
            <p>Rp. 250.000</p>
        </div>
        <div class="product">
            <img src="img/backbag.jpeg" alt="Bag 2">
            <h3>Blossom Backpack</h3>
            <p>Rp. 300.000</p>
        </div>
        <div class="product">
            <img src="img/petal bag.jpeg" alt="Bag 3">
            <h3>Petal Clutch</h3>
            <p>Rp. 200.000</p>
        </div>
    </section>

    <footer>
        &copy; 2024 Flower Bag Store. All rights reserved.
    </footer>
</body>
</html>