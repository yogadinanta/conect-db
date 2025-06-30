<?php
require 'conection_db.php';

if (isset($_GET['nim'])) {
    $nim = $conn->real_escape_string($_GET['nim']);
    $sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "NIM tidak ditemukan.";
}
$conn->close();
?>
