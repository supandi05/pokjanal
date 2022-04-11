<?php
if(isset($_POST['tambah'])){
include('koneksi.php');
$tgl = $_POST['tgl'];
$keterangan = $_POST['keterangan'];

$file = $_FILES['dok'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "asset/dokumen/";
move_uploaded_file($nama_tmp, $upload_dir.$nama_file);

$dot = explode('.', $nama_file);
$bolehup = array('doc', 'docx', 'pdf', 'xls', 'ppt');
$ekstensi = strtolower(end($dot));

	if(in_array($ekstensi, $bolehup) === true){
		$sql = "INSERT INTO dokumen VALUES ('', '$nama_file', '$keterangan', '$tgl')";
			if (mysqli_query($connect, $sql)) {
				echo '<script>alert("Data berhasil di posting!");window.location="tampil_dok.php"</script>';
			} else {
				echo '<script>alert("Data gagal di posting!");window.location="tambah_dok.php"</script>';
			}
	}else {
		echo '<script>alert("Ektensi File Tidak Diijinkan Diupload!");window.location="tambah_dok.php"</script>';
		}
}

?>
