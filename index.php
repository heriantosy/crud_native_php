<?php
include 'config.php';

$result = $conn->query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>CRUD Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="add.php">Tambah Mahasiswa AB</a>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td>
                <a href="edit.php?nim=<?= $row['nim'] ?>">Edit</a> |
                <a href="delete.php?nim=<?= $row['nim'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
