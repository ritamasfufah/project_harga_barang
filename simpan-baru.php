<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
} else {
    echo "koneksi ke basis data SUKSES";
}


$query = "INSERT INTO mahasiswa(nim,nama,jurusan) VALUES
('".$_POST['nim']."','".$_POST['nama']."' ,'".$_POST['jurusan']."') ";
//echo "<br><br>".$query;
if($koneksi->query($query)==true){
    echo "<br>Data".$_POST["nama"].
    " sudah tersimpan. Data bisa dilihat ".
    '<a href="main.php">disini</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

$koneksi->close();
?>