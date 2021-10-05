<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="form">
		<h3>Form Registrasi</h2>

	<form method="GET">
		<label>Nama</label>
		<input type="text" name="">

		<label>NIM</label>
		<input type="text" name=""><br>

		<label>Jenis Kelamin</label>
		<input type="Radio" name="Gender"> Laki-aki
		<input type="Radio" name="Gender"> Perempuan

		<p> <label>Program Studi</label>
		<select name="prodi">
			<option>Teknik Informatika</option>
			<option>Teknik Sipil</option>
			<option>Teknik Geomatika</option>
			<option>Teknik Geofisika</option>
			<option>Arsitektur</option>
			<option>Fisika</option>
		</select>
		</p>

		<p> <label>Angkatan</label>
		<select name="angkatan">
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
		</select>
		</p>
		<a href="tabeldata.php?" id="link"> Submit </a>
		<br><br>
	</form>
    </div>

<?php 
 if (isset($_GET["tomb"])) {
	$nama = $_GET['nama'];
	$nim = $_GET['nim'];
	$gender = $_GET['Gender'];
	$prodi = $_GET['prodi'];
	$angkatan = $_GET['angkatan'];

	header("location: tabeldata.php");

	echo" <tr>
				<td>$_GET[nim]</td>
				<td>$_GET[nama]</td>
				<td>$_GET[gender]</td>
				<td>$_GET[prodi]</td>
				<td>$_GET[angkatan]</td>
			</tr>
			";
}

 ?>
    
</body>
</html>