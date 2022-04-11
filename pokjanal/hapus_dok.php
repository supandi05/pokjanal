<?php
if(isset($_GET['id'])){
include('koneksi.php');
$id = $_GET['id'];
$sql = "select id_dok from dokumen where id_dok='$id'"; // syntax SQL
$result = $connect->query($sql); // eksekusi perintah SQL
if ($result->num_rows == 0) {
	echo '<script>window.history.back()</script.';
}else{
	$del = "delete from dokumen where id_dok='$id'";
	if(mysqli_query($connect, $del)){
	echo '<script>alert("Data berhasil di hapus!");window.location="tampil_dok.php"</script>';
	}else{
		echo '<script>alert("Data Gagal di hapus!");window.location="tampil_dok.php?"</script>';
	}
}
}
else{
	echo '<script>window.history.back()</script>';
}	
?>