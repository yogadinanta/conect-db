<?php
require 'conection_db.php';

if (isset($_GET['nim'])) {
    $nim = $conn->real_escape_string($_GET['nim']);
    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    if (!$data) {
        echo "Data tidak ditemukan."; exit;
    }
} else {
    echo "NIM tidak ditemukan."; exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Data Mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <form action="update_data.php" method="post" class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md border-t-4 border-emerald-700">
    <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">Edit Data Mahasiswa</h2>
    <label class="block mb-1 text-sm text-gray-600 font-semibold">NIM</label>
    <input type="text" value="<?= htmlspecialchars($data['nim']) ?>" 
           class="w-full p-3 bg-gray-100 border border-gray-300 text-gray-500 rounded mb-4 cursor-not-allowed" 
           readonly tabindex="-1">

    <input type="hidden" name="nim" value="<?= htmlspecialchars($data['nim']) ?>">
    <label class="block mb-1 text-sm text-gray-600 font-semibold">Nama</label>
    <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" 
           class="w-full p-3 border border-gray-300 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>

    <label class="block mb-1 text-sm text-gray-600 font-semibold">Jurusan</label>
    <input type="text" name="jurusan" value="<?= htmlspecialchars($data['jurusan']) ?>" 
           class="w-full p-3 border border-gray-300 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>

    <label class="block mb-1 text-sm text-gray-600 font-semibold">Angkatan</label>
    <input type="text" name="angkatan" value="<?= htmlspecialchars($data['angkatan']) ?>" 
           class="w-full p-3 border border-gray-300 rounded mb-6 focus:outline-none focus:ring-2 focus:ring-emerald-500" required>

    <button type="submit" class="w-full bg-emerald-700 hover:bg-emerald-800 text-white font-semibold py-3 rounded transition">
      Simpan Perubahan
    </button>
  </form>

</body>
</html>
