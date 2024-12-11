<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan</title>
    <!-- CSS Eksternal -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Styling Khusus untuk Halaman Bantuan */
        body {
            background-color: #f8f9fa;
        }
        .section-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #343a40;
        }
        .icon-circle {
            font-size: 2rem;
            padding: 15px;
            border-radius: 50%;
            color: white;
            background-color: #007bff;
            margin-bottom: 15px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        .card-title {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            color: #0056b3;
        }
        .form-section {
            max-width: 700px;
            margin: auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include '../includes/navbar.php'; ?>

    <!-- Container Utama -->
    <div class="container mt-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h2 class="section-title">Bantuan & Dukungan</h2>
            <p class="text-muted">Kami di sini untuk membantu Anda mengatasi kendala dan pertanyaan terkait sistem.</p>
        </div>

        <!-- Informasi Bantuan -->
        <div class="row g-4 mb-5">
            <!-- Kontak Dukungan -->
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-circle mx-auto">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5 class="card-title">Hubungi Tim Dukungan & Bantuan</h5>
                        <p class="card-text">Butuh bantuan segera? Hubungi kami melalui:</p>
                        <ul class="list-unstyled">
                            <li><strong>Email:</strong> <a href="mailto:support@dbcorp.com">niaoktavia168@gmail.com</a></li>
                            <li><strong>Telepon:</strong> <a href="tel:+6283169318744">+6283169318744</a></li>
                        </ul>
                        <p>Kami siap membantu Anda dengan cepat dan profesional.</p>
                    </div>
                </div>
            </div>

            <!-- Halaman FAQ -->
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-circle mx-auto">
                            <i class="bi bi-question-circle"></i>
                        </div>
                        <h5 class="card-title">Halaman FAQ</h5>
                        <p class="card-text">Cari jawaban atas pertanyaan umum dengan mengunjungi:</p>
                        <a href="faq.php" class="btn btn-outline-primary">Kunjungi FAQ</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
