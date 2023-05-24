<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <?php
        include("koneksi.php");
        $nim=$_GET['ubah'];

        $sql="select * from pemrogramanweb4tia where nim='$nim'";
        $aksi=mysqli_query($conn, $sql);
        $isi=mysqli_fetch_assoc($aksi);
    ?>
    <h2>Form Ubah Data</h2>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $isi['nim']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $isi['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><input type="text" name="nilaiTugas" value="<?php echo $isi['nilaiTugas']; ?>"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="text" name="nilaiUts" value="<?php echo $isi['nilaiUts']; ?>"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="text" name="nilaiUas" value="<?php echo $isi['nilaiUas']; ?>"></td>
            </tr>
            <!-- <tr>
                <td>Nilai Akhir</td>
                <td><input type="text" name="nilaiAkhir"></td>
            </tr>
            <tr>
                <td>Nilai Huruf</td>
                <td><input type="text" name="nilaiHuruf"></td>
            </tr> -->
            <tr>
                <td></td>
                <td><br>
                    <button type="submit">Update</button>
                    <button><a href="tampilData.php" style="text-decoration:none; color:black;">Cancel</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>