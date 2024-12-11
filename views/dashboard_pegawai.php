<?php
session_start();
require_once '../functions/auth.php';
require_once '../functions/db.php';

// Periksa apakah pengguna sudah login
if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

// Periksa apakah user_role tersedia dalam session
if (!isset($_SESSION['user_role'])) {
    // Redirect ke login jika role tidak ditemukan
    header("Location: login.php");
    exit;
}

$user_role = $_SESSION['user_role']; // Role pengguna (Admin atau User)

// Query untuk mengambil data pegawai
$query = "SELECT * FROM pegawai";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pegawai</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="fw-bold">Dashboard Pegawai</h2>

        <!-- Tabel Pegawai -->
        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered mt-4">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Departemen</th>
                        <th>Jabatan</th>
                        <th>Status Kepegawaian</th>
                        <!-- Kolom Aksi hanya untuk Admin -->
                        <?php if ($user_role === 'Admin'): ?>
                            <th>Aksi</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['nama']) ?></td>
                            <td><?= htmlspecialchars($row['departemen']) ?></td>
                            <td><?= htmlspecialchars($row['jabatan']) ?></td>
                            <td><?= htmlspecialchars($row['status_kepegawaian']) ?></td>
                            <!-- Tombol Edit dan Hapus hanya untuk Admin -->
                            <?php if ($user_role === 'Admin'): ?>
                                <td>
                                    <a href="edit_pegawai.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete_pegawai.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">Tidak ada data pegawai yang ditemukan.</p>
        <?php endif; ?>

        <!-- Tombol Tambah Pegawai hanya untuk Admin -->
        <?php if ($user_role === 'Admin'): ?>
            <a href="create_pegawai.php" class="btn btn-primary mt-3">Tambah Pegawai</a>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
