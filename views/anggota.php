<?php
session_start();
require_once '../functions/auth.php';
require_once '../functions/db.php';

// Pastikan pengguna sudah login
if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

// Ambil data anggota dari database
$query = "SELECT * FROM pegawai";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - dbcorp</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <style>
        /* Memperbaiki lebar kolom nama dan pendidikan terakhir agar teks tidak kebawah */
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table th:nth-child(2), .table td:nth-child(2) {
            width: 200px; /* Lebarkan kolom Nama */
            white-space: nowrap; /* Menghindari teks turun ke bawah */
        }

        .table th:nth-child(9), .table td:nth-child(9) {
            width: 180px; /* Lebarkan kolom Pendidikan Terakhir */
            white-space: nowrap; /* Menghindari teks turun ke bawah */
        }

        /* Styling tambahan untuk tabel dan teks */
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th, .table td {
            padding: 8px 12px; /* Padding yang lebih kecil */
            font-size: 14px;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
        }

        .table td {
            background-color: #f8f9fa;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .info-card {
            min-height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    // Memasukkan navbar
    $navbarPath = '../includes/navbar.php';
    if (file_exists($navbarPath)) {
        include $navbarPath;
    } else {
        echo '<p class="text-danger text-center">Navbar tidak ditemukan!</p>';
    }
    ?>

    <div class="container mt-5">
        <!-- Judul Halaman -->
        <h1 class="mb-4 text-center">Data Anggota Perusahaan</h1>
        <p class="lead text-center">Temukan informasi lengkap mengenai anggota perusahaan kami di sini.</p>

        <!-- Informasi Ringkasan -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="info-card bg-primary text-white">
                    <div>
                        <h6>Total Anggota</h6>
                        <p class="fs-4 mb-0"><?= $result->num_rows; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card bg-success text-white">
                    <div>
                        <h6>Departemen</h6>
                        <p class="mb-0">Teknologi Informasi, SDM, Keuangan, Pemasaran, Operasional</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card bg-warning text-white">
                    <div>
                        <h6>Aktivitas</h6>
                        <p class="mb-0">Proyek, Pelatihan, Evaluasi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Data Anggota -->
        <h3 class="mt-4 mb-3">Daftar Anggota</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Departemen</th>
                        <th>Jabatan</th>
                        <th>Tanggal Bergabung</th>
                        <th>Status Kepegawaian</th>
                        <th>Tempat Tinggal</th>
                        <th>No. Telepon</th>
                        <th>Pendidikan Terakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td class="text-center"><?= htmlspecialchars($row['id']); ?></td>
                                <td><?= htmlspecialchars($row['nama']); ?></td>
                                <td><?= htmlspecialchars($row['departemen']); ?></td>
                                <td><?= htmlspecialchars($row['jabatan']); ?></td>
                                <td><?= htmlspecialchars($row['tanggal_bergabung']); ?></td>
                                <td><?= htmlspecialchars($row['status_kepegawaian']); ?></td>
                                <td><?= htmlspecialchars($row['tempat_tinggal']); ?></td>
                                <td><?= htmlspecialchars($row['no_telepon']); ?></td>
                                <td><?= htmlspecialchars($row['pendidikan_terakhir']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-center">Tidak ada data anggota.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    // Memasukkan footer
    $footerPath = '../includes/footer.php';
    if (file_exists($footerPath)) {
        include $footerPath;
    } else {
        echo '<p class="text-danger text-center">Footer tidak ditemukan!</p>';
    }
    ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
