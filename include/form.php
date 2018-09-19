<?php include 'header.php'; ?>

<div class="content">
	<form action="konten.php" method="post">
		Nama : <input type="text" name="nama" value="" placeholder="Personal name">
		<br>
		Alamat : <textarea name="alamat" cols="30" rows="5" placeholder="Personal Adress"></textarea>
		<br>
		Jenis Kelamin : 
		<select name="gender">
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
		</select>
		<br>
		<input type="submit" value="Simpan">
	</form>
</div>

<?php include 'footer.php'; ?>