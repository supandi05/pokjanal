<?php
$dbhost = 'localhost'; 
$dbuser = 'root'; //ini hanya berlaku di Xampp
$dbpass = ''; //ini hanya berlaku di Xampp
$dbname = 'posyandu';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>