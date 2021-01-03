
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <?php if(!empty($_POST["nama"])  || !empty($_POST["username"])) : ?>
        <li>username : <?= $_POST["username"];?></li>
        <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
        <?php endif ;?>
    <?php endif; ?>
</body>  
</html>