<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" countent="IE=edge">
        <meta name="viewport" countent="widht=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Data Siswa</h2>
        <table border="1">
            <tr>
                <td>N0</td>
                <td>Nama Siswa</td>
                <td>Alamat</td>
                <td>Agama</td>
                <td>Asal Sekolah</td>
                <td>Aksi</td>
            </tr>
            <?php
            $no = 1;
            $query = mysqli_query($konek,"SELECT * FROM data_siswa");
            while($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $no ++; ?></td>
                    <td><?php echo $data ["nama_siswa"];?></td>
                    <td><?php echo $data ["alamat_siswa"];?></td>
                    <td><?php echo $data ["agama_siswa"];?></td>
                    <td><?php echo $data ["asal_sekolah"];?></td>
                    <td>
                        <a href="">edit</a> <a href="">hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>