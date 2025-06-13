<?php
require 'conection_db.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . 
             " - Nama: " . $row["nama"] . 
             " - NIM: " . $row["nim"] . 
             " - Jurusan: " . $row["jurusan"] . 
             " - Angkatan: " . $row["angkatan"] . 
             "<br>";
    }
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>
