<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_mysql";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' berhasil dicek/dibuat.<br>";
} else {
    die("Gagal membuat database: " . $conn->error);
}

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS mahasiswa (
    nim VARCHAR(20) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jurusan VARCHAR(100) NOT NULL,
    angkatan YEAR NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabel 'mahasiswa' berhasil dicek/dibuat.<br>";
} else {
    die(" Gagal membuat tabel: " . $conn->error);
}

$sql = "SELECT COUNT(*) as total FROM mahasiswa";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row['total'] == 0) {
    $conn->query("INSERT INTO mahasiswa (nim, nama, jurusan, angkatan) VALUES
       ('2415323030', 'I Komang Yoga Dinanta', 'Manajemen Informatika', 2024),
('2415323374', 'Gede Agung', 'Sistem Informasi', 2021),
('2415323033', 'Gede Adinanta Denova', 'Teknik Industri', 2020),
('2415323034', 'I Gusti A. Galuh Parwati', 'Manajemen Informatika', 2022)");
    echo " Data awal berhasil ditambahkan.<br>";
} else {
    echo " Data sudah tersedia, tidak ditambahkan ulang.<br>";
}

$conn->close();
?>
