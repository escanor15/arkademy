<?php
require 'functions.php';
require 'header.php'; 

//ambil data di url
$id = $_GET["id"];

$mhs = query("SELECT * FROM produk WHERE id = $id")[0];


if (isset($_POST["submit"])) {
	# code...
	if (ubah($_POST) > 0){
		echo " 
			<script>
				alert('Data Kamera Berhasil Diubah')
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo " 
			<script>
				alert('Data Kamera Gagal Diubah!')
				document.location.href = 'index.php';
			</script>
			";
	}

}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Produk</title>
</head>
<body>
<div class="jumbotron" style="text-align: left">
	<div class="container">
	<h1>Tambah Data Produk</h1>
	<form action="" method="post" style="width:500px; margin-top:50px">
		<input type="hidden" name="id" value="<?php echo $mhs["id"]?>"> 
		<div>
			<label for="nama_produk">Nama Kamera </label>
			<input type="text" class="form-control" name="nama_produk" id="nama_produk" required value="<?php echo $mhs["nama_produk"]; ?>">
		</div>
		<div>
			<label for="keterangan">Keterangan  </label>
			<input type="text" class="form-control" name="keterangan" id="keterangan" required value="<?php echo $mhs["keterangan"]; ?>">
		</div>
		<div>
			<label for="harga">Harga  </label>
			<input type="text" class="form-control" name="harga" id="harga" required value="<?php echo $mhs["harga"]; ?>">
		</div>
		<div>
			<label for="jumlah">Jumlah  </label>
			<input type="text" class="form-control" name="jumlah" id="jumlah" required value="<?php echo $mhs["jumlah"]; ?>">
		</div>
		<div>
			<button type="submit" name="submit" class="btn btn-primary mt-5">Ubah Data</button>
		</div>
	</form>
	</div>
</div>

</body>
</html>

<?php 
require 'footer.php';
?>

