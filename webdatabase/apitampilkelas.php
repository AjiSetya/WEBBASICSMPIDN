<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_classes";

	$tampil = $koneksi->query($query);

	if ($tampil->num_rows > 0) {
		
		while ($row = $tampil->fetch_assoc()) {
			$data['classes'][] = $row;
		}

		$data['msg'] = '';
		$data['hsail'] = 'true';
	} else {
		$data['msg'] = 'Data kelas kosong';
		$data['hsail'] = 'false';
	}
	
	echo json_encode($data);

?>