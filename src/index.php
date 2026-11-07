<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Adinda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 { text-align: center; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #666; }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background: #0056b3; }
        .toggle-btn {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #007bff;
            cursor: pointer;
        }
        .register-form { display: none; }
        .db-status {
            background: #e7f5fe;
            color: #0366d6;
            padding: 8px;
            text-align: center;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Status Koneksi Database -->
    <div class="db-status">
        <?php
        $con = new mysqli('mysql', 'root', '123456', 'mysql');
        if ($con->connect_error) {
            echo "Database belum terhubung: " . $con->connect_error;
        } else {
            echo "Database: Connected sukses!";
        }
        ?>
    </div>

    <!-- Form Login -->
    <div id="loginSection" class="login-form">
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit">Masuk</button>
        </form>
        <div class="toggle-btn" onclick="toggleForm()">Belum punya akun? Register</div>
    </div>

    <!-- Form Register -->
    <div id="registerSection" class="register-form">
        <h2>Register</h2>
        <form>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Buat password" required>
            </div>
            <button type="submit">Daftar</button>
        </form>
        <div class="toggle-btn" onclick="toggleForm()">Sudah punya akun? Login</div>
    </div>
</div>

<script>
    function toggleForm() {
        const loginSec = document.getElementById('loginSection');
        const regSec = document.getElementById('registerSection');
        if (loginSec.style.display === 'none') {
            loginSec.style.display = 'block';
            regSec.style.display = 'none';
        } else {
            loginSec.style.display = 'none';
            regSec.style.display = 'block';
        }
    }
</script>

</body>
</html>