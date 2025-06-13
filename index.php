<?php
require 'conection_db.php';

$result = $conn->query($sql);
$sql = "SELECT nim, nama, jurusan, angkatan FROM mahasiswa";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "NIM: " . $row["nim"] .
             "Nama: " . $row["nama"] . 
             "Jurusan: " . $row["jurusan"] . 
             "Angkatan: " . $row["angkatan"] . 
             "<br>";
    }
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>
