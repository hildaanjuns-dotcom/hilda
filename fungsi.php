<?php
    $koneksi = mysqli_connect("localhost", "root", "", "weeklyhld");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;   
    }

    function tambahdata($data, $files)
    {
        global $koneksi;
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);

        $namafoto = $files ["name"];
        $tmpfoto = $files ["tmp_name"];

        $path = "assets/image/$namafoto";

        if(move_uploaded_file($tmpfoto,$path)) {
        $query = "INSERT INTO mahasiswa (nama, nim, prodi, email, no_hp, foto)
        VALUES ('$nama', '$nim', '$prodi', '$email', '$no_hp', '$namafoto')";
        mysqli_query($koneksi, $query);
        }
        return mysqli_affected_rows($koneksi);
    }
    
    function deletedata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function editdata($data, $id)
    {
        global $koneksi;
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $foto = $data ["foto"];

        $query = "UPDATE mahasiswa SET
        nama = '$nama',
        nim = '$nim',
        prodi = '$prodi',
        email = '$email',
        no_hp = '$no_hp',
        foto = '$foto'
        WHERE id = $id";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
?>