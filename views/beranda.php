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
    <!-- Menyertakan Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Menyertakan CSS tambahan -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar (sudah di-include di atas) -->

    <!-- Hero Section -->
    <div class="bg-dark text-light py-5">
        <div class="container text-center">
            <h1 class="display-3">Selamat Datang di <span class="text-primary">dbcorp</span></h1>
            <p class="lead">Mitra terpercaya dalam solusi manajemen data perusahaan Anda.</p>
            <p>Kami hadir untuk memberikan sistem manajemen data yang efisien, aman, dan inovatif demi mendukung kemajuan bisnis Anda.</p>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://media.istockphoto.com/id/458610377/id/foto/halaman-beranda-pinterest.jpg?s=170667a&w=0&k=20&c=abpOcd12v4eFsH4CRTqL8up3PpAvZXubIMZePWGEt4Y=" alt="Tentang dbcorp" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="text-primary mb-3">Tentang Kami</h2>
                <p>dbcorp adalah platform berbasis teknologi yang dirancang untuk membantu perusahaan Anda mengelola data dengan lebih baik. Kami percaya bahwa pengelolaan data yang terstruktur adalah kunci kesuksesan bisnis modern.</p>
                <p>Dengan teknologi mutakhir, tim kami berkomitmen untuk memberikan layanan yang andal, fleksibel, dan mudah diintegrasikan.</p>
                <a href="../views/tentang_kami.php" class="btn btn-outline-primary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center text-primary mb-4">Layanan Kami</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-database fa-3x text-primary mb-3"></i>
                    <h4>Pengelolaan Data</h4>
                    <p>Kemudahan dalam menyimpan, mengakses, dan mengelola data penting perusahaan Anda.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                    <h4>Analisis Bisnis</h4>
                    <p>Gunakan data untuk mengambil keputusan strategis dengan analisis yang mendalam.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-shield-alt fa-3x text-warning mb-3"></i>
                    <h4>Keamanan Data</h4>
                    <p>Pastikan data perusahaan Anda terlindungi dengan sistem keamanan terbaik.</p>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Menyertakan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
