<?php 
    // array with number
// $mahasiswa =[ ["Sandikha Galih","03020302","Teknik Informatika","Asphyxia@gmail.com"],
//               ["Sandikha Galih","03020302","Teknik Informatika","Asphyxia@gmail.com"]];

// array associative one self
// $mahasiswa = [  "nama" => "Sandikha", 
//                 "nrp" => "0213213",
//                 "jurusan" => "Teknik Informatika",
//                 "email" => "hendrids@gmail.com"];
// menampilkan isi dengan deklarasi nama data
// echo $mahasiswa["nama"];
// aray baru =>

$mahasiswa = [["nama" => "Sandikha", 
                "nrp" => "0213213",
                "jurusan" => "Teknik Informatika",
                "email" => "hendrids@gmail.com",
                "gambar" => "foto_mahasiswa.png"],

                ["nama" => "Hendri", 
                "nrp" => "0213213",
                "jurusan" => "Teknik Informatika",
                "email" => "hendrids@gmail.com",
                "gambar" => "foto_mahasiswa.png"
                ],

                ["nama" => "Burhan", 
                "nrp" => "0213213",
                "jurusan" => "Teknik Informatika",
                "email" => "hendrids@gmail.com",
                "gambar" => "foto_mahasiswa.png"]
            ];
// array di dalam array di dalam array
// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="continer">
    <?php foreach ($mahasiswa as $ms) : ?>
    <ul>
    <!-- menambahkan gambar -->
        <li><img src="img/<?= $ms["gambar"];?>" alt=""></li>
        <li><?php echo $ms["nama"]; ?></li>
        <li><?php echo $ms["nrp"]; ?></li>
        <li><?php echo $ms["jurusan"]; ?></li>
        <li><?php echo $ms["email"]; ?></li>
    </ul>    
    <?php endforeach; ?>
    </div>

</body>
</html>