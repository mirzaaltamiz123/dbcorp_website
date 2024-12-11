<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota - dbcorp</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h1 class="mb-4">Data Anggota</h1>
        <p class="lead">Berikut adalah informasi dan data lengkap mengenai anggota perusahaan.</p>

        <!-- Informasi Ringkasan -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Anggota</h5>
                        <p class="card-text">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Divisi</h5>
                        <p class="card-text">Teknologi Informasi, SDM, Keuangan</p>
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

        <!-- Tabel Data Anggota -->
        <h3 class="mt-4 mb-3">Daftar Anggota</h3>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data Anggota -->
                <tr>
                    <td>1</td>
                    <td>Nia Oktavia</td>
                    <td>Manajer</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rio Santoso</td>
                    <td>Pengembang</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Siti Aisyah</td>
                    <td>HRD</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
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
