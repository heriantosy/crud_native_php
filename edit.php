<?php
include 'config.php';

$nim = $_GET['nim'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat' WHERE nim='$nim'";
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
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit dATA Mahasiswa</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
