<?php
// Pastikan koneksi database sudah benar
include '../functions/db.php'; // Ganti dengan path yang sesuai untuk file db.php Anda
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles for Better UI */
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-body {
            padding: 2rem;
        }
        .modal-content {
            border-radius: 10px;
        }
        .modal-header {
            background-color: #343a40;
            color: white;
        }
        .modal-body {
            max-height: 400px;
            overflow-y: auto;
        }
        footer {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-5">
    <h2 class="text-center mb-4 text-dark">Administrasi Perusahaan</h2>
        <div class="row">
            <!-- Menu Penggajian -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title">Penggajian</h5>
                        <p class="card-text">Kelola informasi penggajian karyawan perusahaan dengan mudah dan efisien.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#penggajianModal">Lihat Penggajian</button>
                    </div>
                </div>
            </div>

            <!-- Menu Jadwal Kerja -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jadwal Kerja</h5>
                        <p class="card-text">Atur dan kelola jadwal kerja karyawan dengan sistem yang efisien dan fleksibel.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jadwalKerjaModal">Lihat Jadwal Kerja</button>
                    </div>
                </div>
            </div>

            <!-- Menu Kontrak Kerja -->
            <div class="col-md-4 mb-3">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kontrak Kerja</h5>
                        <p class="card-text">Kelola kontrak kerja karyawan dengan sistem yang aman dan mudah diakses.</p>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kontrakKerjaModal">Lihat Kontrak Kerja</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Penggajian -->
    <div class="modal fade" id="penggajianModal" tabindex="-1" aria-labelledby="penggajianModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="penggajianModalLabel">Data Penggajian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Karyawan</th>
                                <th>Jabatan</th>
                                <th>Gaji Pokok</th>
                                <th>Tunjangan</th>
                                <th>Total Gaji</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Query untuk menampilkan data penggajian
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
            </div>
        </div>
    </div>

    <!-- Modal Jadwal Kerja -->
    <div class="modal fade" id="jadwalKerjaModal" tabindex="-1" aria-labelledby="jadwalKerjaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jadwalKerjaModalLabel">Data Jadwal Kerja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Karyawan</th>
                                <th>Hari Kerja</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Query untuk menampilkan data jadwal kerja
                            $sql = "SELECT * FROM jadwal_kerja";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $no = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>{$no}</td>
                                            <td>{$row['nama_karyawan']}</td>
                                            <td>{$row['hari']}</td>
                                            <td>{$row['jam_masuk']}</td>
                                            <td>{$row['jam_keluar']}</td>
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
            </div>
        </div>
    </div>

    <!-- Modal Kontrak Kerja -->
    <div class="modal fade" id="kontrakKerjaModal" tabindex="-1" aria-labelledby="kontrakKerjaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kontrakKerjaModalLabel">Data Kontrak Kerja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Karyawan</th>
                                <th>Posisi</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Query untuk menampilkan data kontrak kerja
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
                                echo "<tr><td colspan='6' class='text-center'>Tidak ada data.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p>&copy; 2024 dbcorp - Semua Hak Dilindungi.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-white">Informasi Perusahaan</a></li>
                <li class="list-inline-item"><a href="#" class="text-white">Kebijakan dan Privasi</a></li>
                <li class="list-inline-item"><a href="#" class="text-white">Bantuan dan Dukungan</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
