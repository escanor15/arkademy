<?php 
require 'functions.php';

$id = $_GET["id"];

if (hapus($id) >0){
	echo " 
			<script>
				alert('Keapus')
				document.location.href = 'index.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('Gagal Cuk!')
				document.location.href = 'index.php';
			</script>
			";
	}



 ?>