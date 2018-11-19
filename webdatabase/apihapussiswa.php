<?php
	include 'koneksi.php';

	$idsiswa = $_POST['inidsiswa'];

	// query database hapus data
	$qhapus = "DELETE FROM tb_siswa WHERE id_siswa = '$idsiswa'";
	// eksekusi query
	$hapus = $koneksi->query($qhapus);

	if ($hapus) {
		$data['pesan'] = 'Data berhasil dihapus';
		$data['hasil'] = "true";
	} else {
		$data['pesan'] = 'Data gagal dihapus';
		$data['hasil'] = "false";
	}

	echo json_encode($data);
?>