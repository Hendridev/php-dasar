<?php 
    session_start();
    var_dump($_SESSION);
    if($_SESSION["login"] == false){
        header("location:login.php");
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
    <h1>Selamat Datang, Admin</h1>
    <a href="login.php" class="logout">Log out</a>
</body>
</html>