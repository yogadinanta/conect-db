<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENDAFTARAN LOMBA</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Form Pendaftaran</h2>
        <form action="simpan.php" method="post" class="space-y-4">
            <div>
                <label class="block text-gray-700">Nama:</label>
                <input type="text" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div>
                <label class="block text-gray-700">NIM:</label>
                <input type="text" name="nim" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div>
                <label class="block text-gray-700">Jurusan:</label>
                <input type="text" name="jurusan" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div>
                <label class="block text-gray-700">Alamat:</label>
                <input type="text" name="alamat" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex justify-center">
                <input type="submit" value="Simpan Data" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">
            </div>
        </form>
    </div>
</body>
</html>
