<?php 
require 'functions.php';
$id=$_GET["id"];
$data=query("SELECT * FROM berita WHERE id=$id")[0];

// var_dump($data);die;

if (isset($_POST["submit"]))
{
	if(editberita($_POST)>0)
	{
		echo "
		<script>
		alert('data berhasil di edit');
		document.location.href='berita.php';
		</script>
		";
	}
	else 
	{
		echo "
		<script>
		alert('data gagal di edit');
		document.location.href='berita.php';
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

 			<span><label for="info">Info</label>
 			<input type="text" name="info" id="info" value="<?=$data['info']; ?>" required>	</span>

 			<label for="harga">harga</label>
 			<span>	<input type="text" name="harga" id="harga" value="<?=$data['harga']; ?>"></span>

 			<label for="image">image</label>
 			<input type="text" name="image" id="image" value="<?=$data['image']; ?>"><br>	

 			<button type="submit" name="submit">edit</button>
 		</form>
 	</div>
 
 </body>
 </html>