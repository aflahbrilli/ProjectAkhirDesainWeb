<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
  <title>Software Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<h2 style="text-align:center">Admin</h2>

<div class="card">
  <img src="data/images/foto.jpg" alt="Aflah Brilli" style="width:100%">
  <h1>Aflah Brilli</h1>
  <p class="title">Founder</p>
  <p>Polytechnic State Of Malang</p>
  <div style="margin: 24px 0;">
    <a href="https://plus.google.com/u/0/108626270572876935960" target="_blank"><i class="fa fa-google-plus"></i></a>
    <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fa fa-envelope"></i></a> 
 </div>
</div>

</body>
</html>
