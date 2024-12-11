<?php
session_start();
require_once '../functions/auth.php';
require_once '../functions/db.php';

// Pastikan pengguna sudah login
if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

// Pastikan hanya admin yang dapat mengakses
if ($_SESSION['user']['role'] !== 'admin') {
    die("<p class='text-danger text-center'>Akses ditolak! Halaman ini hanya dapat diakses oleh admin.</p>");
}

// Ambil data pegawai dari database
$query = "SELECT * FROM pegawai";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - dbcorp</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
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
        <h1 class="mb-4">Dashboard Admin</h1>
        <p class="lead">Selamat datang di Dashboard Admin. Anda dapat melihat, menambah, mengedit, atau menghapus data pegawai.</p>

        <!-- Tombol Tambah Pegawai -->
        <div class="mb-3">
            <a href="create_pegawai.php" class="btn btn-success"><i class="bi bi-plus-circle"></i> Tambah Pegawai</a>
        </div>

        <!-- Informasi Ringkasan -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Pegawai</h5>
                        <p class="card-text"><?= $result->num_rows; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Divisi</h5>
                        <p class="card-text">Teknologi Informasi, SDM, Keuangan, Pemasaran, Operasional</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Aktivitas</h5>
                        <p class="card-text">Proyek, Pelatihan, Evaluasi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Data Pegawai -->
        <h3 class="mt-4 mb-3">Daftar Pegawai</h3>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Departemen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']); ?></td>
                            <td><?= htmlspecialchars($row['nama']); ?></td>
                            <td><?= htmlspecialchars($row['jabatan']); ?></td>
                            <td><?= htmlspecialchars($row['departemen']); ?></td>
                            <td>
                                <a href="edit_pegawai.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
                                <a href="hapus_pegawai.php?id=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data pegawai.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
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
