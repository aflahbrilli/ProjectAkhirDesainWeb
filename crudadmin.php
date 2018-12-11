<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("Location: ./login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beranda</title>
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
                    <li class="active" role="presentation"><a href="#">Beranda </a></li>
                    <li role="presentation"><a href="tambah_data.php">Tambah Data </a></li>
                    <li role="presentation"><a href="logout_prosses.php">Exit </a></li>
                </ul>
            </div>
        </div>
     </nav>
	<h2>Data Software</h2>
	<table border = 2>
		<tr>
			<td>No</td>
			<td>ID Software</td>
			<td>Nama Software</td>
			<td>Link Download</td>
			<td>Berkas</td>
			<td>Tgl Uppload</td>
			<td>Opsi</td>
		</tr>
		<tr>
			<?php
				$mysqli = new mysqli("localhost", "root", "", "webta");
				$perintah = $mysqli->query("SELECT * FROM software ORDER BY id_software");
				$i = 1;
				while ($row = mysqli_fetch_array($perintah)){
						echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$row['id_software']."</td>";
						echo "<td>".$row['nama']."</td>";
						echo "<td>".$row['link_download']."</td>";
						echo "<td>".$row['berkas']."</td>";
						echo "<td>".$row['tgl_upload']."</td>";
						echo '<td>
						<a href="ubah.php?nis='.$row['id_software'].'">edit</a> /
						<a href="hapus.php?nis='.$row['id_software'].'">hapus</a>
						</td>';
						echo "</tr>";
						$i++;
					}
			?>
         </tr>
	</table>
</body>
</html>