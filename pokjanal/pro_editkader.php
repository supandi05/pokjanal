<?php
if(isset($_POST['Simpan'])){
include('koneksi.php');
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$jenis = $_POST['jenis'];
$bagian = $_POST['bagian'];
$agama	= $_POST['agama'];
$goldar	= $_POST['goldar'];
$pend = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$sk = $_POST['sk'];
$pendidikan = $_POST['pendidikan'];
$hp = $_POST['hp'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

$sql = "update data_kader set nik_kader='$nik', bag_kader='$bagian', nama_kader='$nama', jk_kader='$jenis', goldar_kader='$goldar', tmp_lahirkd='$tempat_lahir', tgl_lahirkd='$tanggal_lahir', agama_kader='$agama', pekerjaan_kader='$pekerjaan', pendidikan_kader='$pendidikan', sk_nokd='$sk', jabatan_kader='$jabatan', alamat_kader='$alamat', hp_kader='$hp' where id_kader='$id'";
 $query = mysqli_query($connect, $sql);
	if($query){
		echo '<script>alert("Data berhasil di edit! '.$id.'");window.location="tampil_'.$bagian.'.php"</script>';
	}else{
		echo '<script>alert("Data Gagal di edit!");window.location="tampil_'.$bagian.'.php""</script>';
	}
}else{
	echo '<script>window.history.back()</script>';
}	


?>
