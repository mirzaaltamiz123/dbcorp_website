<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Pengaturan Sistem</h2>
        <p>Sesuaikan konfigurasi sistem sesuai kebutuhan perusahaan.</p>
        <ul>
            <li><a href="user_management.php">Manajemen Pengguna</a></li>
            <li><a href="role_settings.php">Pengaturan Hak Akses</a></li>
            <li><a href="system_logs.php">Log Sistem</a></li>
        </ul>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>

<?php
include 'includes/navbar.php';
?>

<div class="container mt-5">
    <h1>Pengaturan</h1>
    <p>Halaman ini digunakan untuk mengatur konfigurasi sistem, seperti tema, akses pengguna, dll.</p>
</div>

<?php
include 'includes/footer.php';
?>

