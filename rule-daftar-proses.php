<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $rules = $_POST['rules'];
    $rules1 = $_POST['rules1'];
    $sql = "INSERT INTO rules (id,rules,rules1) VALUE ($id,'$rules','$rules1')";
    $query = mysqli_query($kon, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman dashboard.php dengan status=sukses
        header('Location: rule-edit.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: rule-edit.php');
    }

} else {
    die("Akses dilarang...");
}

?>