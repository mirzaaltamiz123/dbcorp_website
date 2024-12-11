<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departemen</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Daftar Departemen</h2>
        <ul>
            <li>Teknologi Informasi</li>
            <li>Sumber Daya Manusia</li>
            <li>Keuangan</li>
            <li>Pemasaran</li>
            <li>Operasional</li>
        </ul>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>

<?php
include 'includes/navbar.php';
?>

<div class="container mt-5">
    <h1>Departemen</h1>
    <p>Di halaman ini, Anda dapat mengelola data departemen perusahaan.</p>

    <!-- Contoh daftar departemen -->
    <ul class="list-group mt-4">
        <li class="list-group-item">Teknologi Informasi</li>
        <li class="list-group-item">Sumber Daya Manusia</li>
        <li class="list-group-item">Keuangan</li>
        <li class="list-group-item">Operasional</li>
    </ul>
</div>

<?php
include 'includes/footer.php';
?>
