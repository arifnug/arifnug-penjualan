<?php 
session_start();
if(!isset($_SESSION["login"])) {
	header("location: login.php");
	exit;
}

require 'functions.php';


if (isset($_POST["submit"]))
{
	if(tambah2($_POST)>0)
	{
		echo "<script>
				alert('berita berhasil ditambahkan');
				document.location.href = 'berita.php';
			</script>";
	}
	else {
		echo "<script>
				alert('berita gagal ditambah');
				document.location.href = 'berita.php';
			</script>";
		 
	}


}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah</title>
 	<style type="text/css">
		.form-style-3{
			max-width: 500px;
			font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
			margin:50px auto ;
			
		}
		.form-style-3 label{
			display:block;
			margin-bottom: 10px;
		}
		.form-style-3 label > span{
			float: left;
			width: 100px;
			color: #F072A9;
			font-weight: bold;
			font-size: 13px;
			text-shadow: 1px 1px 1px #fff;
		}
		.form-style-3 fieldset{
			border-radius: 10px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			margin: 0px 0px 10px 0px;
			border: 1px solid #FFD2D2;
			padding: 20px;
			background: #FFF4F4;
			box-shadow: inset 0px 0px 15px #FFE5E5;
			-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
			-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
			
		}
		{
			margin left: 50%;
		
		}
		.form-style-3 fieldset legend{
			color: #FFA0C9;
			border-top: 1px solid #FFD2D2;
			border-left: 1px solid #FFD2D2;
			border-right: 1px solid #FFD2D2;
			border-radius: 5px 5px 0px 0px;
			-webkit-border-radius: 5px 5px 0px 0px;
			-moz-border-radius: 5px 5px 0px 0px;
			background: #FFF4F4;
			padding: 0px 8px 3px 8px;
			box-shadow: -0px -1px 2px #F1F1F1;
			-moz-box-shadow:-0px -1px 2px #F1F1F1;
			-webkit-box-shadow:-0px -1px 2px #F1F1F1;
			font-weight: normal;
			font-size: 12px;
		}
		
		}
		.form-style-3 textarea{
			width:250px;
			height:100px;
		}
		.form-style-3 input[type=text],
		.form-style-3 input[type=date],
		.form-style-3 input[type=datetime],
		.form-style-3 input[type=number],
		.form-style-3 input[type=search],
		.form-style-3 input[type=time],
		.form-style-3 input[type=url],
		.form-style-3 input[type=email],
		.form-style-3 select, 
		.form-style-3 textarea{
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border: 1px solid #FFC2DC;
			outline: none;
			color: #F072A9;
			padding: 5px 8px 5px 8px;
			box-shadow: inset 1px 1px 4px #FFD5E7;
			-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
			-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
			background: #FFEFF6;
			width:50%;
		
		}
		.form-style-3  input[type=submit],
		.form-style-3  input[type=button]{
			background: #EB3B88;
			border: 1px solid #C94A81;
			padding: 5px 15px 5px 15px;
			color: #FFCBE2;
			box-shadow: inset -1px -1px 3px #FF62A7;
			-moz-box-shadow: inset -1px -1px 3px #FF62A7;
			-webkit-box-shadow: inset -1px -1px 3px #FF62A7;
			border-radius: 3px;
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;	
			font-weight: bold;
		}
		.form-style-3 .required{
			color:red;
			font-weight:normal;
		}
		</style>
 </head>
 <body>
<h2><center>Tambah Berita</center></h2>
<div class="form-style-3">
<form action="" method="post" enctype="multipart/form-data">
<fieldset>
  <label for="produk"><span>produk <span class="required">*</span></span>
  <input type="text" class="input-field" name="produk" value="" placeholder="Nama Produk" /></label>

  <label for="spesifikasi"><span>Info<span class="required">*</span></span>
  	<input type="text" class="input-field" name="info" value="" placeholder="Discount Produk" /></label>
  	
  <label for="harga"><span>harga <span class="required">*</span></span>
  	<input type="text" class="input-field" name="harga" value="" placeholder="USD $" /></label>

  <label for="image"><span>image <span></span></span>
  	<input type="file" class="input-field" name="image" /></label>
  
</select></label>
</fieldset>
<fieldset>
	<center><button type="submit" name="submit">tambah</button></center>
</fieldset>
</form>
</div>
 
 </body>
 </html>