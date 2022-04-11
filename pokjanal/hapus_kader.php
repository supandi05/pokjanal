<?php
if(isset($_GET['id'])){
include('koneksi.php');
$id = $_GET['id'];
$sql = "select id_kader, bag_kader from data_kader where id_kader='$id'"; // syntax SQL
$result = $connect->query($sql); // eksekusi perintah SQL
while($row = mysqli_fetch_assoc($result)){
	$bagian = $row['bag_kader'];
	}
if ($result->num_rows == 0) {
	echo '<script>window.history.back()</script.';
}else{
	$del = "delete from data_kader where id_kader='$id'";
	if(mysqli_query($connect, $del)){
	echo '<script>alert("Data berhasil di hapus!");window.location="tampil_'.$bagian.'.php"</script>';
	}else{
		echo '<script>alert("Data Gagal di hapus!");window.location="tampil_balita.php?"</script>';
	}
}
}
else{
	echo '<script>window.history.back()</script>';
}	
?>