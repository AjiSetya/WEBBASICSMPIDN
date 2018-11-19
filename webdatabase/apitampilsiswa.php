<?php
	include 'koneksi.php';

	// query database tampil data
	$qtampil = "SELECT * FROM tb_siswa";
	// eksekusi query dan hasilnya disimpan di variable tampil
	$tampil = $koneksi->query($qtampil);

	// jika datanya ditemukan atau lebih dari 0
	if ($tampil->num_rows > 0) {

		// masukan masing2 data per row ke dalam variable array data[siswa]
		while ($row = $tampil->fetch_assoc()) {
			$data['siswa'][] = $row;
		}
		
		$data['pesan'] = "";
		$data['hasil'] = "true";
	} else {
		$data['pesan'] = "Data kosong";
		$data['hasil'] = "false";
	}

	echo json_encode($data);
	
?>