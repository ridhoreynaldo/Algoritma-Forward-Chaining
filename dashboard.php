<?php include("koneksi.php"); ?>
<?php include "body.php" ?> 
<?php
$sql = "SELECT * FROM tb_gejala";
$query = mysqli_query($kon, $sql);

$sql1 = "SELECT * FROM tb_solusi";
$query1 = mysqli_query($kon, $sql1);

$sql2 = "SELECT * FROM rules";
$query2 = mysqli_query($kon, $sql2);

$sql3 = "SELECT * FROM tb_admin";
$query3 = mysqli_query($kon, $sql3);
?>
           <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-glass f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo mysqli_num_rows($query) ?></h2>
                                    <p class="m-b-0">Total Gejala</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-flask f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo mysqli_num_rows($query1) ?></h2>
                                    <p class="m-b-0">Total Solusi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-gavel f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo mysqli_num_rows($query2) ?></h2>
                                    <p class="m-b-0">Total Rules</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?php echo mysqli_num_rows($query3) ?></h2>
                                    <p class="m-b-0">Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>