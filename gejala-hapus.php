<?php
include("koneksi.php");
if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query
    $qry = "DELETE FROM tb_gejala WHERE id=$id";
    $data = mysqli_query($kon, $qry);

    // apakah query berhasil?
    if( $data ){
        header('Location: gejala-edit.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>