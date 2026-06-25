<?php
require 'fungsi.php';

if (isset($_POST['kirim'])) {

    $nama    = $_POST['nama'];
    $nim     = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email   = $_POST['email'];
    $no_hp   = $_POST['no_hp'];
    $foto    = $_POST['foto'];

    $query = "INSERT INTO mahasiswa
                (nama, nim, jurusan, email, no_hp, foto)
              VALUES
                ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    if (mysqli_query($koneksi, $query)) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href='mahasiswa.php';
        </script>
        ";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form action="" method="post">
    <table cellpadding="5">

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>

        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" required></td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td><input type="text" name="jurusan" required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>

        <tr>
            <td>No HP</td>
            <td><input type="text" name="no_hp" required></td>
        </tr>

        <tr>
            <td>Foto</td>
            <td><input type="text" name="foto"></td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit" name="kirim">
                    Tambah Data
                </button>
            </td>
        </tr>

    </table>
</form>

</body>
</html>