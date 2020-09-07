<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Tes Validasi Nilai</title>
</head>
<body class="antiburn">
<form action="save.php" method="POST" enctype="multipart/form-data">
	<h1>Validasi nilai </h1>
	<table>
	<tr>
		<td>nis</td>
		<td> : </td>
		<td><input type="text" name="nis" class="form-control" placeholder=""></td>
	</tr>
	<tr>
		<td>nama</td>
		<td> : </td>
		<td><input type="text" name="nama" class="form-control" placeholder=""></td>
	</tr>
	<tr>
		<td>nilai matematika</td>
		<td> : </td>
		<td><input type="text" name="mtk" class="form-control" placeholder=""></td>
	</tr>
	<tr>
		<td>nilai Bahasa inggris</td>
		<td> : </td>
		<td><input type="text" name="inggris" class="form-control" placeholder=""></td>
		
	</tr>
	<tr>
		<td>nilai Bahasa Indonesia</td>
		<td> : </td>
		<td><input type="text" name="indo" class="form-control" placeholder="">	</td>
	</tr>
	
	<tr><td><input type="submit" name="simpan" class="btn btn-warning" value="proses"></td></tr>
	</table>
</form>
</body>
</html>