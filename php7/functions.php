<?php 
//  koneksi ke database
$db = mysqli_connect("localhost","root","", "phpdasar");
// function untuk menjalankan query, nantinya semua query akan memakan query(parameter)
function query($query){
    // ambil script db
    global $db;
    // dua parameter query yaitu(database,query)
    $result = mysqli_query($db, $query);
    // fetch menghasilkan array buat penampung
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        // isi array dengan data yang di fetch
        $rows[] = $row;
    }
    // return array
    return $rows;
}

?>