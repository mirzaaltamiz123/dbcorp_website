<?php
require_once '../functions/auth.php';
require_once '../functions/db.php';

if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $departemen = $_POST['departemen'];
    $jabatan = $_POST['jabatan'];
    $tanggal_bergabung = $_POST['tanggal_bergabung'];
    $status_kepegawaian = $_POST['status_kepegawaian'];

    $query = "INSERT INTO employees (nama, departemen, jabatan, tanggal_bergabung, status_kepegawaian) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $nama, $departemen, $jabatan, $tanggal_bergabung, $status_kepegawaian);

    if ($stmt->execute()) {
        header("Location: dashboard-pegawai.php");
        exit;
    } else {
        $error = "Gagal menambahkan data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Tambah Pegawai</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="departemen" class="form-label">Departemen</label>
                <input type="text" class="form-control" id="departemen" name="departemen" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_bergabung" class="form-label">Tanggal Bergabung</label>
                <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" required>
            </div>
            <div class="mb-3">
                <label for="status_kepegawaian" class="form-label">Status Kepegawaian</label>
                <select class="form-select" id="status_kepegawaian" name="status_kepegawaian" required>
                    <option value="Tetap">Tetap</option>
                    <option value="Kontrak">Kontrak</option>
                    <option value="Magang">Magang</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>