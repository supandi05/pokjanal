<?php
if(isset($_POST['Simpan'])){
include('koneksi.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$jenis = $_POST['jenis'];
$agama	= $_POST['agama'];
$goldar = $_POST['goldar_anak'];
$tingkat	= $_POST['tingkat'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];

$sql = "update data_anak set nik_anak='$nik', tinkatan_anak='$tingkat', nama_anak='$nama', jk_anak='$jenis', goldar_anak='$goldar', tmpt_lahir_anak='$tempat_lahir', tgl_lahir_anak='$tanggal_lahir', agama_anak='$agama', ayah_anak='$ayah', ibu_anak='$ibu', alamat_ortu='$alamat', hp_ortu='$hp' where nik_anak='$nik'";
 $query = mysqli_query($connect, $sql);

	if($query){
		echo '<script>alert("Data berhasil di edit! '.$nik.'");window.location="tampil_anak.php"</script>';
	}else{
		echo '<script>alert("Data Gagal di edit!");window.location="edit_anak.php?'.$nik.'"</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}	


?>
