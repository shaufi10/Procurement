<?php
$dbhost = "127.0.0.1";
$dbuser = "root";
$password = "";
$dbname = "data_rfq";
 		
$con = mysql_connect($dbhost, $dbuser, $password) or die
("Koneksi gagal");
mysql_select_db($dbname, $con);
?>
