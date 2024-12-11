<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departemen</title>
    <!-- Memuat CSS eksternal -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <!-- Header Halaman -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Daftar Departemen</h2>
            <p class="text-muted">Lihat berbagai departemen yang ada di perusahaan kami.</p>
        </div>

        <!-- Daftar Departemen dalam Kartu -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://drive.google.com/thumbnail?id=1yvf5viZnKwY_y5Mujb3bcI4iMY9vOmXm" class="card-img-top" alt="Teknologi Informasi">
                    <div class="card-body">
                        <h5 class="card-title">Teknologi Informasi</h5>
                        <a href="departemen_detail.php?departemen=teknologi_informasi" class="btn btn-outline-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://drive.google.com/thumbnail?id=1ysZ42j6nv6yWzMO7saNEwdOzCBefjFW7" class="card-img-top" alt="Sumber Daya Manusia">
                    <div class="card-body">
                        <h5 class="card-title">Sumber Daya Manusia</h5>
                        <a href="departemen_detail.php?departemen=sumber_daya_manusia" class="btn btn-outline-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://drive.google.com/thumbnail?id=1z89Du-GeKFXROQlQXW0fgFNyzk8spD1P" class="card-img-top" alt="Keuangan">
                    <div class="card-body">
                        <h5 class="card-title">Keuangan</h5>
                        <a href="departemen_detail.php?departemen=keuangan" class="btn btn-outline-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://drive.google.com/thumbnail?id=1z0V285kOg6S0mC_bo7m3j0k3D3QTlm3B" class="card-img-top" alt="Pemasaran">
                    <div class="card-body">
                        <h5 class="card-title">Pemasaran</h5>
                        <a href="departemen_detail.php?departemen=pemasaran" class="btn btn-outline-primary">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="https://drive.google.com/thumbnail?id=1zHdfz6D5qDq7WEWqcDggqlaHaOPe3WPS" class="card-img-top" alt="Operasional">
                    <div class="card-body">
                        <h5 class="card-title">Operasional</h5>
                        <a href="departemen_detail.php?departemen=operasional" class="btn btn-outline-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
