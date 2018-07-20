<?php 
require 'functions.php';
if(isset($_POST["register"])) {
	if(registrasi_user($_POST)>0){
		echo "<script>
				alert('Berhasil');
				document.location.href='logout.php';
			</script>";
	}else{
		echo mysqli_error($conn);
	}
}
?>



<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>

	<link rel="stylesheet" href="assets2/demo.css">
	<link rel="stylesheet" href="assets2/form-register.css">

</head>
<br><br><br>


<div class="main-content">

    <!-- You only need this form and the form-register.css -->
    <form class="form-register" method="post" action="">
        <div class="form-register-with-email">
            <div class="form-white-background">
                <div class="form-title-row">
                    <h1>Create User Access</h1>
                </div>
                <div class="form-row">
                    <label>
                        <span for="username">Username</span>
                        <input type="username" name="username" id="username">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span for="email">Email</span>
                        <input type="email" name="email" id="email">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span for="password">Password</span>
                        <input type="password" name="password" id="password">
                    </label>
                </div>
                <div class="form-row">
                    <label>
                        <span for="password2">Confirm Password</span>
                        <input type="password" name="password2" id="password2">
                    </label>
                </div>
                <div class="form-row">
                    <button type="submit" name="register">Register</button>
                </div>
            </div>
        </div>
    </form>

</div>

</body>

</html>