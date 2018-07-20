<?php 

$conn=mysqli_connect("localhost","root","","marketplace");
//$conn=mysqli_connect("sql310.epizy.com", "epiz_21341063", "pumZSkSfn6sV", "epiz_21341063_marketplace");
//$conn=mysqli_connect("sql204.0fees.us","0fe_21349564","dunialain22","0fe_21349564_marketplace");

function query($query)
{
	global $conn;
	$result=mysqli_query($conn,$query);
	$rows=[];
	while ($row=mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}
function tambah($data)
{
	global $conn;
	$produk=htmlspecialchars($data["produk"]);
	$spesifikasi=htmlspecialchars($data["spesifikasi"]);
	$harga=htmlspecialchars($data["harga"]);
	

	$image = upload();
	
	if(!$image)
	{
		return false;
	}

	$query = " INSERT INTO barang VALUES ('', '$produk', '$spesifikasi', '$harga', '$image'); ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function hapus($id)
{
	
	global $conn;

	mysqli_query($conn,"DELETE FROM barang WHERE id=$id");
	return mysqli_affected_rows($conn);
}

function edit($data)
{
	global $conn;
	$id=$data['id'];
	
	
	$produk=htmlspecialchars($data["produk"]);
	$spesifikasi=htmlspecialchars($data["spesifikasi"]);
	$harga=htmlspecialchars($data["harga"]);
	$image=htmlspecialchars($data["image"]);

	$query="UPDATE barang SET produk='$produk',spesifikasi='$spesifikasi',harga=$harga,image='$image' where id='$id' ";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);

}
function cari($keyword)
{
 	
 	$query="SELECT * FROM mahasiswa WHERE produk LIKE'%$keyword%' OR  spesifikasi LIKE'%$keyword%' ";

 	return query($query);
}




////



function upload(){
	$namafile = $_FILES['image']['name'];
	$ukuran = $_FILES['image']['size'];
	$error = $_FILES['image']['error'];
	$tmpName = $_FILES['image']['tmp_name'];

	//cek apakah ada image yg di upload atau tidak
	if($error===4){
		echo "<script>
				alert('pilih image');

			</script>";
			return false;
	}
	//jpg
	$extentsi = ['jpg','jpeg','png'];
	$exGambar =	explode('.', $namafile);
	$exGambar = strtolower(end($exGambar));
	if(!in_array($exGambar, $extentsi)){
		echo "<script>
				alert('extensi salah');

			</script>";
			return false;
	}
	//cek ukuran
	if($ukuran>1000000){
		echo "<script>
				alert('ukuran image terlalu besar');

			</script>";
			return false;
	}

	//lolos pengecekan
	move_uploaded_file($tmpName, 'images/'.$namafile);
	return $namafile;
}


function registrasi($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn , $data["password"]);
	$password2 = mysqli_real_escape_string($conn , $data["password2"]);

	//cek username
	$result=mysqli_query($conn, "SELECT username FROM user 	WHERE username ='$username' " );
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah dipakai')
			</script>";
			return false;
	}


	//cek konfir pass
	if($password!==$password2){
		echo "<script>
				alert('password tdk sesuai');

			</script>";
			return false;
	}
	// encripsi
	$password = password_hash($password, PASSWORD_DEFAULT);
	// + KE DATABASE
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password') ");
	return mysqli_affected_rows($conn);
}



function kritik($data)
{
	global $conn;

	$nama=htmlspecialchars($data['nama']);
	$telpon=htmlspecialchars($data['telpon']);
	$email=htmlspecialchars($data['email']);
	$subjek=htmlspecialchars($data['subjek']);
	$pesan=htmlspecialchars($data['pesan']);
	

	$query="INSERT INTO bukutamu VALUES ('','$nama', '$telpon', '$email', '$subjek', '$pesan');";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function cart($data){
	global $conn;
	$produk=$data['item_name'];
	$harga=$data['amount'];

	$query="INSERT INTO list_pesanan VALUES ('','$produk', '$harga');";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function hapuspesanan($id)
{
	
	global $conn;

	mysqli_query($conn,"DELETE FROM list_pesanan WHERE id=$id");
	return mysqli_affected_rows($conn);
}

function data_beli($data)
{
	global $conn;

	$name=htmlspecialchars($data['name']);
	$telpon=htmlspecialchars($data['telpon']);
	$Alamat=htmlspecialchars($data['Alamat']);
	$kota=htmlspecialchars($data['kota']);
	$tipe_alamat=htmlspecialchars($data['tipe_alamat']);
	

	$query="INSERT INTO list_pelanggan VALUES ('','$name', '$telpon', '$Alamat', '$kota', '$tipe_alamat');";

	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function registrasi_user($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));
	$email = strtolower(stripcslashes($data["email"]));
	$password = mysqli_real_escape_string($conn , $data["password"]);
	$password2 = mysqli_real_escape_string($conn , $data["password2"]);

	//cek username
	$result=mysqli_query($conn, "SELECT username FROM user_pelanggan WHERE username ='$username' " );
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah dipakai')
			</script>";
			return false;
	}


	//cek konfir pass
	if($password!==$password2){
		echo "<script>
				alert('password tdk sesuai');

			</script>";
			return false;
	}
	// encripsi
	$password = password_hash($password, PASSWORD_DEFAULT);
	// + KE DATABASE
	mysqli_query($conn, "INSERT INTO user_pelanggan VALUES('', '$username', '$email', '$password') ");
	return mysqli_affected_rows($conn);

}

function getusername($username) {
	$ed=$username['username'];
	return $ed;
}

 ?>