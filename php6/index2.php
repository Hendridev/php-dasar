<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <li><img src="<?= $_GET["gambar"]; ?>"></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>Tier : <?= $_GET["tier"]; ?></li>
        <li>Set Bonus: <?= $_GET["set_bonus"]; ?></li>
        <li>Defense : <?= $_GET["defense"]; ?></li>
        <li>Durability : <?= $_GET["durability"]; ?></li>
    </ul>
    <a href="index.php">Kembali ke list</a>
</body>
</html>