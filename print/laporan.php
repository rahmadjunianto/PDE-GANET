<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+
include("indo.php");
include("../konfigurasi.php");

$a=$_POST['tgl_1'];
$b=$_POST['tgl_2'];
$tgl1=date('Y-m-d',strtotime($_POST['tgl_1']));
$tgl2=date('Y-m-d',strtotime($_POST['tgl_2']));
$va= date('Y-m-d', strtotime('+1 days', strtotime($tgl2)));
$tgl_lap=TanggalIndo($va);

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
class MYPDF extends TCPDF {


	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Hal '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
	}
}
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('PDE');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF,Laporan, Laporan Jaringan, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER + 15);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)


// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

/*####################################################### 
#					 		PAGE 1						#
#########################################################*/




//------------------------------------------------------------
$pdf->AddPage('L', 'F4');
$tbl2 = '<table border="0" style="text-align:center; font-size:10px;">
			<tr style="font-size:20px;">
				<td style="text-align:center;" rowspan="4" style="width:100px"></td>
				<td style="text-align:center; font-size:20px;width:965px"><font size="16em"><b>MONITORING DAN PEMELIHARAAN JARINGAN INTRANET </b></font></td>
			</tr>
			<tr>
				<td style="text-align:center;"><font size="14em"><b>BAGIAN PDE PEMERINTAH KOTA KEDIRI</b></font></td>
			</tr>	
			<tr>
				<td style="text-align:center;"><font size="13em"><b>Periode '.$a.' sampai '.$b.'</b></font></td>
			</tr>				
		</table><br /><br />
		<br>
		';
		
				$tbl2 = $tbl2.'<table border="1px" cellpadding="2" cellspacing="0">
					<tr align="center" >
						<th rowspan="3" valign="middle" style="width:50; top:20px"><br>NO</th>
						<th colspan="5" style="width:550px">PENGADUAN </th>
						<th rowspan="3" style="width:75px">NAMA PENERIMA</th>
						<th colspan="4" style="width:400px">TINDAK LANJUT</th>
					</tr>
					<tr align="center" > <!--style="font-weight:bold"-->
						<th rowspan="2" style="width:100px">TANGGAL</th>
						<th rowspan="2" style="width:50px">PUKUL</th>
						<th colspan="3"  style="width:400px">PETUGAS</th>
						<th rowspan="2" style="width:75px">TANGGAL /  PUKUL</th>
						<th rowspan="2" style="width:115px"> MASALAH</th>
						<th rowspan="2" style="width:110px">SOLUSI</th>
						<th rowspan="2">PETUGAS LAPANGAN</th>
					</tr>			
					<tr align="center"  >
						<th >SKPD</th>
						<th>NAMA</th>
						<th>KETERANGAN</th>
					</tr>';
					

					$query = mysql_query("SELECT ms.tgl_lapor,ins.`nm_ins`,ms.`nama_pelapor`,ms.`keterangan`,us.`nama`,dt.`tgl_repair`,dt.`masalah`,dt.`solusi`,dt.`team`
					FROM tb_masalah ms
					JOIN tb_instansi ins ON ms.`id_ins`=ins.`id_ins`
					JOIN tb_user us ON ms.`penerima`=us.`id`
					JOIN tb_masalah_dtl dt ON ms.`id_masalah`=dt.`id_masalah`
					WHERE DATE_FORMAT(ms.tgl_lapor,'%Y-%m-%d')  BETWEEN  '".$tgl1."' AND '".$tgl2."' 
					ORDER BY ms.id_masalah");
					
					
					$i = 0;
					while ($dt = mysql_fetch_array($query)){
						$i++;
						$tgl_lp = date('d-m-Y',strtotime($dt['tgl_lapor']));
						$jam=date('H:i',strtotime($dt['tgl_lapor']));
						$nm_i = $dt['nm_ins'];
						$nm_pl = $dt['nama_pelapor'];
						$ket = $dt['keterangan'];
						$nm = $dt['nama'];
						$tgl_re = date('d-m-Y / H:i',strtotime($dt['tgl_repair']));
						$msl = $dt['masalah'];
						$sol = $dt['solusi'];
						$team = $dt['team'];
						
						$tbl2 = $tbl2.'<tr style ="font-size:10px;">
													<td align="center" style="width:50px">'.$i.'</td>
													<td>'.$tgl_lp.'</td>
													<td >'.$jam.'</td>
													<td >'.$nm_i.'</td>
													<td>'.$nm_pl.'</td>
													<td>'.$ket.'</td>
													<td>'.$nm.'</td>
													<td>'.$tgl_re.'</td>
													<td>'.$msl.'</td>
													<td>'.$sol.'</td>
													<td>'.$team.'</td>
												</tr>';
					}
					
$tbl2 = $tbl2.'</table>';
$tbl2 = $tbl2.'<br /><br />
					<br>
					<br>
							<br>
							
					<table border="0" style="text-align:center; font-size:12px; width:100%">
							<tr style ="font-size:12px;">
								<td colspan="10" ></td>
								<td  colspan="3" style="text-align:center; ">Kediri, '.$tgl_lap.'</td>
							</tr>	
							<br>
							<tr style ="font-size:12px;">
								<td colspan="10" ></td>
								<td  colspan="3" style="text-align:center; ">A.N KABAG PDE</td>
							</tr>		
							<tr style ="font-size:12px;">
								<td colspan="10" ></td>
								<td  colspan="3" style="text-align:center; ">KASUBAG TELEMATIKA</td>
							</tr>	
							<br>
							<br>
							<br>
							<br>
							<tr style ="font-size:12px;">
								<td colspan="10" ></td>
								<td  colspan="3" style="text-align:center; text-decoration:underline;">SAPTO HANDOYO SETIYONO,ST</td>
							</tr>
							<tr style ="font-size:12px;">
								<td colspan="10" ></td>
								<td  colspan="3" style="text-align:center; ">NIP.19730807 20051 1 010</td>
							</tr>
					</table>
					';

//$pdf->getAliasNbPages();
$pdf->writeHTML($tbl2, true, false, true, false, '');
//$pdf->writeHtmlCell($tbl2,3,20,4,'<p>Page '.$pdf->getAliasNumPage().' of  '.' '.$pdf->getAliasNbPages().'</p>','',1,0,false,'R');
// reset pointer to the last page

$pdf->lastPage();

//$pdf->Cell(0, 10, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');

//Close and output PDF document
$pdf->Output('Laporan.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
