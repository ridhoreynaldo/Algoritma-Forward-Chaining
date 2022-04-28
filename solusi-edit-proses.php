<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];
    $kode = $_GET['kode'];
    $penyakit = $_GET['penyakit'];
    $solusi = $_GET['solusi'];

    // buat query hapus
    $qry = "UPDATE tb_solusi SET kode ='$kode', penyakit='$penyakit', solusi='$solusi' WHERE id=$id";
    $data = mysqli_query($kon, $qry);

    $qry1 = "UPDATE tb_solusi SET id=$id, solusi='$solusi' WHERE penyakit ='$penyakit'";
    $data1 = mysqli_query($kon, $qry1);
    
    $qry2 = "UPDATE tb_solusi SET id=$id, penyakit='$penyakit' WHERE solusi='$solusi'";
    $data2 = mysqli_query($kon, $qry2);

    // apakah query hapus berhasil?
    if( $data ){
        header('Location: solusi-edit.php');
    } else {
        die("gagal mengedit...");
    }

} else {
    die("akses dilarang...");
}

?>