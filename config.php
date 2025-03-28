<?php
$host = "localhost";
$user = "root"; // Ganti dengan username MySQL Anda
$pass = "Sejati1982"; // Ganti dengan password MySQL Anda
$db   = "db_uhtp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
