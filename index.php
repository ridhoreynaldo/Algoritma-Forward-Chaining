<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {background:url(style/guppy.jpg); margin:0; padding:0; background-size:100%}
</style>
<link rel="stylesheet" href="style/bootstrap1.min.css">

<link rel="stylesheet" type="text/css" href="css/bgandterminal.css"> 
<script src="js/terminal.js"></script>


<script type="text/javascript">
window.onscroll = function() {scrollFunction()}; // saat window di scroll
 
function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}
</script>
</head>
<body>
<a href="about.php">
<input type="submit" class="btn btn-secondary" value="Tentang"></div></a>

<style type="text/css">
    .element {
        position: absolute;
        right: 0px;
        top: 0px;
        width: 120px;
    }
</style>
<div class="element">
<a href="login.php">
<input type="submit" class="btn btn-danger" value="Login Admin"></div></a>
</div>

<div id="wrapper">
     <center><font color="cyan"><h5 class="card-header">Pertanyaan Sistem Diagnosis Penyakit Ikan Guppy Menggunakan Metode Forward Chaining</h5></font>
<div class="box">
<span class="prefix">
<div id="console">

    
         <?php include ('koneksi.php'); ?>
            <form class="col-10" method="POST" action="proses.php">
                
            <?php
            $qry="select * from tb_gejala";
            $data=mysqli_query($kon,$qry);
            while ($d=mysqli_fetch_array($data)) {
                ?>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" value="<?=$d['kode']?>" name="<?=$d['id']?>"> 
                        </div>
                    </div>
                    <input type="text" class="form-control" disabled value="<?=$d['gejala']?>">
                </div>
                <?php
                }
                ?>
                </div></span></div>
                <input type="submit" class="btn btn-info btn-block" name="submit" value="Diagnosa"></div>
            </form>
            </body>
</html>