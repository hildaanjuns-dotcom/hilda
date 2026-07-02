<?php

    require 'fungsi.php';
    $query = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
    <title>Document</title>
</head>
<body>
</head>
<body>
    <h1 align="center">
            WEB TI UNIMUS
        </h1>
        <table border="1" align="center" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>
                    <a href=index.php>Home</a>
                </td>
                <td>
                    <a href=about.php>About</a>
                </td>
                <td>
                    <a href=contact.php>Contact</a>
                </td>
                <td>
                    <a href="mahasiswa.php">Data Mahasiswa</a>
                </td>
            </tr>
        </table>
        <h2>
            Data Mahasiswa
        </h2>
      <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
        <table border="1" cellpadding="5px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
                  <?php
                  $no = 1;
                foreach($mahasiswas as $mhs)
                    {  
            ?>
        <tr>
            <td align="center"><?=$no ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td align="center"><?php echo $mhs["jurusan"] ?></td>
            <td align="center"><?php echo $mhs["email"] ?></td>
            <td align="center"><?php echo $mhs["no_hp"] ?></td>
            <td><img src="aset/image/foto meme.jpg" width="70px"></td>
        <td>
            <a href="editdata.php?id=<?= $mhs["id"] ?>"><button>Edit</button></a>
            <a href="deletedata.php?id=<?= $mhs["id"] ?>" onclick="return confirm('Yaqqueeennnnnn???')" ><button>Hapus</button></a>
        </td>  
        </tr>
        <?php
                    $no++;
                    }
        ?>      
        </table>
        <hr>
         <table border="1" cellpadding="5px">
          <tr>
        <table border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <td rowspan="2">Baris 1, Kolom 1</td>
                <td colspan="2">Baris 1, Kolom 2</td>
                <!-- <td>Baris 1, Kolom 2</td>  -->
            </tr>
            <tr>
                <!-- <td>Baris 2, Kolom 1</td> -->
                <td>Baris 2, Kolom 2</td>
                <td>Baris 2, Kolom 3</td>
            </tr>
        </table>
        <hr>
        <table border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2"></td>
                <!-- <td>2,3</td> -->
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <!-- <td>3,2</td> -->
                <!-- <td>3,3</td> -->
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>
</body>
</html>