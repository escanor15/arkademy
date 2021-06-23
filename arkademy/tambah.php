<?php
require 'functions.php'; 
require 'header.php'; 

if (isset($_POST["submit"])) {
	# code...
	if (tambah($_POST) > 0){
		echo " 
			<script>
				alert('Data berhasil ditambah')
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('Data gagal ditambah!')
				document.location.href = 'index.php';
			</script>
			";
	}

}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
<div class="jumbotron" style="text-align: left">
	<div class="container">
	<h1>Tambah Data Kamera</h1>
		<form action="" method="post" style="width:500px; margin-top:50px">
			<div class="form-group">
				<label for="nama_produk">Nama Kamera</label>
				<input type="text" class="form-control" name="nama_produk" id="nama_produk" required>
			</div>
			<div class="form-group">
				<label for="Keterangan">Keterangan  </label>
				<input type="text" class="form-control" name="keterangan" id="keterangan" required>
			</div>
			<div class="form-group">
				<label for="harga">Harga</label>
				<input type="text" class="form-control" name="harga" id="harga" required>
			</div>
			<div class="form-group">
				<label for="jumlah">Jumlah  </label>
				<input type="text" class="form-control" name="jumlah" id="jumlah" required>
			</div>
			<div>
				<button type="submit" name="submit" class="btn btn-primary mt-4">Tambah Data</button>
			</div>
		</form>

	</div>
</div>

</body>
</html>

<?php 
require 'footer.php';
?>