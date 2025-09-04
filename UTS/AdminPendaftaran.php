<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "pendaftar");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Hapus data jika tombol hapus ditekan
if (isset($_GET['hapus'])) {
    $nama = $_GET['hapus'];
    $conn->query("DELETE FROM pendaftar WHERE nama = $nama");
    header("Location: AdminPendaftaran.php");
    exit;
}

// Ambil data dari tabel pendaftar
$result = $conn->query("SELECT nama, minat FROM pendaftar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Dashboard Admin</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Minat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['minat']) ?></td>
                        <td>
                            <a href="EditPendaftaran.php?nama=<?= $row['nama'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                            <a href="AdminPendaftaran.php?hapus=<?= $row['nama'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Tutup koneksi
$conn->close();
?>
