<?php
include '../db/db.php'; // Koneksi database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrak Kerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Kontrak Kerja Karyawan</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Karyawan</th>
                    <th>Posisi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM kontrak_kerja";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['nama_karyawan']}</td>
                                <td>{$row['posisi']}</td>
                                <td>{$row['tanggal_mulai']}</td>
                                <td>{$row['tanggal_selesai']}</td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Tidak ada data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
