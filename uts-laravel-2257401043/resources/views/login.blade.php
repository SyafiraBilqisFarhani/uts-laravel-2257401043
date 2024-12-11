<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #343a40; 
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background: #007bff; 
            padding: 30px; 
            border-radius: 10px; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
        }

        .title {
            font-size: 24px; 
            color: white; 
            text-align: left; 
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .label {
            display: block;
            color: white; 
            margin-bottom: 5px;
        }

        .input {
            width: 100%;
            padding: 12px; 
            border: 1px solid #ccc; 
            border-radius: 5px;
            background-color: #f8f9fa; 
            box-sizing: border-box; 
            transition: border-color 0.3s; 
        }

        .input:focus {
            border-color: #0056b3; 
            background-color: #ffffff; 
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px; 
        }

        .button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s; 
            width: 48%; 
        }

        .login {
            background-color: #0056b3; 
        }

        .kembali {
            background-color: #dc3545; 
        }

        .button:active {
            opacity: 0.7; 
        }

        .login:active {
            background-color: #004085; 
        }

        .kembali:active {
            background-color: #c82333; 
        }
    </style>
    <title>Halaman Login</title>
</head>
<body>
    <div class="container">
        <h2 class="title">Login</h2>
        <div class="form-group">
            <label class="label" for="email">Email</label>
            <input type="email" id="email" class="input" placeholder="Masukkan email Anda">
        </div>
        <div class="form-group">
            <label class="label" for="password">Password</label>
            <input type="password" id="password" class="input" placeholder="Masukkan password Anda">
        </div>
        <div class="button-group">
            <button class="button login" onclick="redirectHome()">Login</button>
            <button class="button kembali" onclick="redirectWelcome()">Kembali</button>
        </div>
    </div>

    <script>
        // Function to redirect to the Home page
        function redirectHome() {
            window.location.href = "home"; // You can replace with your actual home page URL
        }

        // Function to redirect to the Welcome page
        function redirectWelcome() {
            window.location.href = "welcome"; // You can replace with your actual welcome page URL
        }
    </script>
</body>
</html>
