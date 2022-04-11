<?php
$host = "localhost"; //nama host
$user = "root"; //username phpMyAdmin
$pass = ""; //password phpMyAdmin
$name = "db_desa"; //nama database

$koneksi = mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($name) or die("Tidak ada database yang dipilih!");
?>
