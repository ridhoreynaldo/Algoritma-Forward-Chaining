<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $qry = "DELETE FROM rules WHERE id=$id";
    $data = mysqli_query($kon, $qry);

    // apakah query hapus berhasil?
    if( $data ){
        header('Location: rule-edit.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>