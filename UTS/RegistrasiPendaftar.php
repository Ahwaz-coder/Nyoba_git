<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="proses_registrasi.php" method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="no_ktp">No KTP:</label><br>
        <input type="text" id="no_ktp" name="no_ktp" required><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>

        <label for="pekerjaan">Pekerjaan:</label><br>
        <select id="pekerjaan" name="pekerjaan" required>
            <option value="PNS">PNS</option>
            <option value="Wiraswasta">Wiraswasta</option>
            <option value="Karyawan BUMN">Karyawan BUMN</option>
            <option value="Karyawan Swasta">Karyawan Swasta</option>
            <option value="Pelajar">Pelajar</option>
        </select><br><br>

        <label for="minat">Minat:</label><br>
        <input type="text" id="minat" name="minat" required><br><br>

        <label for="foto">Foto:</label><br>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

        <button type="submit">Submit</button>
        <button type="button" onclick="window.location.href='index.php';">Cancel</button>
    </form>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f8f9fa;
    }

    h2 {
        color: #343a40;
    }

    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: auto;
    }

    label {
        font-weight: bold;
        color: #495057;
    }

    input, select, button {
        width: 100%;
        margin-top: 5px;
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }

    button {
        width: auto;
        padding: 10px 20px;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: white;
        border: none;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    button[type="button"] {
        background-color: #6c757d;
        color: white;
        border: none;
    }

    button[type="button"]:hover {
        background-color: #5a6268;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    h2 {
        text-align: center;
    }
</style>