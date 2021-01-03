<?php 
    $db = mysqli_connect("localhost","root","", "phpdasar");
    $id = $_GET["id"];
    var_dump($id);
    mysqli_query($db,"DELETE FROM mahasiswa WHERE id = $id");
    header("Location: index2.php");
?>
