<?php
 
//Import the PhpJasperLibrary
include_once('PhpJasperLibrary/tcpdf/tcpdf.php');
include_once("PhpJasperLibrary/PHPJasperXML.inc.php");
 
 
//database connection details
 
$server="localhost";
$db="datapde";
$user="root";
$pass="";
$version="0.8b";
$pgport=5432;
$pchartfolder="./class/pchart2";
 
 
//display errors should be off in the php.ini file
ini_set('display_errors', 0);
 
//setting the path to the created jrxml file

$xml =  simplexml_load_file("report/Serah.jrxml");

$p2 = $_GET['id'];

$PHPJasperXML = new PHPJasperXML();
$PHPJasperXML->arrayParameter=array("a"=> $p2);
$PHPJasperXML->xml_dismantle($xml);
 
$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file
 
?>