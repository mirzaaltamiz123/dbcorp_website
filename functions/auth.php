<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once 'db.php';

function is_logged_in() {
    return isset($_SESSION['user']);
}

function login($username, $password) {
    global $conn;

    // Hash password dengan MD5 sebelum mencari di database
    $password_hash = md5($password);

    // Query untuk mencari pengguna dengan username dan password yang sesuai
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);

    // Cek jika prepare gagal
    if (!$stmt) {
        die("Query gagal: " . $conn->error); // Menampilkan error koneksi atau query
    }

    $stmt->bind_param("ss", $username, $password_hash); // Bind username dan hashed password
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika ada pengguna yang cocok, mulai sesi dan simpan data pengguna
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user; // Simpan data pengguna di session
        $_SESSION['user_role'] = $user['role']; // Simpan role pengguna
        return true;
    }

    return false; // Jika login gagal
}

function logout() {
    session_destroy();
    header("Location: login.php");
    exit;
}
