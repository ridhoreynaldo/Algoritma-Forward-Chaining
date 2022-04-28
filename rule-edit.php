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
            <h1 class="h2">Edit Rules</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm" style="text-align: center;" >
              <thead>
                <tr>
                  <th>Id</th>
                  <th colspan="2">Rules [ if G0 then S0 ]</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              
              <tbody>
              <form action="rule-daftar-proses.php" method="POST">
                  <tr>
                    <td><input type="text" class="form-control col-sm-2 container text-center" name="id" value=""></td>
                    <td><input type="text" class="form-control col-sm-8 container text-center" name="rules" value=""></td>
                    <td><input type="text" class="form-control col-sm-4 container text-center" name="rules1" value=""></td>
                    <td></td>
                    <td><input type="submit" name="daftar" class='btn btn-sm btn-success' value="Tambah&nbsp"></td>
                    <td></td>
                  </tr>
                </form>
              <?php
              include "koneksi.php";
            $qry="select * from rules";
            $data=mysqli_query($kon,$qry);
            while ($d=mysqli_fetch_array($data)) {
                ?>     
                <form action="rule-edit-proses.php" method="GET">
                  <tr>
                    <td><input type="hidden" name="id" value="<?=$d['id']?>"><?=$d['id']?></td>
                    <td><input type="text" class="form-control col-sm-8 container text-center" name="rules" value="<?=$d['rules']?>"></td>
                    <td><input type="text" class="form-control col-sm-4 container text-center" name="rules1" value="<?=$d['rules1']?>"></td>
                    <td><input type="submit" class='btn btn-sm btn-success' value="&nbsp;Edit&nbsp"></td>
                    <td></td>
                    <td><a class='btn btn-sm btn-danger' href='rule-hapus.php?id=<?=$d['id']?>'>Hapus</a></td>
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