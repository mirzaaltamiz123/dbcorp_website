<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">dbcorp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Menu khusus untuk User -->
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'user'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard_pegawai.php">Dashboard Pegawai</a>
                    </li>
                <?php endif; ?>

                <!-- Menu yang tersedia untuk semua pengguna -->
                <li class="nav-item">
                    <a class="nav-link" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="anggota.php">Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="departemen.php">Departemen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="administrasi.php">Administrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bantuan.php">Bantuan</a>
                </li>

                <!-- Menu khusus untuk Admin -->
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard_admin.php">Dashboard Admin</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <form method="POST" action="logout.php" class="d-flex">
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
</nav>
