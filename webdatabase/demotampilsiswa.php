<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Siswa</title>
</head>
<body>
	<button><a href="insertsiswa.php" style="text-decoration: none;">Tambah</a></button><br><br>
	<table border="1">
		<?php 
			include 'koneksi.php';

			$sql = "SELECT * FROM tb_siswa";

			$tampil_data = $koneksi->query($sql);

			if ($tampil_data->num_rows > 0) {		
		?>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Kelas</th>
				<th>Aksi</th>
			</tr>

		<?php 
			$no = 1;
			while ($row = $tampil_data->fetch_assoc()) {
		?>
		
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row['nama_siswa'] ?></td>
				<td><?= $row['alamat_siswa'] ?></td>
				<td><?= $row['id_kelas'] ?></td>
				<td><button><a href="editsiswa.php?id=<?= $row['id_siswa'] ?>" style="text-decoration: none;">Edit</a></button><br><br>
</td>
			</tr>

		<?php
			}
	
			} else {
				echo "Data kosong";
			}
			
		?>
	</table>
</body>
</html>