<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background: linear-gradient(135deg, #f3e5f5, #e1bee7); 
            padding: 40px; 
            border-radius: 8px; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
            border: 1px solid #e0e0e0; 
        }

        h1 {
            color: #003366; 
            font-size: 24px; 
            margin-bottom: 20px; 
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px; 
            margin-bottom: 40px; 
        }

        button {
            background-color: #4CAF50; 
            color: white; 
            padding: 15px 30px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s; 
        }

        button:hover {
            background-color: #45a049; 
            transform: translateY(-2px); 
        }

        .created-by {
            font-size: 12px; 
            color: #555; 
            margin: 30px 0 5px; 
        }

        .author-info {
            font-size: 12px; 
            color: #003366; 
            margin-top: 5px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG</h1>
        <div class="button-container">
            <!-- Menggunakan anchor (a) untuk mengarahkan ke halaman login atau daftar -->
            <a href="login">
                <button class="login-button">Login</button>
            </a>
            <a href="Daftar">
                <button class="register-button">Daftar</button>
            </a>
        </div>
        <p class="created-by">created by</p>
        <p class="author-info">syafira bilqis farhani, MI22B, 2257401043</p>
    </div>
</body>
</html>
