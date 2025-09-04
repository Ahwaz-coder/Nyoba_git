<?php
// Koneksi ke database
$servername = "localhost";
$nama = "root";
$password = "";
$dbname = "pendaftar"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $nama, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form registrasi
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$no_ktp = isset($_POST['no_ktp']) ? $_POST['no_ktp'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Validasi data
if (!empty($nama) && !empty($email) && !empty($password)) {
    // Hash password sebelum disimpan
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data
    $sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dimasukkan.";
    } else {
        echo "Gagal memasukkan data: " . $conn->error;
    }
} else {
    echo "Gagal memasukkan data: Data tidak sesuai.";
}

// Tutup koneksi
$conn->close();
?>