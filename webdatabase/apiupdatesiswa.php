<?php
	include 'koneksi.php';

	// menerima data dari user
	$idsiswa = $_POST['inidsiswa'];
	$nama    = $_POST['innama'];
	$alamat  = $_POST['inalamat'];
	$idkelas = $_POST['inidkelas'];

	// query database update data
	$qupdate = "UPDATE tb_siswa SET nama_siswa = '$nama', alamat_siswa = '$alamat', id_kelas = '$idkelas' WHERE id_siswa = '$idsiswa'";
	// eksekusi query
	$update = $koneksi->query($qupdate);

	if ($update) {
		$data['pesan'] = 'Data berhasil diperbarui';
		$data['hasil'] = "true";
	} else {
		$data['pesan'] = 'Data gagal diperbarui';
		$data['hasil'] = "false";
	}

	echo json_encode($data);
?>