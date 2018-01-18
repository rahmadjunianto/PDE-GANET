<?php
include("indo.php"); 
$nama=$this->session->userdata('NAME');
class PDF extends FPDF
{


    
	//Page header
	function Header()
	{
                $this->setFont('Arial','',10);
                $this->setFillColor(255,255,255);
                
                $this->setFont('Arial','',14);
                $this->setFillColor(255,255,255);
                $this->Image(base_url('backend/pemkot-kediri.png'),5,5,20,20);
				$this->SetFont('Times','B','12');
				$this->Cell(220,5,'PEMERINTAH KOTA KEDIRI',0,1,'C');
				$this->Cell(25);
				$this->Cell(0,5,'SEKRETARIAT DAERAH',0,1,'C');
				$this->Cell(25);
				$this->SetFont('Times','B','15');
				$this->Cell(0,5,'BAGIAN PENGELOLAAN DATA ELEKTRONIK',0,1,'C');
				$this->Cell(25);
				$this->SetFont('Times','I','8');
				$this->Cell(0,5,'Jalan Jend. Basuki Rakhmad No. 15 Kediri 64123 Jawa Timur Telp. (0354) 682955',0,1,'C');
				$this->Cell(50);            
                $this->SetLineWidth(1);
$this->Line(10,32,210,32);
$this->SetLineWidth(0);
$this->Line(10,33,210,33);

    

                
	}
 
	function Content($instansi,$nama,$isi,$tgl)
	{
                                                $this->SetFont('Times','B','12');
                                $this->Ln(5);
                                $this->Cell(200,5,'Tanda Terima Pekerjaan',0,1,'C');
                                $this->SetFont('Times','','12');
                                $this->Ln(0);
                                
                               foreach ($tgl as $key) {
                                        $this->Cell(60,5, "Kediri, ".TanggalIndo(date('Y-m-d',strtotime($key->tgl_repair))),0,1,'L');
                                }
                                $this->Ln(0);
                                $this->SetFont('Times','','12');
                                $this->Ln(0);
                                $this->Cell(30,5, 'Lokasi Perbaikan :',0,1,'L');
                                $this->Ln(0);
                                $this->SetFont('Times','','12');
                                $this->Ln(0);
                                                              foreach ($instansi as $key) {
                                        $this->Cell(40,5,"$key->nm_ins",0,1,'L');
                                }
                                $this->Ln(8);

                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(20,8,'No.',1,0,'C',1);
                $this->cell(120,8,'URAIAN',1,0,'C',1);
                $this->cell(60,8,'STATUS',1,0,'C',1);
                $this->Ln(8);
$no=1;
foreach ($isi as $key ) {
                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(20,8,'',1,0,'C',1);
                $this->cell(120,8,'',1,0,'L',1);
                $this->cell(60,8,'',1,0,'C',1);
                $this->Ln(8);
                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(20,8,'',1,0,'C',1);
                $this->cell(120,8,'',1,0,'L',1);
                $this->cell(60,8,'',1,0,'C',1);
                $this->Ln(8);
                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(20,8,'',1,0,'C',1);
                $this->cell(120,8,'',1,0,'L',1);
                $this->cell(60,8,'',1,0,'C',1);
                $this->Ln(8);
                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(20,8,'',1,0,'C',1);
                $this->cell(120,8,'',1,0,'L',1);
                $this->cell(60,8,'',1,0,'C',1);
                $this->Ln(8);                                                
}
                $this->Ln(12);
				$this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(70,8,'PELAKSANA PEKERJAAN',0,0,'C',1);
                $this->cell(70,8,'',0,0,'C',1);
                $this->cell(50,8,'PENERIMA PEKERJAAN',0,0,'C',1);
                $this->cell(20,8,'',0,0,'C',1);
                $this->Ln(20);
				$this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(70,8,'(.......................................................)',0,0,'C',1);
                $this->cell(65,8,'',0,0,'C',1);
                $this->cell(60,8,'(.......................................................)',0,0,'C',1);
$this->Ln(12);
$this->Cell(50); 
$this->Ln(12);
 $this->setFont('Arial','',10);
                $this->setFillColor(255,255,255);
                
                $this->setFont('Arial','',14);
                $this->setFillColor(255,255,255);
                $this->Image(base_url('backend/pemkot-kediri.png'),8,148,25,25);
                                $this->SetFont('Times','B','12');
                                $this->Cell(220,5,'PEMERINTAH KOTA KEDIRI',0,1,'C');
                                $this->Cell(25);
                                $this->Cell(0,5,'SEKRETARIAT DAERAH',0,1,'C');
                                $this->Cell(25);
                                $this->SetFont('Times','B','15');
                                $this->Cell(0,5,'BAGIAN PENGELOLAAN DATA ELEKTRONIK',0,1,'C');
                                $this->Cell(25);
                                $this->SetFont('Times','I','8');
                                $this->Cell(0,5,'Jalan Jend. Basuki Rakhmad No. 15 Kediri 64123 Jawa Timur Telp. (0354) 682955',0,1,'C');
                                $this->Cell(50);            
                $this->SetLineWidth(1);
$this->Line(10,173,210,173);
$this->SetLineWidth(0);
$this->Line(10,174,210,174);
                                $this->SetFont('Times','B','12');
                                $this->Ln(5);
                                $this->Cell(200,5,'Tanda Terima Pekerjaan',0,1,'C');
                                $this->SetFont('Times','','12');
                                $this->Ln(0);
                                foreach ($tgl as $key) {
                                        $this->Cell(60,5, "Kediri, ".TanggalIndo(date('Y-m-d',strtotime($key->tgl_repair))),0,1,'L');
                                }
                                $this->Ln(0);
                                $this->SetFont('Times','','12');
                                $this->Ln(0);
                                $this->Cell(30,5, 'Lokasi Perbaikan :',0,1,'L');
                                $this->Ln(0);
                                $this->SetFont('Times','','12');
                                $this->Ln(0);
                                                               foreach ($instansi as $key) {
                                        $this->Cell(40,5,"$key->nm_ins",0,1,'L');
                                }
                                $this->Ln(8);
                                 $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(20,8,'No.',1,0,'C',1);
                $this->cell(120,8,'URAIAN',1,0,'C',1);
                $this->cell(60,8,'STATUS',1,0,'C',1);
                $this->Ln(8);
$no=1;
foreach ($isi as $key ) {
                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(20,8,$no++,1,0,'C',1);
                $this->cell(120,8,$key->solusi,1,0,'L',1);
                $this->cell(60,8,'',1,0,'C',1);
                $this->Ln(8);            
}
$this->Ln(12);
                                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(70,8,'PELAKSANA PEKERJAAN',0,0,'C',1);
                $this->cell(70,8,'',0,0,'C',1);
                $this->cell(50,8,'PENERIMA PEKERJAAN',0,0,'C',1);
                $this->cell(20,8,'',0,0,'C',1);
                $this->Ln(20);
                                $this->setFont('Times','','12');
                $this->setFillColor(255,255,255);
                $this->cell(70,8,'(.......................................................)',0,0,'C',1);
                $this->cell(65,8,'',0,0,'C',1);
                $this->cell(60,8,'(.......................................................)',0,0,'C',1);
              
	}
	function Footer()
	{
		
	}
}

$pdf = new PDF(); 
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($instansi,$nama,$isi,$tgl);
$pdf->Output();