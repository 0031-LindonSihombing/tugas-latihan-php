<?php
    include("koneksi.php");

    $nim=$_GET['hapus'];

    $sql="delete from pemrogramanweb4tia where nim='$nim'";
    $aksi=mysqli_query($conn, $sql);
    if($aksi){
        header("location:tampilData.php");
    }

?>