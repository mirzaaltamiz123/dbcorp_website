<?php
include '../db/db.php'; // Koneksi database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Penggajian Karyawan</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Karyawan</th>
                    <th>Jabatan</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan</th>
                    <th>Total Gaji</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM penggajian";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['nama_karyawan']}</td>
                                <td>{$row['jabatan']}</td>
                                <td>Rp " . number_format($row['gaji_pokok'], 0, ',', '.') . "</td>
                                <td>Rp " . number_format($row['tunjangan'], 0, ',', '.') . "</td>
                                <td>Rp " . number_format($row['total_gaji'], 0, ',', '.') . "</td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Tidak ada data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
