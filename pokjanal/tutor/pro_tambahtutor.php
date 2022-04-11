<?php
if(isset($_POST['tambah'])){
include('koneksi.php');
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$jenis = $_POST['jenis'];
$tingkat = $_POST['tingkat'];
$agama	= $_POST['agama'];
$goldar	= $_POST['goldar'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];


$sql = "INSERT INTO data_anak VALUES ('$nama', '$nik', '$tempat_lahir', '$tanggal_lahir','$jenis', '$goldar', '$agama', '$ayah', '$ibu', '$alamat', '$hp')";
if (mysqli_query($connect, $sql)) {
		echo '<script>alert("Data berhasil di posting!");window.location="tampil_anak.php"</script>';
} else {
		echo '<script>alert("Data gagal di posting!");window.location="tambah_anak.php"</script>';
}
mysqli_close($connect);
}

?>
