<?php
require 'conection_db.php';

$sql = "SELECT nim, nama, jurusan, angkatan FROM mahasiswa";
$result = $conn->query($sql);

echo "<!DOCTYPE html>
<html lang='id'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Data Mahasiswa</title>
  <script src='https://cdn.tailwindcss.com'></script>
</head>
<body class='bg-gray-100 font-sans min-h-screen'>

<div class='container mx-auto p-6'>
  <h1 class='text-3xl font-bold text-emerald-800 mb-6'>Data Mahasiswa PNB</h1>";

if ($result->num_rows > 0) {
    echo "<div class='overflow-auto rounded-lg shadow'>
            <table class='min-w-full text-sm text-left bg-white'>
              <thead class='bg-emerald-700 text-yellow-400 uppercase text-xs'>
                <tr>
                  <th class='py-3 px-6'>NIM</th>
                  <th class='py-3 px-6'>Nama</th>
                  <th class='py-3 px-6'>Jurusan</th>
                  <th class='py-3 px-6'>Angkatan</th>
                  <th class='py-3 px-6 text-center'>Aksi</th>
                </tr>
              </thead>
              <tbody class='text-gray-700'>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr class='border-b hover:bg-emerald-50 transition'>
                <td class='px-6 py-3'>" . htmlspecialchars($row["nim"]) . "</td>
                <td class='px-6 py-3'>" . htmlspecialchars($row["nama"]) . "</td>
                <td class='px-6 py-3'>" . htmlspecialchars($row["jurusan"]) . "</td>
                <td class='px-6 py-3'>" . htmlspecialchars($row["angkatan"]) . "</td>
                <td class='px-6 py-3 text-center'>
                  <a href='tabel_edit.php?nim=" . urlencode($row["nim"]) . "' 
                     class='inline-block bg-yellow-400 text-emerald-800 font-semibold py-1 px-3 rounded hover:bg-yellow-300 transition'>
                     Edit
                  </a>
                  <a href='hapus_data.php?nim=" . urlencode($row["nim"]) . "' 
                     onclick='return confirm(\"Yakin ingin menghapus?\")' 
                     class='inline-block bg-red-500 text-white font-semibold py-1 px-3 rounded hover:bg-red-600 transition ml-2'>
                     Hapus
                  </a>
                </td>
              </tr>";
    }

    echo "</tbody></table></div>";
} else {
    echo "<p class='text-gray-600'>Tidak ada data ditemukan.</p>";
}

echo "</div></body></html>";
$conn->close();
?>
