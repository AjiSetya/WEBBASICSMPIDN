<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Siswa</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- sweetalert -->
	<script src="../assets/sweetalert/sweetalert.min.js"></script>
</head>
<body>

	<?php
		// mulai session 
		session_start();

		// cek apakah ada data session result dan pesan yang diberikan untuk halaman ini
		if (isset($_SESSION['result']) && isset($_SESSION['pesan'])) {
			// ambil pesan result yang diberikan lewat session pesan
			$hasil = $_SESSION['result'];
			// jika pesan resultnya adalah sukses, maka tampilkan alert sukses
			if ($hasil == "sukses") {
				echo "<script>
				swal({
					title : 'Berhasil !',
					text  : '".$_SESSION['pesan']."',
					icon  : 'success',
					button: false,
					timer : 3000
					})
				</script>";
			} else {
				echo "<script>
				swal({
					title : 'Gagal !',
					text  : '".$_SESSION['pesan']."',
					icon  : 'error',
					button: false,
					timer : 3000
					})
				</script>";
			}
			// hapus semua data agar tak tampil
			session_unset();	
		} 	
	?>

	<div class="container">
		<a class="btn btn-outline-info" href="insertsiswa.php" style="text-decoration: none;">Tambah</a><br><br>
		<table class="table table-striped table-bordered table-success">
			<caption>List of 8 Junior High School</caption>
			<?php 
				include 'koneksi.php';

				$sql = "SELECT * FROM tb_siswa";
				$tampil_data = $koneksi->query($sql);
				if ($tampil_data->num_rows > 0) {		
			?>
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Kelas</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
			<?php 
				$no = 1;
				while ($row = $tampil_data->fetch_assoc()) {
			?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $row['nama_siswa'] ?></td>
						<td><?= $row['alamat_siswa'] ?></td>
						<td><?= $row['id_kelas'] ?></td>
						<td>
							<a class="btn btn-warning" href="editsiswa.php?id=<?= $row['id_siswa'] ?>">Edit</a>
							<a class="btn btn-danger" href="#!" onclick="konfirmasi('hapussiswa.php?id=<?= $row['id_siswa'] ?>')">Hapus</a>
						</td>
					</tr>

			<?php
				}
				} else {
					echo "Data kosong";
				}
			?>
			</tbody>
		</table>
	</div>

	<script>
		function konfirmasi(url) {
			swal({
				title     : 'Data yang telah dihapus tidak dapat dikembalikan',
				text      : 'Hapus data?',
				icon      : 'warning',
				buttons   : true,
				dangerMode: true,
			})
			.then((willDelete) => { // willDelete untuk menyimpan pilihan user
				if (willDelete) {
					// pindah lokasi halaman
					window.location.href = url; // hapussiswa.php?id=<?= $row['id_siswa'] ?>
				} else {
					swal({
						title : 'Batal !',
						text  : 'Batal menghapus data',
						icon  : 'error',
						button: false,
						timer : 1000
					})
				}
			})
		}
	</script>

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- bootstrap script -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>