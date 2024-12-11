<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Pastikan path untuk navbar dan footer benar -->
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Penggajian Karyawan</h2>
        <p class="text-muted text-center mb-4">Kelola informasi penggajian karyawan di sini.</p>

        <div class="row">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Gaji</h5>
                        <p class="card-text">Tampilkan rincian gaji karyawan dan pengaturan pembayaran.</p>
                        <!-- Form atau konten penggajian -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
