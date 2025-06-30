<?php
require 'conection_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $conn->real_escape_string($_POST['nim']);
    $nama = $conn->real_escape_string($_POST['nama']);
    $jurusan = $conn->real_escape_string($_POST['jurusan']);
    $angkatan = $conn->real_escape_string($_POST['angkatan']);

    $sql = "UPDATE mahasiswa SET 
              nama='$nama', 
              jurusan='$jurusan', 
              angkatan='$angkatan' 
            WHERE nim='$nim'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diperbarui'); window.location='index.php';</script>";
    } else {
        echo "Gagal mengupdate: " . $conn->error;
    }
}
$conn->close();
?>
