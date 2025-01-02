<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Elsthetic Bag Store</title>
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

        .contact-section {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 2rem;
            margin: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .contact-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #4a154b;
        }

        .contact-info {
            text-align: left;
            margin-bottom: 2rem;
        }

        .contact-info p {
            margin: 0.5rem 0;
            font-size: 1.1rem;
        }

        .contact-section form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-section input,
        .contact-section textarea,
        .contact-section button {
            font-size: 1rem;
            padding: 0.8rem;
            border: 1px solid #d4a5f7;
            border-radius: 5px;
            outline: none;
        }

        .contact-section input,
        .contact-section textarea {
            background: rgba(255, 255, 255, 0.9);
        }

        .contact-section button {
            background: #d4a5f7;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-section button:hover {
            background: #ff8aa0;
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
        <h1>Contact Elsthetic Bag Store</h1>
    </header>

    <section class="contact-section" id="contact">
        <h2>HUBUNGI KAMI</h2>
        <div class="contact-info">
            <p><strong>Email:</strong>@elstheticbagstore.com</p>
            <p><strong>Instagram:</strong>elstheticbagstore</p>
            <p><strong>WhatsApp:</strong> +62 812-3456-7890</p>
            <p><strong>Phone:</strong> +62 21-98765432</p>
        </div>
    </section>

    <footer>
        &copy; 2024 Elsthetic Bag Store. All rights reserved.
    </footer>
</body>
</html>
