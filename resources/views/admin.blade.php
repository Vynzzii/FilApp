<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Raleway:wght@500&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('/img/Zayn.jpg') no-repeat center center/cover;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }
        .container {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
        }
        h1 {
            font-size: 48px;
            margin: 0;
            font-family: 'Dancing Script', cursive;
            color: #FFD700;
        }
        h2 {
            font-size: 24px;
            margin: 10px 0;
            font-family: 'Raleway', sans-serif;
            color: #FF4500;
        }
        p {
            font-size: 18px;
            margin: 5px 0 20px;
            font-family: 'Raleway', sans-serif;
            color: #66e8ce;
        }
        .btn {
            font-size: 18px;
            font-weight: bold;
            color: white;
            background-color: black;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s, transform 0.3s;
            margin: 10px 0;
        }
        .btn:hover {
            background-color: orange;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG</h1>
        <h2>WEBSITE VYN</h2>
        <p>parabotan<br>for you</p>
        <a href="/admin" class="btn">Login</a>
    </div>
</body>
</html>
