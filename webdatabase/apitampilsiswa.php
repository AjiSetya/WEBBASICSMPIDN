<?php
	include 'koneksi.php';

	// query database tampil data
	$qtampil = "SELECT tb_students.id, tb_students.name, tb_students.address, tb_students.address, tb_students.status, tb_classes.class_name, tb_classes.teacher_id FROM tb_students, tb_classes WHERE tb_students.class_id=tb_classes.id";
	// eksekusi query dan hasilnya disimpan di variable tampil
	$tampil = $koneksi->query($qtampil);

	// var_dump($tampil);

	// jika datanya ditemukan atau lebih dari 0
	if ($tampil->num_rows > 0) {

		// mengambil data dan menghasilkan datanya menjadi array associative
		while ($row = $tampil->fetch_assoc()) {
			//masukan masing2 data per row ke dalam variable array data[siswa]
			$data['students'][] = $row;
		}
		 
		// untuk masing2 data di dalam variable tampil,
		//  masukkan key ke dalam variable key dan value di dalam variable val
		/*foreach ($tampil as $key=>$val) {
			var_dump($val);
		}*/
		$data['pesan'] = "";
		$data['hasil'] = "true";
	} else {
		$data['pesan'] = "Data kosong";
		$data['hasil'] = "false";
	}

	echo json_encode($data);
?>