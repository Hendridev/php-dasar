<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
require 'functions.php';


// pagination
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData /$jumlahDataPerHalaman);

if(isset($_GET['halaman'])){
$halamanAktif = $_GET['halaman'];
} else {
    $halamanAktif = 1;
}
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData,$jumlahDataPerHalaman");


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
    <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa </h1> 
    <a href="Tambah.php">Tambah data mahasiswa</a>
<br><br>
<!-- mencari data/ search link -->
    <form action="" method="POST">

    <input id="keyword" type="text" name="keyword" size="40" autofocus placeholder="masukan keyword" autocomplete="off">
    <button type="submit" name="cari" id="tombol">Cari</button>

    </form>

<!-- navigasi -->
<?php if($halamanAktif > 1) :?>
<a href="?halaman=<?= $halamanAktif - 1 ?>">Back</a>
<?php endif; ?>

<?php for($i = 1;$i <= $jumlahHalaman; $i++): ?>
    <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman) :?>
<a href="?halaman=<?= $halamanAktif + 1 ?>">Next</a>
<?php endif; ?>

    <br>

<div id="container">
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
</div>


    <script src="js/app.js"></script>
</body>
</html>