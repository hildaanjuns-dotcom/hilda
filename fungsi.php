<?php

 $koneksi = mysqli_connect("localhost","root","","weeklyhld");

function tampildata($query)
{
    $result = mysqli_query($koneksi,$query);
}

?>