<?php 

//array
$armor = [['gambar' => 'img/ancient.png',
            'nama' => 'Ancient Armor',
            'set_bonus' => '10% def',
            'defense' => '50',
            'durability' =>'80%',
            'tier' => 'Hero'],

            ['gambar' => 'img/crimson.png',
            'nama' => 'Crimson Armor',
            'set_bonus' => '10% att',
            'defense' => '60',
            'durability' =>'50%',
            'tier' => 'Killer'],
            
            ['gambar' => 'img/molten.png',
            'nama' => 'Molten Armor',
            'set_bonus' => '5% stun',
            'defense' => '70',
            'durability' =>'60%',
            'tier' => 'Tank'],

            ['gambar' => 'img/mythril.png',
            'nama' => 'Mythril Armor',
            'set_bonus' => '20% hp',
            'defense' => '100',
            'durability' =>'80',
            'tier' => 'Tank'],

            ['gambar' => 'img/necro.png',
            'nama' => 'Necro Armor',
            'set_bonus' => '20% Mana',
            'defense' => '20',
            'durability' =>'40',
            'tier' => 'Mage'],

            ['gambar' => 'img/Orichalcum.png',
            'nama' => 'Orichalcum',
            'set_bonus' => '10% spd',
            'defense' => '60',
            'durability' =>'75%',
            'tier' => 'Rush'],

            ['gambar' => 'img/platinum.png',
            'nama' => 'Platinum Armor',
            'set_bonus' => '20% def',
            'defense' => '70',
            'durability' =>'70',
            'tier' => 'Tank'],

            ['gambar' => 'img/spider.png',
            'nama' => 'Spider Armor',
            'set_bonus' => '30% spd',
            'defense' => '50',
            'durability' =>'50',
            'tier' => 'Rush'],

            ['gambar' => 'img/spooky.png',
            'nama' => 'Spooky Armor',
            'set_bonus' => '20% Mana',
            'defense' => '50',
            'durability' =>'100',
            'tier' => 'Mage'],

            ['gambar' => 'img/tungsten.png',
            'nama' => 'Tungsten Armor',
            'set_bonus' => '30% def',
            'defense' => '100',
            'durability' =>'100',
            'tier' => 'High Tank']
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php foreach($armor as $ar) : ?>
    <ul>
    <li> <img src=" <?= $ar["gambar"]; ?> " alt=""></li>
    <li>Nama : <?php print $ar['nama'] ;?></li>
    <li>Tier : <?php print $ar["tier"] ;?></li>
    <li>Stat Bonus : <?php print $ar["set_bonus"] ;?></li>
    <li>Defense : <?php print $ar["defense"] ;?></li>
    <li>Durability: <?php print $ar["durability"] ;?></li>

    </ul>
    <?php endforeach; ?>
    </div>
</body>
</html>