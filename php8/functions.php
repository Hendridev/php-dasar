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

    $query = "INSERT INTO mahasiswa (nrp,nama,email,jurusan)
    VALUES
    ('$nrp','$nama','$email','$jurusan')";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    mysqli_query($db,"DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);
}



?>