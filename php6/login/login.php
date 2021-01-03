<?php 
    session_start();
    // cek tombol submit
    if(isset($_POST["submit"])){
// cek username & password
    if($_POST["username"] =="admin" && $_POST["password"] =="login"){
// make session
    $_SESSION["login"] = true;
// benar, tampilkan hal admin
    header("location:admin.php");
    exit;
}
    else{
// salah, tampil kesalahan
    $error = true;
}
    }
    var_dump($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <p><?php echo $log?></p>
<?php  if (isset($_POST['submit'])) : ?>
    <?php if (isset($error)) : ?>
        <?php $log = "pass atau username salah"; ?>
    <?php endif; ?>
    <?php if(empty($_POST["username"])||empty($_POST["password"])) : ?>
        <?php $log = "pass atau username kosong"; ?>
    <?php endif ?>
<?php endif; ?>

    <ul>
    <form action="" method="post">

    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>

    </form>
    </ul>
</body>
</html>