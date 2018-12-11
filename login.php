<?php
	session_start();

	session_destroy();
	
	// header("Location: crudadmin.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Center</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
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
<!--     <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>Software Center</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php">Home </a></li>
                    <li role="presentation"><a href="#">Software Komputer</a></li>
                    <li role="presentation"><a href="#">Software Smartphone</a></li>
                    <li role="presentation"><a href="#">Contact </a></li>
                    <li class="active" role="presentation"><a href="login.php">Login </a></li>
                    
                </ul>
            </div>
        </div>
    </nav> -->
    <form action="proseslogin.php" method="POST" name="loginadmin">
    <div class="login-page">
    <div class="form">
      <form class="login-form">
        <input type="text" name="username" placeholder="username" required="required"/>
        <input type="password" name="password" placeholder="password" required="required"/>
        <button type="submit" name="login">login</button>
        <p class="message">Not registered? <a href="buatakun.php">Create an account</a></p>
      </form>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>