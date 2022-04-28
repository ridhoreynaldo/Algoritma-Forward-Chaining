<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include("body.php"); ?>
        <main role="main" class="col-md-1 ml-sm-auto col-lg-12 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
            <h1 class="h2">Edit Solusi dan Penyakit</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm" style="text-align: center;" >
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Kode</th>
                  <th>Penyakit</th>
                  <th>Solusi</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              
              <tbody>
              <form action="solusi-daftar-proses.php" method="POST">
                  <tr>
                    <td><input type="text" class="form-control col-sm-3 container text-center" name="id" value=""></td>
                    <td><input type="text" class="form-control col-sm-4 container text-center" name="kode" value=""></td>
                    <td><input type="text" class="form-control col-sm-12 container text-center" name="penyakit" value=""></td>
                    <td><textarea cols="60" rows="60" class="form-control col-sm-60 container text-center" name="solusi" value=""></textarea></td>
                    <td></td>
                    <td><input type="submit" name="daftar" class='btn btn-sm btn-success' value="Tambah"></td>
                    <td></td>
                  </tr>
                </form>
                
              <?php
              include "koneksi.php";
            $qry="select * from tb_solusi";
            $data=mysqli_query($kon,$qry);
            while ($d=mysqli_fetch_array($data)) {
                ?>     
                <form action="solusi-edit-proses.php" method="GET">
                  <tr>
                    <td><input type="hidden" name="id" value="<?=$d['id']?>"><?=$d['id']?></td>
                    <td><input type="text" class="form-control col-sm-4 container text-center" name="kode" value="<?=$d['kode']?>"></td>
                    <td><input type="text" class="form-control col-sm-12 container text-center" name="penyakit" value="<?=$d['penyakit']?>"></td>
                    <td><textarea cols="28" rows="3" class="form-control container text-center" name="solusi" ><?=$d['solusi']?></textarea></td>
                    <td><input type="submit" class='btn btn-sm btn-success' value="&nbsp;Edit&nbsp"></td>
                    <td></td>
                    <td><a class='btn btn-sm btn-danger' href='solusi-hapus.php?id=<?=$d['id']?>'>Hapus</a></td>
                  </tr>
                </form>
               <?php
                }
                ?>
              </tbody> 
            </table>
        </main>
      </div>
    </div>