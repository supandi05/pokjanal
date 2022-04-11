<?php
if(isset($_POST['tambah'])){
include('koneksi.php');
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$waktu = $_POST['pelayanan'];


$sql = "INSERT INTO data_posyandu VALUES ('', '$nama', '$lokasi', '$waktu')";
if (mysqli_query($connect, $sql)) {
		echo '<script>alert("Data berhasil di posting!");window.location="tampil_posyandu.php"</script>';
} else {
		echo '<script>alert("Data gagal di posting!");window.location="tambah_posyandu.php"</script>';
}
mysqli_close($connect);
}

?>
