<?php
    include("koneksi.php");
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $nilaiTugas=$_POST['nilaiTugas'];
    $nilaiUts=$_POST['nilaiUts'];
    $nilaiUas=$_POST['nilaiUas'];
    // $nilaiAkhir=$_POST['nilaiAkhir'];
    // $nilaiHuruf=$_POST['nilaiHuruf'];

    $nilaiAkhir=($nilaiTugas*0.4)+($nilaiUts*0.3)+($nilaiUas*0.3);


    if($nilaiAkhir>=90){
        $nilaiHuruf="A";
    }elseif($nilaiAkhir>=80){
        $nilaiHuruf="B";
    }elseif($nilaiAkhir>=70){
        $nilaiHuruf="C";
    }elseif($nilaiAkhir>=60){
        $nilaiHuruf="D";
    }else{
        $nilaiHuruf="E";
    }


    $sql="insert into pemrogramanweb4tia values (
        '$nim',
        '$nama',
        '$nilaiTugas',
        '$nilaiUts',
        '$nilaiUas',
        '$nilaiAkhir',
        '$nilaiHuruf')";

    $proses=mysqli_query($conn, $sql);
    if($proses){
        header("location:tampilData.php");
    }

?>