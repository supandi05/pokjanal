<?php
if(isset($_POST['Simpan'])){
include('koneksi.php');
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$jenis = $_POST['jenis'];
$agama	= $_POST['agama'];
$goldar	= $_POST['goldar'];
$pend = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$sk = $_POST['sk'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

$sql = "update data_bidan set nik_bidan='$nik', nama_bidan='$nama', jk_bidan='$jenis', goldar_bidan='$goldar', tmpt_lahir_bidan='$tempat_lahir', tgl_lahir_bidan='$tanggal_lahir', agama_bidan='$agama', kerja_bidan='$pekerjaan', pend_bidan='$pend', sk_no_bidan='$sk', alamat_bidan='$alamat', hp_bidan='$hp' where id_bidan='$id'";
 $query = mysqli_query($connect, $sql);
	if($query){
		echo '<script>alert("Data berhasil di edit! '.$id.'");window.location="tampil_bidan.php"</script>';
	}else{
		echo '<script>alert("Data Gagal di edit!");window.location="tampil_bidan.php""</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}	
?>
