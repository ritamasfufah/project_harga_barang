<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
} else {
    //echo "koneksi ke basis data SUKSES!";
}


$query = "update mahasiswa " .
        "set nama = ' ". $_POST["nama"] . "',"." jurusan = '" . $_POST["jurusan"] . "' " .
        "where nim = " . $_POST["nim"];



if($koneksi->query($query)==true){
    echo "<br>Data".$_POST["nama"].
    " sudah berubah. Data bisa dilihat ".
    '<a href="main.php">disini</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

?>