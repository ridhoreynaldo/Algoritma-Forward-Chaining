<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $gejala = $_POST['gejala'];
    $sql = "INSERT INTO tb_gejala (id,kode,gejala) VALUE ($id,'$kode','$gejala')";
    $query = mysqli_query($kon, $sql);

    // apakah query berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman dashboard.php dengan status=sukses
        header('Location: dashboard.php');
    } else {
        // kalau gagal alihkan ke halaman dashboard.php dengan status=gagal
        header('Location: dashboard.php');
    }

} else {
    die("Akses dilarang...");
}

?>