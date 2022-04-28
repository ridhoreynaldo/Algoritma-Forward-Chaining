<?php
include("koneksi.php");
if( isset($_GET['id']) ){
    // ambil id dari query string
    $id = $_GET['id'];
    $gejala = $_GET['gejala'];
    $kode = $_GET['kode'];

if($_GET['id']){
    $qry = "UPDATE tb_gejala SET gejala='$gejala', kode= '$kode' WHERE id=$id";
    $data = mysqli_query($kon, $qry);
    }
if($_GET['kode']){
    $qry = "UPDATE tb_gejala SET id=$id WHERE kode='$kode'";
    $data = mysqli_query($kon, $qry);
    }
    // apakah query berhasil?
if( $data ){
    header('Location: gejala-edit.php');
    } 
else {
    die("gagal mengedit...");
    }
}

else {
    die("akses dilarang...");
}
?>