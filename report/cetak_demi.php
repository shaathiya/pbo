<?php
//menyertakan file fpdf, file fpdf.php di dalam folder FPDF yang diekstrak
include "../report/fpdf.php";



//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF('landscape','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',12);
// judul
$pdf->Cell(190,7,'POLITEKNIK NEGERI SAMBAS',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR DEMISIONER',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->MultiCell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,6,'NO',1,0,'C');
$pdf->Cell(28,6,'NAMA',1,0,'C');
$pdf->Cell(30,6,'TEMPAT',1,0,'C');
$pdf->Cell(35,6,'TANGGAL',1,0,'C');
$pdf->Cell(35,6,'DOMISILI',1,0,'C');
$pdf->Cell(35,6,'PEKERJAAN',1,0,'C');
$pdf->Cell(35,6,'BIDANG',1,0,'C');
$pdf->Cell(35,6,'EMAIL',1,0,'C');
$pdf->Cell(17,6,'TELEPON',1,0,'C');
$pdf->Cell(25,6,'FOTO',1,1, 'C');

//memberi enter
// $pdf->Ln(5);
// $pdf->Cell(35,6,'USERNAME',1,0);
// $pdf->Cell(50,6,'PASSWORD',1,1);
 
$pdf->SetFont('Arial','',7);
 
//koneksi ke database
include '../proses/connect.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tbl_demi ");
        while($d = mysqli_fetch_array($data)){
    $pdf->Cell(10,9,$no++,1,0,'C');
    $pdf->Cell(28,9,$d['nama'],1,0,'C',false);
    $pdf->Cell(30,9,$d['tempat_lahir'],1,0,'C',false);
    $pdf->Cell(35,9,$d['tanggal_lahir'],1,0,'C',false); 
    $pdf->Cell(35,9,$d['domisili'],1,0,'C',false);
    $pdf->Cell(35,9,$d['pekerjaan'],1,0,'C',false);
    $pdf->Cell(35,9,$d['bidang'],1,0,'C',false);
    $pdf->Cell(35,9,$d['email'],1,0,'C',false);
    $pdf->Cell(17,9,$d['telepon'],1,0,'C',false);
    $pdf->Cell(25,9,$d['foto'],1,1,'C');
}
 
$pdf->Output();


?>
