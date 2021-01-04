<?php 
    $db = mysqli_connect("localhost","root","","phpdasar");
    if(isset($_POST["insert"])){
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];
        mysqli_query($db,"INSERT INTO mahasiswa (nrp,nama,email,jurusan) VALUES('$nrp','$nama','$email','$jurusan')");
        echo "<script> var conf = confirm('kembali ke daftar ?'); conf == true ? location.href = 'index2.php' : '';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        display:block;
        margin: 8px 0;
        padding: 4px;
    }
</style>
<body>
    <h1>Tambah data</h1>
    <form action="" method="POST">
        <input type="text" name="nrp" placeholder="nrp">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="jurusan" placeholder="jurusan">
        <button type="submit" name="insert">insert</button>
    </form>
</body>
</html>