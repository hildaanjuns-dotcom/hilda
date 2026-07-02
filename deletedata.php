<?php
    require 'fungsi.php';

    $id = $_GET["id"];
   
    if(deletedata($id) > 0)
    {
        echo " <script>
            alert('Data berhasil hapus!');
            document.location.href='mahasiswa.php';
        </script> ";
    }
     else 
    {
        echo " <script>
            alert('Data gagal hapus!');
            document.location.href='mahasiswa.php';
        </script> ";
    }

?>