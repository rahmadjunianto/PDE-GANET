<?php
error_reporting(E_ALL ^ E_DEPRECATED);
/* variabel konfigurasi */
$h			= "localhost";		// server
$u			= "root";			// db username
$p			= "";				// db password
$d 			= "datapde";		// db name 

mysql_connect($h, $u, $p) or die (mysql_error());
mysql_select_db($d);
/*
define("HOST", "localhost"); // Host database
define("USER", "root"); // Username database
define("PASSWORD", ""); // Password database
define("DATABASE", "datapde"); // Nama database
 
$db_conx = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
 
if (mysqli_connect_errno()) {
  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); // Jika koneksi gagal, tampilkan pesan "Koneksi ke database gagal"
}*/
?>