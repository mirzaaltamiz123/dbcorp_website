<?php
require_once '../functions/auth.php';
require_once '../functions/db.php';

if (!is_logged_in()) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$query = "DELETE FROM employees WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: dashboard-pegawai.php");
    exit;
} else {
    echo "Gagal menghapus data.";
}
?>