<?php
include ("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['nama'];
    $e = $_POST['email'];
    $p = $_POST['pesan'];

    $sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$n', '$e', '$p')";

    // PERBAIKAN: Ganti $koneksi menjadi $conn
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        die("Error Database: " . $conn->error);
    }
}
$conn->close();
?>