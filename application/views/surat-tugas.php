<?php

class PDF extends FPDF
{
	//Page header
	function Header()
	{
                $this->setFont('Arial','',10);
                $this->setFillColor(255,255,255);
                
                $this->setFont('Arial','',14);
                $this->setFillColor(255,255,255);
                $this->Image(base_url('backend/pemkot-kediri.png'),8,8,25,25);
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
				$this->SetFont('Times','BU','12');
				$this->Ln(5);
				$this->Cell(190,5,'SURAT PERINTAH TUGAS',0,1,'C');
				$this->SetFont('Times','','12');
				$this->Ln(0);
				$this->Cell(190,5,'Nomor : 800/        /419.13/2016',0,1,'C');
				$this->Ln(12);


                
	}
 
	function Content($nama,$nip,$teknisi,$jadwal)
	{

				$this->SetFont('Times','','12');
				$this->Cell(20,5,'Dasar 	:  1. Dokumen  Pelaksanaan  Anggaran Bagian  Pengelolaan Data Elektronik Sekretariat Daerah Kota Kediri',0,1,'FJ');
				$this->Ln(1);
				$this->Cell(50,5,'                Kegiatan Pembinaan dan Pengembangan Sumber Daya Komunikasi dan Informasi Tahun Anggaran 2016',0,1,'FJ');
				$this->Ln(1);
				$this->Cell(50,5,'              2. Perintah langsung Kepala Bagian Pengelolaan Data Elektronik Sekretariat Daerah Kota Kediri',0,1,'L');
				$this->Ln(25);
								$this->SetFont('Times','B','15');
				$this->Cell(0,5,'MEMERINTAHKAN',0,1,'C');

                $this->Ln(5);
                $this->setFont('Times','',12);
                $this->setFillColor(255,255,255);
                $this->cell(-1);
                $this->cell(20,6,'Kepada',0,0,'L',1);
                $this->cell(1,6,':  ',0,0,'C',1);



foreach ($teknisi as $t) {
	                $this->cell(1,6,"$t->nama",0,0,'L',1);	
                $this->Ln(5);
                $this->cell(20);
}
foreach ($jadwal as $j) {
                $this->Ln(30);
                $this->setFont('Times','',12);
                $this->setFillColor(255,255,255);
                $this->cell(-1);
                $this->cell(20,6,'Untuk',0,0,'L',1);
                $this->cell(1,6,':  ',0,0,'C',1);
                $this->cell(1,6,'Melakukan Perbaikan Jaringan Komputer di SKPD dan Sekolah Pemerintah Kota Tahun 2016',0,0,'L',1);	
                $this->Ln(5);
                $this->cell(20);
                $this->cell(30,6,'Yang dilaksanakan pada :',0,0,'L',1);
                $this->Ln(5);
                $this->cell(20);                
                $this->cell(1,6,"Hari           :     $j->hari ",0,0,'L',1);	
                $this->Ln(5);
                $this->cell(20);
                $this->cell(30,6,"Tanggal     :     $j->buat",0,0,'L',1);
                $this->Ln(5);
                $this->cell(20);
                $this->cell(30,6,"Pukul         :     $j->pukul
",0,0,'L',1);
                $this->Ln(5);
                $this->cell(20);
                $this->cell(30,6,"Tempat      :     $j->nm_ins",0,0,'L',1);       
                $this->Ln(35);  
                $this->cell(130);
                $this->cell(90,6,"Kediri, $j->buat",0,0,'L',1);  
                $this->Ln(5); 
                $this->cell(130);
            }
                $this->setFont('Times','B',12);
                $this->cell(90,6,'KEPALA BAGIAN',0,0,'L',1); 
                $this->Ln(5); 
                $this->cell(110);
                $this->setFont('Times','B',12);
                $this->cell(90,6,'PENGELOLAAN DATA ELEKTRONIK',0,0,'L',1);
                $this->Ln(35); 
                $this->cell(100);
                $this->setFont('Times','Bu',12);
                $this->cell(90,6,"$nama",0,0,'C',1);
                $this->Ln(5); 
                $this->cell(100);
                $this->setFont('Times','',12);
                $this->cell(90,6,"NIP. $nip",0,0,'C',1);                                                                                                         
	}
	function Footer()
	{

	}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content($nama,$nip,$teknisi,$jadwal);
$pdf->Output();