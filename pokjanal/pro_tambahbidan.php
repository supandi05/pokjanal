<?php
if(isset($_POST['tambah'])){
include('koneksi.php');
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
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];


$sql = "INSERT INTO data_bidan VALUES ('', '$nama', '$nik', '$tempat_lahir', '$tanggal_lahir', '$jenis', '$goldar', '$agama', '$pend', '$pekerjaan', '$alamat', '$sk', '$hp')";
if (mysqli_query($connect, $sql)) {
		echo '<script>alert("Data berhasil di posting!");window.location="tampil_bidan.php"</script>';
} else {
		echo '<script>alert("Data gagal di posting!");window.location="tambah_bidan.php"</script>';
}
mysqli_close($connect);
}

?>
