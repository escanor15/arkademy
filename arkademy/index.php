<?php 
require 'functions.php'; 
require 'header.php'; 

$produk = query("SELECT * FROM produk");

if (isset($_POST["cari"]) ) {
	$produk = cari($_POST['keyword']);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<div class="jumbotron">
		<div class="container">
			<h1>Daftar Produk</h1>

			<br><br>
			
			<form action="" method="post">
				<input class="form-group" type="text" name="keyword" size="30px" autofocus placeholder="Masukan Keyword" autocomplete="off">
				<button class="btn btn-primary" type="submit" name="cari">Cari</button>	
			</form>

			<br>

			<div class="table test">
				<table border="1">
					<thead class="thead-dark">
					<tr>
						<th>No.</th>
						<th>Nama Produk</th>
						<th>Keterangan</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th> </th>
					</tr>
					</thead>
					
					<?php $i = 1; ?>
					<?php foreach ($produk as $row) : ?>	
					<tr>
						<td><?= $i; ?></td>
						<td><?= $row["nama_produk"]; ?></td>
						<td><?= $row["keterangan"]; ?></td>
						<td><?= $row["harga"]; ?></td>
						<td><?= $row["jumlah"]; ?></td>
						<td>
							<a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-success">Ubah</a>
							<a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
						</td>
					</tr>
				<?php $i++; ?>
				<?php endforeach ?>
			</table>
			</div>
			<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
		</div>
</div>




</body>
</html>

<?php 
require 'footer.php';
?> 