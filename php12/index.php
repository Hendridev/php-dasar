<?php 
require 'functions.php';
 
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");
// data id baru DESC
// data id lama ASC

// tombol ditekan
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

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
    <a href="Tambah.php">Tambah data mahasiswa</a>
<br><br>
<!-- mencari data/ search link -->
    <form action="" method="POST">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword" autocomplete="off">
    <button type="submit" name="cari">Cari</button>

    </form>
    <br>


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
            <td><?= $i; ?></td>
            <td><a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
            
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ?');">Hapus</a></td>
            
            <td><img src="img/<?= $row["gambar"] ?>" alt="" width="25px"></td>
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