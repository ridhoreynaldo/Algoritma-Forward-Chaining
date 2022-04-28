<?php

include("koneksi.php");

if( isset($_POST['submit']) ){

    // ambil id dari query string
    $id = $_POST['id'];
    $username = mysqli_real_escape_string($kon, $_POST['username']);
    $password = mysqli_real_escape_string($kon, md5($_POST['password']));

if($_POST['username']){
    $qry = "UPDATE tb_admin SET username='$username' WHERE id=$id";
    $data = mysqli_query($kon, $qry);
}
if($_POST['password']){
    $qry = "UPDATE tb_admin SET password='$password' WHERE username='$username'";
    $data = mysqli_query($kon, $qry);
}

    // apakah query berhasil?
    if( $data ){
        header('Location: admin-edit.php');
    } else {
        die("gagal mengedit...");
    }

} else {
    die("akses dilarang...");
}

?>