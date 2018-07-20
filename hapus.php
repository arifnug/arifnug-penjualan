<?php 
require 'functions.php';
$id=$_GET["id"];

if(hapuspesanan($id)>0)
{
	echo "
		<script>
		alert('berhasil di hapus');
		document.location.href='checkout.php';
		</script>
		";

}
else
{
	echo "
		<script>
		alert('gagal di hapus');
		document.location.href='checkout.php';
		</script>
		";
}


 ?>