<?php
	session_start(); 
	include 'db/dbcon.php';
	if(isset($_POST['login'])){
		$email 		= $_POST['email'];
		$password   = $_POST['password'];
		$sql		= "select * from tbl_admin where admin_email ='$email' and admin_password='$password'";
		$query      = mysqli_query($con, $sql);
		$count      = mysqli_num_rows($query);
		if($count>0){
			$_SESSION['email'] = $email;
			header('location:home.php');
		}else{
			echo "<script>alert('Invalid Email or Password. Please Try Again')</script>";
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login| News Portal Online</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style/admin.css">
</head>
<body>
	<div class="container mt-5">
		<h3>Admin Login</h3>		
		<form action="" method="post">
			<div class="form-group">
				<label for="email">Email Address : </label>
				<input type="email" class="form-control" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="password">Password : </label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
		    <input type="submit" class="btn btn-primary" value="Login" name="login">
	    </form>		
	</div>
</body>
</html>