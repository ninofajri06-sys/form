<?php
    session_start(); 

    $user_benar = "admin";
    $pass_benar = "admin123";
    $pesan = ""; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == $user_benar && $password == $pass_benar) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $pesan = "Username atau password salah!";
        }
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
            padding: 36px 32px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            width: 320px;
        }
        table {
            width: 100%;
            border: none !important;
            border-collapse: collapse;
        }
        table tr td {
            border: none !important;
            padding: 4px 0 !important;
            display: block;
        }
        table tr td:first-child {
            font-size: 13px;
            color: #555;
            margin-top: 12px;
        }
        table tr td input[type="text"],
        table tr td input[type="password"] {
            width: 100%;
            padding: 9px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            outline: none;
        }
        table tr td input[type="text"]:focus,
        table tr td input[type="password"]:focus {
            border-color: #4a90e2;
        }
        table tr td[colspan="2"] {
            margin-top: 18px;
        }
        table tr td input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #4a90e2;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        table tr td input[type="submit"]:hover {
            background: #357abd;
        }
        .error {
            margin-top: 14px;
            padding: 9px 12px;
            background: #fff0f0;
            border: 1px solid #f5c6c6;
            border-radius: 5px;
            color: #c0392b;
            font-size: 13px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2 align="center">Login</h2>
        <form action="#" method="POST">
            <table border="1" align="center" cellpadding="8" cellspacing="0">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Masukkan username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Masukkan password"></td>
                </tr> <!-- ✅ Karakter 's' dihapus -->
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if (!empty($pesan)) { 
                echo "<h2 align='center'>" . $pesan . "</h2>";
            }
        ?>
    </div>
</body>
</html>