<?php
if(isset($_GET['id'])){
include('koneksi.php');
$id = $_GET['id'];
$sql = "select nik_balita from data_balita where nik_balita='$id'"; // syntax SQL
$result = $connect->query($sql); // eksekusi perintah SQL
if ($result->num_rows == 0) {
	echo '<script>window.history.back()</script.';
}else{
	$del = "delete from data_balita where nik_balita='$id'";
	if(mysqli_query($connect, $del)){
	echo '<script>alert("Data berhasil di hapus!");window.location="tampil_balita.php"</script>';
	}else{
		echo '<script>alert("Data Gagal di hapus!");window.location="tampil_balita.php?"</script>';
	}
}
}
else{
	echo '<script>window.history.back()</script>';
}	
?>