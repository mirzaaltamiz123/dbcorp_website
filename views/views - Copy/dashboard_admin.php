<?php
require_once '../functions/auth.php';
require_once '../functions/db.php';

if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

$query = "SELECT * FROM users";
$result = $conn->query($query);
?>

<?php
// Pastikan koneksi ke database sudah ada
require_once '../functions/db.php'; // sesuaikan jalur file db.php jika perlu

// Ambil data pegawai dari tabel employees
$query = "SELECT id, nama, departemen, jabatan, tanggal_bergabung, status_kepegawaian FROM employees"; // Pastikan 'id' dan 'nama' diambil
$result = $conn->query($query);

// Inisialisasi array untuk menyimpan data pegawai
$employees = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Dashboard Admin</h2>
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
            <table class="table table-bordered">
    <thead>
        <tr>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($employees)): ?>
            <tr>
                <td colspan="3" class="text-center">Tidak ada data pegawai.</td>
            </tr>
        <?php else: ?>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= htmlspecialchars($employee['id']) ?></td>
                    <td><?= htmlspecialchars($employee['nama']) ?></td>
                    <td><?= htmlspecialchars($employee['departemen']) ?></td>
                    <td><?= htmlspecialchars($employee['jabatan']) ?></td>
                    <td><?= htmlspecialchars($employee['tanggal_bergabung']) ?></td>
                    <td><?= htmlspecialchars($employee['status_kepegawaian']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= urlencode($employee['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= urlencode($employee['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
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
                            <a href="edit-user.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete-user.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <?php include '../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>