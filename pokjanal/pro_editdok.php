<?php
if(isset($_POST['Simpan'])){
include('koneksi.php');
$id = $_POST['id'];
$tgl = $_POST['tgl'];
$keterangan = $_POST['keterangan'];


$file = $_FILES['dok'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "asset/dokumen/";

$dot = explode('.', $nama_file);
$bolehup = array('doc', 'docx', 'pdf', 'xls', 'xlsx', 'ppt');
$ekstensi = strtolower(end($dot));

echo $id;
if($nama_file != ''){
	if(in_array($ekstensi, $bolehup) === true){
	move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
		$sql = "update dokumen set tgl_dok='$tgl', keterangan_dok='$keterangan', nama_dok='$nama_file' where id_dok='$id'";
		if (mysqli_query($connect, $sql)) {
			echo '<script>alert("Data berhasil diubah!");window.location="tampil_dok.php"</script>';
		}else{
			echo '<script>alert("Data tidak berhasil diubah!");window.location="edit_dok.php"</script>';
		}
}else{
	echo '<script>alert("Ektensi File Tidak Diijinkan Diupload!");window.location="edit_dok.php"</script>';
}

}else{
	$sql = "update dokumen set tgl_dok='$tgl', keterangan_dok='$keterangan' where id_dok='$id'";
	if (mysqli_query($connect, $sql)) {
			echo '<script>alert("Data berhasil diubah!");window.location="tampil_dok.php"</script>';

}else{
	echo '<script>alert("Data tidak berhasil diubah!");window.location="edit_dok.php"</script>';
	
}
}
}	
?>