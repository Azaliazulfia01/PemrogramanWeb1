<!DOCTYPE html>
<html>
    <head>
        <title>Contoh list dengan PHP</title>
    </head>
    <body>
        <h2>Daftar Absensi Mahasiswa</h2>
        <ol>
            <?php
            for ($i=1;$i<=1000;$i++)
            {
                echo "<li>Nama Mahasiwa ke-$i</li>";
            }
            ?>
        </ol>
    </body>
</html>