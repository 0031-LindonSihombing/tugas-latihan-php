<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
</head>
<body>
    <h2>Form Input Nilai</h2>
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><input type="text" name="nilaiTugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="text" name="nilaiUts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="text" name="nilaiUas"></td>
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
                    <button type="submit">Proses</button>
                    <button><a href="tampilData.php" style="text-decoration:none; color:black;">View</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>