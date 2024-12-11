<?php
// Ambil data departemen dari parameter URL
$departemen = isset($_GET['departemen']) ? $_GET['departemen'] : '';

// Penjelasan untuk setiap departemen
$descriptions = [
    'teknologi_informasi' => 'Mengelola infrastruktur TI perusahaan, termasuk perangkat keras, perangkat lunak, dan jaringan.',
    'sumber_daya_manusia' => 'Mengelola karyawan, rekrutmen, pelatihan, dan pengembangan sumber daya manusia perusahaan.',
    'keuangan' => 'Bertanggung jawab atas pengelolaan anggaran, laporan keuangan, dan kebijakan fiskal perusahaan.',
    'pemasaran' => 'Mempromosikan produk atau layanan perusahaan dan mengelola hubungan dengan pelanggan.',
    'operasional' => 'Mengelola kegiatan operasional harian perusahaan dan memastikan proses berjalan lancar.'
];

// Validasi dan ambil deskripsi
$description = isset($descriptions[$departemen]) ? $descriptions[$departemen] : 'Departemen tidak ditemukan.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Departemen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.5rem;
            text-align: center;
            font-weight: bold;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        .card-body {
            font-size: 1.2rem;
        }
        .btn-back {
            background-color: #6c757d;
            border: none;
            color: white;
        }
        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Card Detail -->
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header">
                <?= ucwords(str_replace('_', ' ', $departemen)) ?>
            </div>
            <div class="card-body">
                <p class="card-text text-center">
                    <?= htmlspecialchars($description) ?>
                </p>
            </div>
            <div class="card-footer text-center">
                <a href="departemen.php" class="btn btn-back">Kembali ke Daftar Departemen</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
