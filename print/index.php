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

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

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

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

/*####################################################### 
#					 		PAGE 1						#
#########################################################*/

mysql_connect("localhost", "root", "");
mysql_select_db("produk");
$query = mysql_query("SELECT kp.nama_produk, kp.harga, k.nama_kategoriku FROM kategoriku_produk kp JOIN kategoriku k ON kp.id_kategoriku=k.id_kategoriku");

//------------------------------------------------------------
$pdf->AddPage('L', 'F4');

$tbl2 = '<table border="0" style="text-align:center;">
			<tr>
				<td style="text-align:center;" rowspan="2" style="width:100px"></td>
				<td style="text-align:center;" style="width:960px"><font size="13em"><b>LAPORAN JARINGAN INTRANET PEMERINTAH KOTA KEDIRI</b></font></td>
			</tr>
			<tr>
				<td style="text-align:center;"><font size="13em"><b>BAGIAN PDE - TAHUN 2016</b></font></td>
			</tr>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center; border-bottom: 1px solid black;"><font size="7em">
				Telp. xxxx-dddddd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				fax: xxxx-ddddddd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				email: xxxx@xxxx.com
				</font></td>
			</tr>
			
		</table><br /><br />
		<table border="0" style="text-align:center;">
			<tr>
				<td colspan="2" style="text-align:center;width:635px"><font size="9em"><b>SURAT CINTAKU YANG PERTAMA</b></font></td>
			</tr>
			<tr>
				<td style="text-align:left;" style="width:535px"><font size="8em">Nomor :</font></td>
				<td style="text-align:left;" style="width:100px"><font size="8em"></font></td>
			</tr>
		</table>
		<br><br>
		';
		
				$tbl2 = $tbl2.'<table border="1px" cellpadding="2" cellspacing="0">
					<tr>
						<td>No</td><td>Nama Produk</td><td>Harga</td><td>Kategori</td>
					</tr>';
					$i = 0;
					while ($dt = mysql_fetch_array($query)){
						$i++;
						$nama_produk = $dt['nama_produk'];
						$harga = $dt['harga'];
						$nama_kategori = $dt['nama_kategoriku'];
						
						$tbl2 = $tbl2.'<tr><td>'.$i.'</td><td>'.$nama_produk.'</td><td>'.$harga.'</td><td>'.$nama_kategori.'</td></tr>';
					}
					
$tbl2 = $tbl2.'</table>';
$pdf->writeHTML($tbl2, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

/*####################################################### 
#					 		PAGE 2						#
#########################################################*/
$pdf->AddPage('P', 'A4');

$tbl2 = '<table border="0" style="text-align:center;">
			<tr>
				<td style="text-align:center;width:635px;"><font size="9em">SURAT CINTAKU YANG PERTAMA</font></td>
			</tr>
			<tr>
				<td style="text-align:center;width:635px;border-bottom: 1px solid black;"><font size="9em">NO. :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/SRT/CNT/2014</font></td>
			</tr>
		</table>
		<br><br>
		';
		
				$tbl2 = $tbl2.'<table border="1px" cellpadding="2" cellspacing="0">
					<tr>
						<td>No</td><td>Nama Produk</td><td>Harga</td><td>Kategori</td>
					</tr>';
					
					for ($i=0; $i<10; $i++){
						$nama_produk1 = 'OK'.($i+1);
						$harga1 = 'WOHOHO'.($i+1);
						$id_kategori1 = 'YOYOYO'.($i+1);
						$tbl2 = $tbl2.'<tr><td>'.$i.'</td><td>'.$nama_produk1.'</td><td>'.$harga1.'</td><td>'.$id_kategori1.'</td></tr>';
					}
$tbl2 = $tbl2.'</table>';
$pdf->writeHTML($tbl2, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

/*####################################################### 
#					 		PAGE 3						#
#########################################################*/

$pdf->AddPage('L', 'F4');
$query2 = mysql_query("SELECT * FROM kategoriku");

$tbl = 'Daftar Kategori<br /><br />4
				<table border="1px" cellpadding="2" cellspacing="0">
					<tr>
						<td width="5%">No</td><td width="95%">Nama Kategori</td>
					</tr>';
					$i=0;
					while ($dt2 = mysql_fetch_array($query2)){
						$nama_kategoriku = $dt2['nama_kategoriku'];
						
						$i++;
						$tbl = $tbl.'<tr><td width="5%">'.$i.'</td><td width="95%">'.$nama_kategoriku.'</td></tr>';
					}
$tbl = $tbl.'</table>';
$pdf->writeHTML($tbl, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
