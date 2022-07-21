<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
     include 'proses/navbar.php';
    require 'proses/panggil.php';

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Aplikasi Data Alumni Forum Komunikasi Bidikmisi</title>
		<!-- BOOTSTRAP 4-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <!-- DATATABLES BS 4-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!-- DATATABLES BS 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- BOOTSTRAP 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

	</head>
    <body style="background:#040f54;">
		<div class="container">
			<div class="row">
				<div class="col-lg-14">

                    <?php if(!empty($_SESSION['ADMIN'])){?>
                    <br/>
                  <!--   <span style="color:#fff";>Selamat Datang, <?php echo $sesi['nama_pengguna'];?></span>
                    <a href="logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a> -->
                    <br/><br/>
                    <a href="tambah_demi.php" class="btn btn-success btn-md"><span class="fa fa-plus"></span> Tambah</a>
                    <a href="./report/cetak_demi.php" class="btn btn-success btn-md"><span class="fa fa-print"></span> Print</a>
                    <br/><br/>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Demisioner FKMB</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered" id="mytable" style="margin-top: 10px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Domisili</th>
                                        <th>Pekerjaan</th>
                                        <th>Bidang</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Foto</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=1;
                                    $hasil = $proses->tampil_data('tbl_demi');
                                    foreach($hasil as $isi){
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $isi['nama'];?></td>
                                        <td><?php echo $isi['jenis_kelamin'];?></td>
                                        <td><?php echo $isi['tempat_lahir'];?></td>
                                        <td><?php echo $isi['tanggal_lahir'];?></td>
                                        <td><?php echo $isi['domisili'];?></td>
                                        <td><?php echo $isi['pekerjaan'];?></td>
                                        <td><?php echo $isi['bidang'];?></td>
                                        <td><?php echo $isi['email'];?></td>
                                        <td><?php echo $isi['telepon'];?></td>
                                        <td><?php echo $isi['foto'];?></td>
                                        <td style="text-align: center;">
                                            <a href="edit_demi.php?id=<?php echo $isi['id_demi'];?>" class="btn btn-success btn-md">
                                            <span class="fa fa-edit"></span></a>
                                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="proses/crud_demi.php?aksi=hapus&hapusid=<?php echo $isi['id_demi'];?>" 
                                            class="btn btn-danger btn-md"><span class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php }else{?>
                        <br/>
<!--home-->
                        <!-- <div class="alert alert-info">
                            <h3> Maaf Anda Belum Dapat Akses, Silahkan Login Terlebih Dahulu !</h3>
                            <hr/>
                            <p><a href="login.php">Login Disini</a></p>
                        </div>
                    <?php }?>
			    </div>
			</div>
		</div> -->
        <?php include 'footer.php';?>
        <script>
            $('#mytable').dataTable();
        </script>
	</body>
</html>
