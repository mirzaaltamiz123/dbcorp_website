<?php
// Mulai sesi untuk memverifikasi status login
session_start();
require_once '../functions/auth.php'; // Pastikan file auth.php benar
require_once '../functions/db.php';  // Pastikan file db.php benar

// Jika ada data POST (form dikirimkan)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']); // Bersihkan input dari spasi ekstra
    $password = trim($_POST['password']);

    // Cek kredensial login
    if (login($username, $password)) {
        // Jika login berhasil, redirect ke halaman dashboard
        header("Location: dashboard_pegawai.php");
        exit; // Menghentikan eksekusi lebih lanjut
    } else {
        // Jika login gagal, tampilkan pesan error
        $error = "Kredensial tidak valid. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background image: url(perusahaan.jpg)#f7f9fc;

        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            font-weight: bold;
            color: #343a40;
        }
        .btn-primary {
            width: 100%;
        }
        .form-label {
            font-weight: 500;
        }
        .link-secondary {
            text-decoration: none;
        }
        .link-secondary:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Container Login -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-container">
            <h2 class="text-center mb-4">Selamat Datang</h2>
            <p class="text-muted text-center mb-4">Masukkan kredensial Anda untuk melanjutkan.</p>

            <!-- Pesan Error -->
            <?php if (isset($error)): ?>
                <div class="alert alert-danger text-center"><?= $error ?></div>
            <?php endif; ?>

            <!-- Form Login -->
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama pengguna" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                    <div class="mb-3">
                    <label for="role" class="form-label">Peran</label>
                    <input type="role" class="form-control" id="role" name="role" placeholder="Masukkan peran" required> 
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <p class="text-center mt-3">
                    Belum punya akun? <a href="register.php" class="link-secondary">Daftar di sini</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
