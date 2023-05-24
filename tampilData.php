<?php
    include("koneksi.php");
    $sql="select * from pemrogramanweb4tia";
    $proses=mysqli_query($conn, $sql);
?>
<h2>Table Nilai Mahasiswa</h2>
<table border>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Nilai Tugas</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai AKhir</th>
        <th>Nilai Huruf</th>
        <th>Proses</th>
    </tr>
    <?php
        while($isi=mysqli_fetch_assoc($proses)):
    ?>
    <tr>
        <td><?php echo $isi['nim']; ?></td>
        <td><?php echo $isi['nama']; ?></td>
        <td><?php echo $isi['nilaiTugas']; ?></td>
        <td><?php echo $isi['nilaiUts']; ?></td>
        <td><?php echo $isi['nilaiUas']; ?></td>
        <td><?php echo $isi['nilaiAkhir']; ?></td>
        <td><?php echo $isi['nilaiHuruf']; ?></td>
        <td>
            <a href="ubahData.php?ubah=<?php echo $isi['nim']; ?>"><button>Update</button></a>
            <a href="hapusData.php?hapus=<?php echo $isi['nim']; ?>"><button>Delete</button></a>
        </td>
    </tr>
    <?php
        endwhile;
    ?>
</table><br>
<a href="formInput.php"><button>Form </button></a>