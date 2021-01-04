<?php 
    $db = mysqli_connect("localhost","root","","phpdasar");
    $id = $_GET["id"];
    $result = mysqli_query($db,"SELECT * FROM mahasiswa WHERE id = $id");

if(isset($_POST["update"])){
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    mysqli_query($db,"UPDATE mahasiswa SET nrp='$nrp',nama='$nama',email='$email',jurusan='$jurusan' WHERE id=$id");
    header("location:index2.php");
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
        display: block;
        margin: 8px 0;
        padding: 4px;
    }
</style>
<body>
<h1>Ganti data</h1> 
<img src="img/ancient.png" alt="" width="25px">
<form action="" method="POST">
<?php while($row= mysqli_fetch_assoc($result)) : ?>
<input type="text" value="<?= $row["nrp"] ?>" name="nrp">
<input type="text" value="<?= $row["nama"] ?>" name="nama">
<input type="text" value="<?= $row["email"] ?>" name="email">
<input type="text" value="<?= $row["jurusan"] ?>" name="jurusan">
<button type="submit" name="update">update</button>
<?php endwhile; ?>
</form>
</body>
</html>