<?php
	session_start();
	$db_name = "webta";
	$con = mysqli_connect("localhost","root","") or DIE("Koneksi Ke Database Gagal");
	mysqli_select_db($con, $db_name) or DIE("Database Tidak Ada");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($con, "SELECT * FROM userpass WHERE (username = '$username') AND (password = '$password')");
	$rowcount = mysqli_num_rows($login); 

	if($rowcount == TRUE) 
		{
			$_SESSION['username'] = $username;
			
			header("Location: data\index.php");
		}
	else
		{
			header("Location: ./index.php");
		}
?>