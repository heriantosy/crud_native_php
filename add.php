<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO mahasiswa (nim, nama, alamat) VALUES ('$nim', '$nama', '$alamat')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="post">
        <label>NIM:</label>
        <input type="text" name="nim" required><br>
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
