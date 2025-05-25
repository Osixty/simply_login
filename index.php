<?php
// Deskripsi: Script PHP sederhana untuk login dengan validasi username dan password
// Tentukan username dan password yang valid
$valid_username = 'admin';
$valid_password = 'password123';
// Cek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil username dan password dari form
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    // Validasi username dan password
    if ($username === $valid_username && $password === $valid_password) {
        echo 'Login berhasil! Selamat datang, ' . htmlspecialchars($username) . '!';
    } else {
        echo 'Username atau password salah. Silakan coba lagi.';
    }
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 50px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form method="POST" action="">
        <h2>Login Sederhana</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>
</body>

</html>
<?php
// Akhiri script 