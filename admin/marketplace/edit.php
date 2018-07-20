<?php 
require 'functions.php';
$id=$_GET["id"];
$data=query("SELECT * FROM barang WHERE id=$id")[0];

// var_dump($data);die;

if (isset($_POST["submit"]))
{
	if(edit($_POST)>0)
	{
		echo "
		<script>
		alert('data berhasil di edit');
		document.location.href='index.php';
		</script>
		";
	}
	else 
	{
		echo "
		<script>
		alert('data gagal di edit');
		document.location.href='index.php';
		</script>


		";
	}
}




 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah</title>
 	<style >
 		.container{
 			width: 400px;
 			margin:50px auto;

 		}
 		span input{
 			width: 100%;
 			/*background-color: red;*/
 			padding: 10px;
 		}
 		label{
 			display: block;
 			margin-bottom: 5px;
 		}
 	</style>
 </head>
 <body>


 	<div class="container">	
 		<form method="post">
 			<input type="hidden" name="id" value=<?=$data["id"]; ?>>
 			<label for="produk">produk</label>
 			<span>	<input type="text" name="produk" id="produk"  size="40" value="<?=$data['produk']; ?>" required ></span>

 			<span><label for="spesifikasi">spesifikasi</label>
 			<input type="text" name="spesifikasi" id="spesifikasi" value="<?=$data['spesifikasi']; ?>" required>	</span>

 			<label for="harga">harga</label>
 			<span>	<input type="text" name="harga" id="harga" value="<?=$data['harga']; ?>"></span>

 			<label for="image">image</label>
 			<input type="text" name="image" id="image" value="<?=$data['image']; ?>"><br>	

 			<button type="submit" name="submit">edit</button>
 		</form>
 	</div>
 
 </body>
 </html>