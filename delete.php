<?php
include 'config.php';

$nim = $_GET['nim'];
$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
