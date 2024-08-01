<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Kirim email (Contoh menggunakan mail() PHP)
    $to = "your-email@example.com";
    $subject = "Pesan dari Portofolio Web";
    $body = "Nama: $name\nEmail: $email\nPesan: $message";

    if (mail($to, $subject, $body)) {
        echo "<p>Terima kasih, $name! Pesan Anda telah diterima.</p>";
    } else {
        echo "<p>Terjadi kesalahan. Silakan coba lagi nanti.</p>";
    }
} else {
    echo "<p>Permintaan tidak valid.</p>";
}
?>
