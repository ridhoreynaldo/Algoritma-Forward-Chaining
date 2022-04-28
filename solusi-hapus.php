<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $qry = "DELETE FROM tb_solusi WHERE id=$id";
    $data = mysqli_query($kon, $qry);

    // apakah query hapus berhasil?
    if( $data ){
        header('Location: solusi-edit.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>