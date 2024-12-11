<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <!-- CSS Eksternal -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Styling Khusus untuk Halaman Pengaturan */
        body {
            background-color: #f8f9fa;
        }
        .section-title {
            font-weight: bold;
            font-size: 1.7rem;
            color: #343a40;
            margin-bottom: 30px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-top: 15px;
        }
        .card-text {
            font-size: 0.95rem;
            color: #6c757d;
            margin: 10px 0 15px;
        }
        .icon-circle {
            font-size: 2rem;
            padding: 15px;
            border-radius: 50%;
            color: white;
            background-color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <!-- Judul Halaman -->
        <div class="text-center mb-5">
            <h2 class="section-title">Pengaturan Sistem</h2>
        </div>

        <!-- Grid Pengaturan -->
        <div class="row justify-content-center">
            <!-- Manajemen Pengguna -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-circle mx-auto">
                            <i class="bi bi-people"></i>
                        </div>
                        <h5 class="card-title">Manajemen Pengguna</h5>
                        <p class="card-text">Kelola data pengguna di sistem Anda, termasuk menambah atau menghapus pengguna.</p>
                        <a href="user_management.php" class="btn btn-primary">Kelola Pengguna</a>
                    </div>
                </div>
            </div>
            <!-- Pengaturan Umum -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-circle mx-auto">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h5 class="card-title">Pengaturan Umum</h5>
                        <p class="card-text">Sesuaikan pengaturan umum seperti bahasa, zona waktu, dan lainnya.</p>
                        <a href="general_settings.php" class="btn btn-primary">Atur Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Log Aktivitas -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-circle mx-auto">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <h5 class="card-title">Log Aktivitas</h5>
                        <p class="card-text">Pantau log sistem untuk memastikan aktivitas berjalan dengan aman.</p>
                        <a href="system_logs.php" class="btn btn-primary">Lihat Log</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
