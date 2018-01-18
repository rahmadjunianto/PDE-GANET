<?php
 
//Import the PhpJasperLibrary
include_once('PhpJasperLibrary/tcpdf/tcpdf.php');
include_once("PhpJasperLibrary/PHPJasperXML.inc.php");
include '../konfigurasi.php';
//database connection details
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetTitle('PDE');
 $i=0;
	$teknisi='';
	foreach($_POST['teknisi'] as $sel){
		$tek[]=$sel;
		$teknisi.="'".$tek[$i]."',";
		$i++;
	}
	$teknisi = (substr($teknisi,0,1)==',')?substr($teknisi,1,strlen($teknisi)-1):substr($teknisi,0,strlen($teknisi)-1);
 
$server="localhost";
$db="datapde";
$user="root";
$pass="";
$version="0.8b";
$pgport=5432;
$pchartfolder="./class/pchart2";
 
 
 $data = array(); //variabel data adalah array 0
 $sql = mysql_query("SELECT id,nama FROM tb_user 
WHERE nama IN ($teknisi)"); //query untuk mendapatkan semua data mahasiswa
  while ($r = mysql_fetch_array($sql)){ // data akan di ulang
    $data[]=$r['nama'];
	
  }

  $implode = implode(",",$data);
 // echo $data[3];
 
//display errors should be off in the php.ini file
ini_set('display_errors', 0);
 
//setting the path to the created jrxml file

$xml =  simplexml_load_file("report/Surat_Tugas.jrxml");


$p1 = $_POST['idmslh'];
$p2 = $_POST['nm_ttd'];
$p3 = $_POST['nip'];

$a1=$data[0];
$a2=$data[1];
$a3=$data[2];
$a4=$data[3];
$a5=$data[4];


$PHPJasperXML = new PHPJasperXML();
$PHPJasperXML->arrayParameter=array("a"=> $p1,"nama"=>$p2,"nip"=>$p3,"p1"=> $a1,"p2"=>$a2,"p3"=>$a3,"p4"=>$a4,"p5"=>$a5);
$PHPJasperXML->xml_dismantle($xml);
 
$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file

?>