<?php include 'header.php'; ?>

<p>Ini body/konten</p>

<?php 
	if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['gender'])) {
		
		echo "Nama : " . $_POST['nama'] . "<br>";
		echo "Alamat : " . $_POST['alamat'] . "<br>";
		echo "Gender : " . $_POST['gender'] . "<br>";
	} else {
		echo "ehok";
	}
	
?>

<?php include 'footer.php'; ?>