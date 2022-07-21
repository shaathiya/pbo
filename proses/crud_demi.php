<?php
    require 'panggil.php';

    // proses tambah
    if(!empty($_GET['aksi'] == 'tambah'))
    {
        $nama = strip_tags($_POST['nama']);
        $jenis_kelamin = strip_tags($_POST['jenis_kelamin']);
        $tempat_lahir = strip_tags($_POST['tempat_lahir']);
        $tanggal_lahir = strip_tags($_POST['tanggal_lahir']);
        $domisili = strip_tags($_POST['domisili']);
        $pekerjaan = strip_tags($_POST['pekerjaan']);
        $bidang = strip_tags($_POST['bidang']);
        $email = strip_tags($_POST['email']);
        $telepon = strip_tags($_POST['telepon']);
        $foto = strip_tags($_POST['foto']);
        
        $tabel = 'tbl_demi';
        # proses insert
        $data[] = array(
            'nama'      =>$nama,
                'jenis_kelamin'     =>$jenis_kelamin,
                'tempat_lahir'      =>$tempat_lahir,
                'tanggal_lahir'     =>$tanggal_lahir,
                'domisili'          =>$domisili,
                'pekerjaan'     =>$pekerjaan,
                'bidang'     =>$bidang,
                'email'     =>$email,
                'telepon'     =>$telepon,
                'foto'     =>$foto
        );
        $proses->tambah_data_demi($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../demi.php"</script>';
    }

    // proses edit
	if(!empty($_GET['aksi'] == 'edit'))
	{
		$nama = strip_tags($_POST['nama']);
		$jenis_kelamin = strip_tags($_POST['jenis_kelamin']);
		$tempat_lahir = strip_tags($_POST['tempat_lahir']);
		$tanggal_lahir = strip_tags($_POST['tanggal_lahir']);
		$domisili = strip_tags($_POST['domisili']);
		$pekerjaan = strip_tags($_POST['pekerjaan']);
        $bidang = strip_tags($_POST['bidang']);
        $email = strip_tags($_POST['email']);
        $telepon = strip_tags($_POST['telepon']);
		$foto = strip_tags($_POST['foto']);

        if(!empty($_GET['aksi'] == 'edit'))
        {
            $data = array(
                'nama'      =>$nama,
                'jenis_kelamin'     =>$jenis_kelamin,
                'tempat_lahir'      =>$tempat_lahir,
                'tanggal_lahir'     =>$tanggal_lahir,
                'domisili'          =>$domisili,
                'pekerjaan'     =>$pekerjaan,
                'bidang'     =>$bidang,
                'email'     =>$email,
                'telepon'     =>$telepon,
                'foto'     =>$foto
            );
        }else{

            $data = array(
                'nama'		=>$nama,
                'jenis_kelamin'		=>$jenis_kelamin,
                'tempat_lahir'	    =>$tempat_lahir,
                'tanggal_lahir'		=>$tanggal_lahir,
                'domisili'			=>$domisili,
                'pekerjaan'		=>$pekerjaan,
                'bidang'     =>$bidang,
                'email'     =>$email,
                'telepon'     =>$telepon,
                'foto'     =>$foto
            );
        }
        $tabel = 'tbl_demi';
        $where = 'id_demi';
        $id_demi = strip_tags($_POST['id_demi']);
        $proses->edit_data_demi($tabel,$data,$where,$id_demi);
        echo '<script>alert("Edit Data Berhasil");window.location="../demi.php"</script>';
    }
    
    // hapus data demisioner
    if(!empty($_GET['aksi'] == 'hapus'))
    {
        $tabel = 'tbl_demi';
        $where = 'id_demi';
        $id_demi = strip_tags($_GET['hapusid']);
        $proses->hapus_demi($tabel,$where,$id_demi);
        echo '<script>alert("Hapus Data Berhasil");window.location="../demi.php"</script>';
    }

    
?>