<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
    if(!empty($_SESSION['ADMIN'])){ }else{ header('location:login.php'); }
    // panggil file
    require 'proses/panggil.php';
?>

<<!DOCTYPE HTML>
<html>
    <head>
        <title>Tambah Pengguna</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background:#586df5;">
        <div class="container">
            <br/>
            <div class="float-right">   
                <a href="demi.php" class="btn btn-success btn-md" style="margin-right:1pc;"><span class="fa fa-home"></span> Kembali</a> 
            </div>
                       <br/><br/><br/>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-lg-6">
                    <br/>
                    <div class="card">
                        <div class="card-header">
                        <h4 class="card-title">Tambah Demisioner <?php echo $hasil['nama'];?></h4>
                        </div>
                        <div class="card-body">
                        <!-- form berfungsi mengirimkan data input 
                        dengan method post ke proses crud dengan paramater get aksi edit -->
                            <form action="proses/crud_demi.php?aksi=tambah" method="POST">
                                <div class="form-group">
                                    <label>Nama </label>
                                    <input type="text" value="<?php echo $hasil['nama'];?>" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label><br>
                                    <input type="text" value="<?php echo $hasil['jenis_kelamin'];?>" class="form-control" name="jenis_kelamin">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" value="<?php echo $hasil['tempat_lahir'];?>" class="form-control" name="tempat_lahir">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control"><?php echo $hasil['tanggal_lahir'];?>
                                </div>
                                <div class="form-group">
                                    <label>Domisili</label>
                                    <input type="text" value="<?php echo $hasil['domisili'];?>" class="form-control" name="domisili">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" value="<?php echo $hasil['pekerjaan'];?>" class="form-control" name="pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label>Bidang</label>
                                    <input type="text" value="<?php echo $hasil['bidang'];?>" class="form-control" name="bidang">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" value="<?php echo $hasil['email'];?>" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" value="<?php echo $hasil['telepon'];?>" class="form-control" name="telepon">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" value="<?php echo $hasil['foto'];?>" class="form-control" name="foto">
                                </div>
                                <button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>
</html>