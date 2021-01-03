<?php 
require 'functions.php';

// ambil data dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
// $result = mysqli_query($db,"SELECT * FROM mahasiswa");
// var_dump($result);

// // ambil data (fetch) mahasiswa dari object result
// // mysqli_fetch_row() //mengembalikan array numerik
// // mysqli_fetch_assoc() mengembalikan array assosiative
// // mysqli_fetch_array() mengembalikan array keduanya
// // mysqli_fetch_object() mengembalikan object

// // while( $mhs = mysqli_fetch_assoc($result)) {
// //     var_dump($mhs);
// // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa </h1> 

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
            <td><img src="img/ancient.png" alt="" width="25px"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>