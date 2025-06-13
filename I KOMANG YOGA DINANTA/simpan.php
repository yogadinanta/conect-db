<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $nim = $_POST['nim'];
            $jurusan = $_POST['jurusan'];
            $alamat = $_POST['alamat'];

            if (empty($name) || empty($nim) || empty($jurusan) || empty($alamat)) {
                echo '<div class="text-red-600 text-center font-semibold"><i class="fas fa-exclamation-triangle mr-2"></i>Semua field harus diisi!</div>';
            } else {
                echo '<h2 class="text-2xl font-bold text-center mb-4 text-gray-700"><i class="fas fa-check-circle text-green-500 mr-2"></i>Data yang Anda Inputkan:</h2>';
                echo '<div class="space-y-3 text-gray-800 text-lg">';
                echo '<p><i class="fas fa-user mr-2 text-blue-500"></i><strong>Nama:</strong> ' . htmlspecialchars($name) . '</p>';
                echo '<p><i class="fas fa-id-card mr-2 text-purple-500"></i><strong>NIM:</strong> ' . htmlspecialchars($nim) . '</p>';
                echo '<p><i class="fas fa-graduation-cap mr-2 text-yellow-500"></i><strong>Jurusan:</strong> ' . htmlspecialchars($jurusan) . '</p>';
                echo '<p><i class="fas fa-map-marker-alt mr-2 text-red-500"></i><strong>Alamat:</strong> ' . htmlspecialchars($alamat) . '</p>';
                echo '</div>';
            }
        }
        ?>
        <div class="mt-6 text-center">
            <a href="index.php" class="text-blue-500 hover:underline"><i class="fas fa-arrow-left mr-1"></i>Kembali ke Form</a>
        </div>
    </div>
</body>
</html>
