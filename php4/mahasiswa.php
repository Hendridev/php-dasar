<?php 

$mahasiswa =[ ["Sandikha Galih","03020302","Teknik Informatika","Asphyxia@gmail.com"], ["Sandikha Galih","03020302","Teknik Informatika","Asphyxia@gmail.com"]];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
        <?php foreach($mahasiswa as $ms ) : ?>
            <li><?= $ms; ?></li>
        <?php endforeach; ?>
    </ul> -->
<?php foreach($mahasiswa as $ms) : ?>
    <ul>
        <li>Nama :   <?= $ms[0] ?></li>
        <li>NRP : <?= $ms[1] ?></li>
        <li>Jurusan : <?= $ms[2] ?></li>
        <li>Email : <?= $ms[3] ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>