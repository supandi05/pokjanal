<?php
if(isset($_POST['Simpan'])){
include('koneksi.php');
$id = $_POST['id'];
$tgl = $_POST['tgl_foto'];
$keterangan = $_POST['keterangan'];


$file = $_FILES['foto'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "asset/images/galeri/";

$dot = explode('.', $nama_file);
$bolehup = array('jpg', 'png', 'jpeg');
$ekstensi = strtolower(end($dot));

echo $id;
if($nama_file != ''){
	if(in_array($ekstensi, $bolehup) === true){
	move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
		$sql = "update galeri set tgl_foto='$tgl', keterangan_foto='$keterangan', nama_foto='$nama_file' where id_galeri='$id'";
		if (mysqli_query($connect, $sql)) {
			echo '<script>alert("Data berhasil diubah!");window.location="tampil_galeri.php"</script>';
		}else{
			echo '<script>alert("Data tidak berhasil diubah!");window.location="edit_galeri.php"</script>';
		}
}else{
	echo '<script>alert("Ektensi File Tidak Diijinkan Diupload!");window.location="tambah_dok.php"</script>';
}

}else{
	$sql = "update galeri set tgl_foto='$tgl', keterangan_foto='$keterangan' where id_galeri='$id'";
	if (mysqli_query($connect, $sql)) {
			echo '<script>alert("Data berhasil diubah!");window.location="tampil_galeri.php"</script>';

}else{
	echo '<script>alert("Data tidak berhasil diubah!");window.location="edit_galeri.php"</script>';
	
}
}
}	
?>