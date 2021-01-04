<?php
require 'functions.php';
//koneksi database
// $conn = mysqli_connect("localhost","root","","phpdasar");

// cek tombol ditekan atau belum
if(isset($_POST["submit"])){
    // // ambil data dari tiap element dalam form
    // $nrp = $_POST["nrp"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // // query insert data
    // $query = "INSERT INTO mahasiswa
    //             VALUES
    //             ('','$nama','$nrp','$email','$jurusan','$gambar')
    //             ";

    // mysqli_query($conn,$query);

    // cek keberhasilan data ditambahkan

    // if(mysqli_affected_rows($coon) > 0){
    //     echo "berhasil";
    // } else{
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
    if(tambah($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>";
    } else{
        echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    
    <form action="" method="POST">

        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>



</body>
</html>