<?php 
session_start();
if(!isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}

require 'functions.php';


if (isset($_POST["submit"]))
{
	if(tambah($_POST)>0)
	{
		echo "<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>";
	}
	else {
		echo "<script>
				alert('data gagal ditambah');
				document.location.href = 'index.php';
			</script>";
		// var_dump(tambah($_POST));
	}


}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah</title>
 	<style >
 		label{
 			display: block;
 		}
 	</style>
 </head>
 <body>

 	<form action="" method="post" enctype="multipart/form-data">
 		<ul>
 			<li><label for="produk">produk</label>
 			<input type="text" name="produk" id="produk" required></li>

 			<li><label for="spesifikasi">spesifikasi</label>
 			<input type="text" name="spesifikasi" id="spesifikasi" required></li>

 			<li><label for="harga">harga</label>
 			<input type="text" name="harga" id="harga"></li>
 			<li><label for="image">image</label>
 			<input type="file" name="image" id="image"></li>
 			<button type="submit" name="submit">kirim</button>
 		</ul>
 	

 	</form>
 
 </body>
 </html>