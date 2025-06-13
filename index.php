<?php
require 'conection_db.php';

$sql = "SELECT nim, nama, jurusan, angkatan FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
          </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nim"] . "</td>
                <td>" . $row["nama"] . "</td>
                <td>" . $row["jurusan"] . "</td>
                <td>" . $row["angkatan"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>
