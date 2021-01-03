<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
    <?php if(!empty($_POST["nama"])  && !empty($_POST["username"])) : ?>
    <li>username : <?= $_POST["username"];?></li>
    <h1>Hallo Selamat Datang, <?= $_POST["nama"];?></h1>
    <?php endif ;?>
<?php endif; ?>
    <form action="form2.php" method="post">
        <input type="text" name="nama" placeholder="nama">
        <br>
        <input type="text" name="username" placeholder="username">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>