<?php
require '../vendor/autoload.php';  // Pastikan jalur autoload.php benar

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);  // Membuat objek PHPMailer

try {
    // Pengaturan SMTP dan pengiriman email
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Ganti dengan server SMTP Anda
    $mail->SMTPAuth = true;
    $mail->Username = 'youremail@gmail.com';  // Ganti dengan email pengirim
    $mail->Password = 'yourpassword';  // Ganti dengan password atau App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Pengaturan pengirim dan penerima
    $mail->setFrom('youremail@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');

    // Subjek dan isi email
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email body.';

    // Mengirim email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>