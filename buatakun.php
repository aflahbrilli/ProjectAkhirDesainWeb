<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/untitled.css">
  <script src="assets/jquery.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
				<div class="container-fluid">
						<div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>Software Center</strong></a>
								<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
						</div>
						<div class="collapse navbar-collapse" id="navcol-1">
								<ul class="nav navbar-nav navbar-right">
										<li><a onclick="loadHome()" href="home.php">Home </a></li>
										<li><a onclick="loadSoftwareKomputer()" href="softwareKomputer.php">Software Komputer </a></li>
										<li><a onclick="loadSoftwareSmartphone()" href="softwareSmartphone.php">Software Smartphone </a></li>
										<li><a onclick="loadContact()" href="contact.php">Contact </a></li>
										<li><a onclick="loadLogin()" href="login.php">Login </a></li>
								</ul>
						</div>
				</div>
		</nav>
	<form action="" method="post" name="buatakun">
  <div class="login-page">
    <div class="form">
      <form class="login-form">
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="password"/>
        <button type="submit" name="buat">Buat</button>
<?php
	if(isset($_POST['buat']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$mysqli = new mysqli('localhost', 'root', '', 'webta');
		$perintah = $mysqli->query
		("
			INSERT INTO userpass SET
			username = '$username',
			password = '$password'
		");

		echo $mysqli->query($perintah);
		if($perintah === TRUE)
        {
        	echo "<br><p class='message'>===Akun Berhasil Dibuat===</p>";
        }
	}

?>
		<p class="message">Already registered? <a href="login.php">Sign In</a></p>
	</form>
	    </div>
	  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>