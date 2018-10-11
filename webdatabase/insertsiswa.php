<!DOCTYPE html>
<html>
<head>
	<title>Tambah Siswa</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Tambah Siswa</h1>
		<hr>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label for="namasiswa">Nama</label>
				<input class="form-control" id="namasiswa" type="text" name="nama" placeholder="Nama siswa" required>
			</div>
			<div class="form-group">
				<label for="alamatsiswa">Alamat</label>
				<textarea class="form-control" id="alamatsiswa" name="alamat"placeholder="Alamat siswa" rows="5" required></textarea>
			</div>
			<div class="form-group">
				<label for="kelassiswa">Kelas</label>
				<input class="form-control" id="kelassiswa" type="text" name="idkelas" placeholder="Kelas" required>
			</div>
			<input class="btn btn-primary" type="submit" value="Simpan">
		</form>
	</div>
		
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- bootstrap script -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php 
	// jika dapat request
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		include 'koneksi.php';
		session_start();

		// cek data apakah sudah didefinisikan atau belum
		if (!isset($_POST['nama']) && !isset($_POST['alamat']) && !isset($_POST['idkelas'])) {

			echo "Data belum didefinisikan";	
		}
		// cek apakah data kosong
		if (empty($_POST['nama']) && empty($_POST['alamat']) && empty($_POST['idkelas'])) {

			echo "Lengkapi data";
		} else {
			
			// data untuk disimpan
			$nama    = $_POST['nama'];
			$alamat  = $_POST['alamat'];
			$idkelas = $_POST['idkelas'];
		}

		$sql = "INSERT INTO tb_siswa (nama_siswa, alamat_siswa, id_kelas) VALUES ('$nama', '$alamat', '$idkelas')";

		if ($koneksi->query($sql) === TRUE) {
			// masukkan data pesan dan hasil di session
			$_SESSION["pesan"]  = "Berhasil menyimpan data";
			$_SESSION["result"] = "sukses";
			header("location:tampilsiswa.php");
		} else {
			$_SESSION["pesan"]  = "Gagal menyimpan data dengan pesan error : " . $koneksi->error;
			$_SESSION["result"] = "gagal";
			header("location:tampilsiswa.php");
		} 

		$koneksi->close();

		// peraturan dalam menulis sql di php
		// 1. kode query harus dimasukkan ke dalam quote
		// 2. nilai atau value harus dimasukkan ke dalam quote 
		// 3. angka atau numeric tidak dimasukkan ke dalam quote
		// 4. null tidak dimasukkan ke dalam quote 
	}
?>