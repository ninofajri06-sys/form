<?php
    session_start();
    if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .box {
            background: #fff;
            padding: 48px 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            width: 360px;
            text-align: center;
        }
        .box h2 {
            margin: 0 0 12px;
            font-size: 24px;
            color: #222;
        }
        .box p {
            color: #666;
            font-size: 15px;
            margin: 0;
        }
        .icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
        hr {
            border: none;
            border-top: 1px solid #eee;
            margin: 24px 0;
        }
        .info {
            font-size: 13px;
            color: #999;
        }
        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 9px 24px;
            background: #e74c3c;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }
        .logout-btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="icon">🏠</div>
        <h2 align="center">Dashboard</h2>
        <p align="center">&#128512 &#128512 &#128512 WELCOME &#128512 &#128512 &#128512</p>
        <hr>
        <p class="info">Anda berhasil masuk!</p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>