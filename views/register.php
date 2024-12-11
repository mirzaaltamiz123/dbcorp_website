<?php
require_once '../functions/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memasukkan data ke database
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        // Redirect ke halaman login jika registrasi sukses
        header("Location: login.php");
        exit;
    } else {
        // Jika gagal, tampilkan pesan error
        $error = "Gagal mendaftar, silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Memuat Bootstrap dan CSS Kustom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        body {
            background: #f7f9fc;
        }
        .register-container {
            max-width: 450px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
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
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="register-container">
            <!-- Judul Halaman -->
            <h2 class="text-center mb-4">Buat Akun Baru</h2>
            <p class="text-muted text-center mb-4">Daftar untuk mendapatkan akses ke sistem.</p>

            <!-- Pesan Error -->
            <?php if (isset($error)): ?>
                <div class="alert alert-danger text-center"><?= $error ?></div>
            <?php endif; ?>

            <!-- Form Register -->
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama pengguna" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
                <p class="text-center mt-3">
                    Sudah punya akun? <a href="login.php" class="link-secondary">Masuk di sini</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
