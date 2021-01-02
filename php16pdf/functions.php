<?php 
//  koneksi ke database
$db = mysqli_connect("localhost","root","", "phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db,$query);
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
    // $gambar = htmlspecialchars($data["gambar"]);

    // upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO mahasiswa
    VALUES
    ('','$nama','$nrp','$email','$jurusan','$gambar')
    ";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);
}


function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar diupload
    if($error === 4){
        echo "<script>
               alert('pilih gambar terlebi dahulu')
              </script>";
        return false;
    }

    // cek upload gambar
    $ekstensiGambar = ['jpg','jpeg','png'];
    $ekstensi = explode('.', $namaFile);
    $ekstensi = strtolower(end($ekstensi));
    if(!in_array($ekstensi,$ekstensiGambar)){
        echo "<script>
        alert('yang anda upload tidak berekstensi sebuah gambar')
       </script>";
 return false;
    }

    // cek jika ukurannya terlalu besar
    if($ukuranFile > 5000000){
        echo "<script>
        alert('ukuran gambar terlalu besar')
       </script>";
 return false;
    }

// generate nama baru
$namaFileBaru =uniqid();
$namaFileBaru.='.';
$namaFile .= $ekstensi;


// gambar siap
move_uploaded_file($tmpName,'img/' . $namaFileBaru);
return $namaFileBaru;


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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek user pilih gambar baru / tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
      $gambar = upload();
    }

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
// function untuk mencari
function cari($keyword){
    $query = "SELECT *FROM mahasiswa
               WHERE
            --    like include huruf
               nama LIKE '%$keyword%' OR
               nrp LIKE '%$keyword%' OR
               email LIKE '%$keyword%' OR
               jurusan LIKE '%$keyword%'
               ";
    return query($query);
}

function registrasi($data) {
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db,$data["password"]);
    $password2 = mysqli_real_escape_string($db,$data["password2"]);
    
    // cek username ada atau belum
    $result = mysqli_query($db, "SELECT username FROM users WHERE username ='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah terdaftar');
             </script>";
     return false;
    }
    // mengatasi username kosong
    if(empty(trim($username))){
        echo "<script>
        alert('tidak boleh kosong');
             </script>";
        return false;
    }


    // cek konfirmasi password
    if($password !==$password2){
        echo "<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password) ;die;
    
    // tambahkan user baru ke database
    mysqli_query($db,"INSERT INTO users VALUES('','$username','$password')");
    return mysqli_affected_rows($db);
}

?>