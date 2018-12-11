<?php
    session_start();
    
  	session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
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
			<h1 style="text-align:center">Software Center</h1>
			<p style="text-align:center">New Software</p>
<?php
				include "data/conn.php";
				$query = "SELECT * FROM data";
				$sql = mysqli_query($koneksi, $query);
				

						
				while($data = mysqli_fetch_array($sql))
				{
					$urutan = 3;
					if($urutan%3 == 0)
					{

						echo '<div class="container" style="text-align:center"> ';  
						echo '<div class="row">';
					}
						echo "<div class='col-sm-4'>";
					  	echo '<div class="panel panel-success">';
						echo '<div class="panel-heading">'.$data['nama'].'</div>';
						echo '<div class="panel-body"><img src="data/uploads/' .$data['gambar'].'" style="width:100%"" alt="Image"></div>';
						echo '<div class="panel-footer">
						<a href="'.$data['link'].'" class="btn btn-sm btn-danger" target="_blank">Download</a></div>';
						/*echo '<a href="index.php" class="btn btn-sm btn-danger">Kembali</a>';*/
						echo "</div>";
						echo "</div>";

						$urutan = $urutan +1;
						
					if($urutan % 3 == 0){
						echo "</br>";

					}

				}
?>
</body>
</html>