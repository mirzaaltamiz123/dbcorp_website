<?php
// Sertakan file autentikasi dan koneksi database
require_once '../functions/auth.php';
require_once '../functions/db.php';

// Pastikan pengguna telah login
if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

// Pastikan hanya admin yang bisa mengakses
if ($_SESSION['user']['role'] !== 'admin') {
    die("Akses ditolak! Halaman ini hanya dapat diakses oleh admin.");
}

// Ambil ID pegawai dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!filter_var($id, FILTER_VALIDATE_INT) || $id <= 0) {
    die("ID pegawai tidak valid.");
}

// Ambil data pegawai berdasarkan ID
$query = "SELECT * FROM pegawai WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("Data pegawai tidak ditemukan.");
}

// Jika form di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $departemen = trim($_POST['departemen']);
    $jabatan = trim($_POST['jabatan']);
    $tanggal_bergabung = $_POST['tanggal_bergabung'];
    $status_kepegawaian = $_POST['status_kepegawaian'];

    // Validasi input
    if (empty($nama) || empty($departemen) || empty($jabatan) || empty($tanggal_bergabung) || empty($status_kepegawaian)) {
        $error = "Semua kolom harus diisi.";
    } else {
        // Update data pegawai
        $query = "UPDATE pegawai SET nama = ?, departemen = ?, jabatan = ?, tanggal_bergabung = ?, status_kepegawaian = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssi", $nama, $departemen, $jabatan, $tanggal_bergabung, $status_kepegawaian, $id);

        if ($stmt->execute()) {
            header("Location: dashboard_admin.php?message=success");
            exit;
        } else {
            $error = "Gagal mengubah data pegawai.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Edit Pegawai</h2>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="departemen" class="form-label">Departemen</label>
                <input type="text" class="form-control" id="departemen" name="departemen" value="<?= htmlspecialchars($data['departemen']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= htmlspecialchars($data['jabatan']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_bergabung" class="form-label">Tanggal Bergabung</label>
                <input type="date" class="form-control" id="tanggal_bergabung" name="tanggal_bergabung" value="<?= htmlspecialchars($data['tanggal_bergabung']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="status_kepegawaian" class="form-label">Status Kepegawaian</label>
                <select class="form-select" id="status_kepegawaian" name="status_kepegawaian" required>
                    <option value="Tetap" <?= $data['status_kepegawaian'] === 'Tetap' ? 'selected' : '' ?>>Tetap</option>
                    <option value="Kontrak" <?= $data['status_kepegawaian'] === 'Kontrak' ? 'selected' : '' ?>>Kontrak</option>
                    <option value="Magang" <?= $data['status_kepegawaian'] === 'Magang' ? 'selected' : '' ?>>Magang</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
            <a href="anggota.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Kembali</a>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
