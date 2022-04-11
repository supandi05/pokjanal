<?php
if(isset($_POST['tambah'])){
include('koneksi.php');
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
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];


$sql = "INSERT INTO data_kader VALUES ('', '$bagian', '$nama', '$nik', '$tempat_lahir', '$tanggal_lahir','$jenis', '$goldar', '$agama', '$pend', '$pekerjaan', '$alamat', '$sk', '$jabatan', '$hp')";
if (mysqli_query($connect, $sql)) {
		echo '<script>alert("Data berhasil di posting!");window.location="tampil_'.$bagian.'.php"</script>';
} else {
		echo '<script>alert("Data gagal di posting!");window.location="tambah_kader.php"</script>';
}
mysqli_close($connect);
}

?>
