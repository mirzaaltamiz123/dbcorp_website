<?php
require_once 'functions/auth.php';
if (!is_logged_in()) {
    header("Location: views/login.php");
    exit;
}
header("Location: views/dashboard-pegawai.php");