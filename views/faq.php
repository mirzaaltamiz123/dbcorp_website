<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "dbcorp";

$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data FAQ
$sql = "SELECT category, question, answer FROM faq ORDER BY category ";
$result = $conn->query($sql);

// Mengelompokkan FAQ berdasarkan kategori
$faq_data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $faq_data[$row['category']][] = $row;
    }
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - dbcorp</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .faq-category {
            margin-bottom: 30px;
        }
        .faq-category h2 {
            color: #343a40;
            font-weight: bold;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .faq-item {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: #ffffff;
            margin-bottom: 15px;
            padding: 15px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .faq-question {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .faq-answer {
            color: #495057;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Frequently Asked Questions (FAQ)</h1>
        <?php if (!empty($faq_data)) : ?>
            <?php foreach ($faq_data as $category => $faqs) : ?>
                <div class="faq-category">
                    <h2><?= htmlspecialchars($category) ?></h2>
                    <?php foreach ($faqs as $faq) : ?>
                        <div class="faq-item">
                            <div class="faq-question">
                                <?= htmlspecialchars($faq['question']) ?>
                            </div>
                            <div class="faq-answer">
                                <?= nl2br(htmlspecialchars($faq['answer'])) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center text-muted">Tidak ada FAQ untuk ditampilkan.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
