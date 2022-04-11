<?php
if(isset($_POST['tambah'])){
include('koneksi.php');
$tgl = $_POST['tgl_foto'];
$keterangan = $_POST['keterangan'];

$file = $_FILES['foto'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "asset/images/galeri/";
move_uploaded_file($nama_tmp, $upload_dir.$nama_file);

$dot = explode('.', $nama_file);
$bolehup = array('png', 'jpg', 'jpeg');
$ekstensi = strtolower(end($dot));

	if(in_array($ekstensi, $bolehup) === true){
		$sql = "INSERT INTO galeri VALUES ('', '$nama_file', '$keterangan', '$tgl')";
			if (mysqli_query($connect, $sql)) {
				echo '<script>alert("Data berhasil di posting!");window.location="tampil_galeri.php"</script>';
			} else {
				echo '<script>alert("Data gagal di posting!");window.location="tambah_galeri.php"</script>';
			}
	}else {
		echo '<script>alert("Ektensi yang dibolehkan hanya jpg, png dan jpeg!");window.location="tambah_galeri.php"</script>';
		}
}

?>
