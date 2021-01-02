<?php
require 'functions.php';

// ambil data url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


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
    if(ubah($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>";
    } else{
        echo "<script>
            alert('Data Gagal Diubah');
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
    <h1>Update data mahasiswa</h1>
    
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>" >
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value= "<?= $mhs["email"]; ?> ">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value=" <?= $mhs["jurusan"]; ?>" >
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required value=" <?= $mhs["gambar"]; ?>" >
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>



</body>
</html>