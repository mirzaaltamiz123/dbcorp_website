<?php
require_once '../functions/auth.php';
require_once '../functions/db.php';

if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

$query = "SELECT * FROM employees";
$result = $conn->query($query);
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
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Dashboard Pegawai</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Departemen</th>
                    <th>Jabatan</th>
                    <th>Tanggal Bergabung</th>
                    <th>Status Kepegawaian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['departemen'] ?></td>
                        <td><?= $row['jabatan'] ?></td>
                        <td><?= $row['tanggal_bergabung'] ?></td>
                        <td><?= $row['status_kepegawaian'] ?></td>
                        <td>
                            <a href="edit-pegawai.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete-pegawai.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="create-pegawai.php" class="btn btn-primary">Tambah Pegawai</a>
    </div>

    <?php include '../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>