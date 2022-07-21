<?php
//menyertakan file fpdf, file fpdf.php di dalam folder FPDF yang diekstrak
include "../report/fpdf.php";



//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(190,7,'POLITEKNIK NEGERI SAMBAS',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR USER',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NOMOR',1,0);
$pdf->Cell(35,6,'NAMA ADMIN',1,0);
$pdf->Cell(35,6,'TELEPON',1,0);
$pdf->Cell(70,6,'EMAIL',1,0);
$pdf->Cell(50,6,'ALAMAT',1,1);
//memberi enter
// $pdf->Ln(5);
// $pdf->Cell(35,6,'USERNAME',1,0);
// $pdf->Cell(50,6,'PASSWORD',1,1);
 
$pdf->SetFont('Arial','',10);
 
//koneksi ke database
include '../proses/connect.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tbl_user ");
        while($d = mysqli_fetch_array($data)){
    $pdf->Cell(20,6,$no++,1,0);
    $pdf->Cell(35,6,$d['nama_pengguna'],1,0);
    $pdf->Cell(35,6,$d['telepon'],1,0);
    $pdf->Cell(70,6,$d['email'],1,0); 
    $pdf->Cell(50,6,$d['alamat'],1,1);
    // $pdf->Cell(35,6,$d['username'],1,0);
    // $pdf->Cell(50,6,$d['password'],1,1);
}
 
$pdf->Output();


?>
