<?php
$dbhost = 'localhost'; 
$dbuser = 'root'; //ini hanya berlaku di Xampp
$dbpass = ''; //ini hanya berlaku di Xampp
$dbname = 'pokjanal';

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
?>