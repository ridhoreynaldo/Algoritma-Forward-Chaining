<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];
    $rules = $_GET['rules'];
    $rules1 = $_GET['rules1'];

    $qry = "UPDATE rules SET rules='$rules', rules1='$rules1' WHERE id=$id";
    $data = mysqli_query($kon, $qry);



    // apakah query hapus berhasil?
    if( $data ){
      header('Location: rule-edit.php');
    } else {
        die("gagal mengedit...");
    }
}
 else {
    die("akses dilarang...");
}

?>