<?php 

// array 
// membuat array
$bulan = ["Jan","Feb","Mar"];
$hari = ["Senin","Selasa","Rabu"];
$arr = [123,true,"false"];
// menampilkan array
// ver debugg
// var_dump($arr);
print_r($arr);
// ver user
// echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            text-align: center;
            height: 80px;
            width: 80px;
            background-color: darkslateblue;
            line-height: 30px;
            float: left;
            color: white;
            margin: 2px;
            display: flex;
            justify-content : center;
            align-items : center;
        }
        .kotak:hover{
            transform: rotate(360deg);
            transition: 1s;
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
<?php 
    $angka = [[1,2,3],[4,5,6],[7,8,9],[10,11,12]];
    print $angka[2][2];  //print angka 9;
?>

<?php foreach($angka as $ang) : ?>
    <?php foreach($ang as $num) : ?>
    <div class="kotak"><?php echo $num ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    
<?php endforeach; ?>

</body>
</html>