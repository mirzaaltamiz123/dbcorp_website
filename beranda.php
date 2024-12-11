<?php
// Memasukkan file konfigurasi dan navbar
include '../includes/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - dbcorp</title>
    <!-- Menyertakan Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menyertakan CSS tambahan -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar (sudah di-include di atas) -->

    <!-- Konten Utama -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4">Selamat Datang di dbcorp</h1>
                <p class="lead">Sistem informasi perusahaan untuk mengelola data pegawai, departemen, dan administrasi. Gunakan menu navigasi untuk mengakses fitur lainnya.</p>
                <hr>
                <p>Beranda ini memberikan gambaran singkat tentang sistem CorpSys. Kami membantu perusahaan mengelola berbagai data administrasi dengan mudah dan efisien.</p>
            </div>
            <div class="col-md-4">
                <!-- Gambar Beranda -->
                <img src="../images/beranda_image.jpg" alt="Beranda" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

    <!-- Footer (sudah di-include di bawah) -->

    <!-- Menyertakan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// Memasukkan footer
include '../includes/footer.php';
?>
