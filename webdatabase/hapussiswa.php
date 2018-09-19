<?php 
	require 'koneksi.php';
	session_start();

	$idsiswa = $_GET['id'];
	$sql = "DELETE FROM tb_siswa WHERE id_siswa = $idsiswa";

	if ($koneksi->query($sql)) {
		// masukkan data pesan dan hasil di session
		$_SESSION["pesan"]  = "Berhasil menghapus data";
		$_SESSION["result"] = "sukses";
		header("location:tampilsiswa.php");
		
	} else {
		$_SESSION["pesan"]  = "Gagal menghapus data dengan pesan error : " . $koneksi->error;
		$_SESSION["result"] = "gagal";
		header("location:tampilsiswa.php");
	}
?>