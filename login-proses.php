<?php
include('koneksi.php');

    //mysql_real_escape_string = mencegah sql injection '=' / '=''or' / 'or''='
    //md5 enkripsi untuk mengamankan password dari admin agar privasi terjaga
    $username = mysqli_real_escape_string($kon, $_POST['username']);
    $password = mysqli_real_escape_string($kon, md5($_POST['password']));

    // buat query untuk ambil data dari database
    $sql = ("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
    $query = mysqli_query($kon, $sql);
    $data = mysqli_fetch_assoc($query);
    $data['username'];
    $data['password'];


if ($username == $data['username'] && $password == $data['password']){
  
  echo '<meta http-equiv="refresh" content="0;url=dashboard.php">';
}

else if($_POST['username']  != null){
    echo '<meta http-equiv="refresh" content="0;url=login.php">';

}
else{
    header("location: login.php");
}
?>
