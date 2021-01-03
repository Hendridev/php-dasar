<!-- FUNCTION -->

<?php
// date untuk tanggal dan format tertentu
print date("l, d-M-Y");
print "<br>";
// time
// UNIX Timestamp / EPOCH time
print time() / 3600 / 24;

// echo date("d M Y",time()-172800*50);

// mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun
// echo date("l",mktime(0,0,0,8,11,2004));

//  strtotime
// hari apa saat waktu tersebut
// echo date("l",strtotime("11 aug 2004"));

// function
// date();
// time();
// mktime();
// strtotime();

// string
// strlen();
// strcmp();
// explode();
// htmlspecialchars();

// utility
// var_dump();
// isset();
// empty();
// die();
// sleep();


?>