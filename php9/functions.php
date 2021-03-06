<?php 
//  koneksi ke database
$db = mysqli_connect("localhost","root","", "phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $db;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa (nrp,nama,email,jurusan,gambar)
    VALUES
    ('$nrp','$nama','$email','$jurusan','$gambar')
    ";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    mysqli_query($db,"DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);
}


function ubah($data){
    global $db;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
       nama = '$nama',
       nrp = '$nrp',
       email = '$email',
       jurusan = '$jurusan',
       gambar= '$gambar'
       WHERE id = $id";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

?>