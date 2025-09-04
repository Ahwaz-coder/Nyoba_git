<?php
// Koneksi ke database
include 'AdminPendaftaran.php';

// Ambil data berdasarkan Nama
$nama = $_GET['nama'];
$query = "SELECT * FROM pendaftaran WHERE nama = '$nama'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// Proses update data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $minat = $_POST['minat'];

    $updateQuery = "UPDATE pendaftaran SET nama = '$nama', minat = '$minat' WHERE nama = '$nama'";
}    
if (mysqli_query($conn, $updateQuery)) {
    echo "<script>alert('Data berhasil diubah');</script>";
} else {
    echo "<script>alert('Data gagal diubah');</script>";
}

?> 
<form method="POST">
Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
Minat: <input type="text" name="minat" value="<?php echo $data['minat']; ?>"><br>
<button type="submit">Submit</button>
</form>