<!DOCTYPE html>
<html>
<head>
	<title>Variable Request</title>
</head>
<body>
	<form method="POST" action="<?php echo$_SERVER['PHP_SELF']; ?>">
		Nama : <input type="text" name="nama">
		<input type="submit" value="Simpan">
	</form>
</body>
</html>

<?php 
	// variable request digunakan untuk mengumpulkan data setelah mengirim formulir HTML 
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// mengambil data dr form
		$nama = $_POST['nama'];
		// cek apakah nama kosong atau tidak
		if (empty($nama)) {
			echo "<script>alert('Nama kosong !');</script>";
		} else {
			echo "Data yang dimasukkan adalah $nama";
		}
		
	} else {
		echo "Request mode bukan POST";
	}
?>