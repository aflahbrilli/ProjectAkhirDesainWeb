<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Software</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styletambahdata.css">
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
                    <li role="presentation"><a href="crudadmin.php">Beranda </a></li>
                    <li class="active" role="presentation"><a href="tambah_data.php">Tambah Software </a></li>
                    <li role="presentation"><a href="index.php">Exit </a></li>
                </ul>
            </div>
        </div>
       </nav>
  <div class="form">
    <form class="login-form" method="post" action="prosses_simpan.php" enctype="multipart/form_data">
      <h1>Tambah Software</h1>
    	<table>
    		<form action="" method="POST" name="tambah_data">
    	<tr>
    		<td><label for="id_software">ID Software</label></td>
    		<td>:</td>
    		<td>
    			<input type="text" id="idSoftware" name="id_software"></input>
    		</td>
    	</tr>

    	<tr>
    		<td><label for="nama" >Nama Software</label></td>
    		<td>:</td>
    		<td>
    			<input type="text" id="namaSoftware" name="nama_software"></input>
    		</td>
    	</tr>

      <tr>
        <td><label for="link_download" >Link Download</label></td>
        <td>:</td>
        <td>
          <input type="text" id="link_download" name="link_download"></input>
        </td>
      </tr>

    	<tr>
    		<td><label for="berkas">Berkas</label></td>
          	<td>:</td>
          	<td>
            	<input type="file" name="berkas">
          	</td>
    	</tr>
    	</table>
  <button type="submit" name="tambah">Tambah</button>
  </form>
</div>
	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

